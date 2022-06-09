<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\certification;
use App\Models\Checkout;
use App\Models\CheckoutDetail;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Course_topics;
use App\Models\Entreprenuer;
use App\Models\Quiz;
use App\Models\upload;
use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Aws\S3\MultipartUploader;
use Aws\Exception\MultipartUploadException;
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Illuminate\Support\Facades\Auth;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use Illuminate\Support\Facades\DB;
// use Storage;
class homecontroller extends Controller
{   
    public function index()
    {

       $totalcourse=Course::where('status',1)->count();
       $totalstd=User::where('role','User')->count();
       $totalcert=certification::count();
       $totalquiz_count=Quiz::count();

        $chart_data="";
        $chart_data1="";

    // earning
        $earning=CheckoutDetail::select(DB::raw('Month(created_at) as month'),
        DB::raw('sum(course_price)as total'),DB::raw('Year(created_at)as year'))
        ->whereYear('created_at',date('Y'))->groupBy('year','month')->get();
       
        foreach ($earning as $query) {
            $month=date("F", mktime(0,0,0, $query->month, 10));       
           $chart_data.="{x:'".$month."',y:".$query->total."},";
          }
     
      //endearning
        // total quizzes
        $totalquiz=DB::table('quiz_result')->select(DB::raw('Month(created_at) as month'),
        DB::raw('count(quiz_result_id)as total'),DB::raw('Year(created_at)as year'))
        ->whereYear('created_at',date('Y'))->groupBy('year','month')->get();
       
        foreach ($totalquiz as $totalq) {
            $month1=date("F", mktime(0,0,0, $totalq->month, 10));       
           $chart_data1.="{x:'".$month1."',y:".$totalq->total."},";
          }
          

        return view('admin.home',compact('chart_data','chart_data1','totalcourse','totalstd','totalcert','totalquiz_count'));
    }
   

    public function media()
    {   
        $course=Course::all();
        return view('admin.course.media',compact('course'));
    }

    public function media_show($course_id){
        $course=Course::find($course_id);
        $files=upload::where('course_id',$course_id)->get();     

        return view('admin.course.media_info',compact('files','course'));
    }

    // video upload 
    public function media_upload(Request $request)
    {

        $file=$request->file('file');
        $file_path = $file->getPathName();
        $file_name = $file->getClientOriginalName();
        $extention = $file->getClientOriginalExtension();
        $uniqid = uniqid().uniqid();
        $original_name=$request->course_folder.'/'.$uniqid.'.'.$extention;
        $disk = Storage::disk('s3');
       
        $uploader = new MultipartUploader($disk->getDriver()->getAdapter()->getClient(), $file_path, [
            'bucket' => Config::get('filesystems.disks.s3.bucket'),
            'key'    => $original_name,
        ]);
        
        $upload=new upload;
        $upload->course_id=$request->course_name;
        $upload->path=$original_name;
        $upload->type=$extention;
        $upload->file_name=$file_name;
        $upload->save();

        try {
            $result = $uploader->upload();
             return response()->json(['success'=>'file uploaded Successfull']);
        } catch (MultipartUploadException $e) {
             return response()->json(['error'=>$e->getMessage()]);

        }
    }
    // image upload 
    protected function media_upload2(Request $request){
   

       $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

    if (!$receiver->isUploaded()) {
        // file not uploaded
    }

    $fileReceived = $receiver->receive(); // receive file
    if ($fileReceived->isFinished()) { // file uploading is complete / all chunks are uploaded
        $file = $fileReceived->getFile(); // get file
        $file_name = $file->getClientOriginalName();
        $extention = $file->getClientOriginalExtension();
        if($extention=="mp4"||$extention=="wmv"||$extention=="avi"||$extention=="mkv"){
            $getID3 = new \getID3;
            $video_file = $getID3->analyze($file);
            $duration_seconds = $video_file['playtime_string'];        
        }else{
            $duration_seconds=null;
        }
     

        $path = Storage::putFile('course/'.$request->folder, $file);

        $upload=new upload;
        $upload->course_id=$request->id;
        $upload->path=$path;
        $upload->type=$extention;
        $upload->file_name=$file_name;
        $upload->duration=$duration_seconds;
        $upload->save();
        // return response()->json(['success'=>'file uploaded Successfull']);

        // delete chunked file
        unlink($file->getPathname());
        return [
            'path' => asset('storage/app/' . $path),
            // 'filename' => $fileName
        ];
    }

    // otherwise return percentage information
    $handler = $fileReceived->handler();
    return [
        'done' => $handler->getPercentageDone(),
        'status' => true
    ];



  

    }

    public function users()
    {
        $user=User::select('name','email','created_at','id')->where('role','User')->orderBy('created_at','DESC')->get();
        return view('admin.user.users',compact('user'));
    }

    public function user_profile($id)
    {
        $user=User::find($id);
        $second=Entreprenuer::where('user_id',$id)->get();

        $courses=Course::
          select('courses.course_name','courses.course_id','courses.total_lecture','courses.course_photo')  
         ->join('checkout_details','courses.course_id','checkout_details.course_id')
        ->join('checkouts','checkout_details.checkout_id','checkouts.checkout_id')
        ->where('checkouts.user_id',$id)
        ->get();
     
        $payment=Checkout::
          join('checkout_details','checkouts.checkout_id','checkout_details.checkout_id')
        ->where('checkouts.user_id',$id)
        ->orderBy('checkout_details.created_at','DESC')
        ->get();
       
        $certificate=certification::select('course_name','certificate_no','certifications.created_at')
            ->join('courses','courses.course_id','certifications.course_id')
            ->where('certifications.author',$id)->get();

        $quizesattemp=Quiz::join('quiz_result','quizes.quize_id','quiz_result.quize_id')
        ->where('quiz_result.author',$id)
        ->get();

        return view('admin.user.profile',compact('user','second','courses','payment','certificate','quizesattemp'));
    }


    public function payments()
    {
        $check=Checkout::orderBy('created_at','DESC')->get();
        return view('admin.payments.index',compact('check'));
    }
}
