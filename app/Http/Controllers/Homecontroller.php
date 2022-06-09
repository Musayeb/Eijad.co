<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Entreprenuer;
use App\Models\Rating;
// use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Homecontroller extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == "User") {
            return redirect('/');
        } else {
            return redirect('admin/home');
        }
    }



    public function start_business()
    {      
        // where('status',1)->
        $course = Course::paginate(10);
        
        return view('website.start_business', compact('course'));
    }
    public function start_business_list()
    {      
        
        $course = Course::paginate(10);
        
        return view('website.start_business_list_view', compact('course'));
    }
        
    public function start_business_detail($course_slug)
    {
        $course = Course::where('course_slug', $course_slug)->get();

        if (!$course->isEmpty()) {
            // rating
            $response = array();
            $total_star=Rating::select("value")->where('course_id',$course[0]->course_id)->count();
            if(!empty($total_star)){
            $response['five'] = (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 5)->count() / $total_star)*100;
            $response['four']= (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 4)->count() / $total_star)*100;
            $response['three']= (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 3)->count() / $total_star)*100;
            $response['two'] = (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 2)->count() / $total_star)*100;
            $response['one']= (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 1)->count() / $total_star)*100;
            }else{
            $response['five'] = (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 5)->count());
            $response['four']= (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 4)->count() );
            $response['three']= (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 3)->count() );
            $response['two'] = (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 2)->count());
            $response['one']= (DB::table('ratings')->where('course_id',$course[0]->course_id)->where('value', 1)->count() );
            }
            $response['average'] = DB::table('ratings')->where('course_id',$course[0]->course_id)->avg('value');

            // rating
    
            $course_topic = DB::table('course_topics')->where('course_id', $course[0]->course_id)->get();
            $instructor = DB::table('instructors')->where('course_id', $course[0]->course_id)->get();

               return view('website.start_business_detail', compact('course', 'course_topic', 'instructor','response'));
        } else {
            abort(404);
        }
    }


    public function add_rate(Request $request)
    {
        $exist = DB::table('ratings')->where('course_id', $request->course)->where('author', Auth::id())->get();
        if(count($exist) > 0){
            DB::table('ratings')->where('course_id', $request->course)->where('author', Auth::id())->update(['value' => $request->value]);
            return response()->json('deleted');
        }else{
            $rate = new Rating();
            $rate->author = Auth::id();
            $rate->course_id = $request->course;
            $rate->value = $request->value;
            $rate->save();
            return response()->json('added');
        }
    }

// filter
    public function filter_course_skill($type,$sec=null)
    {
   

      if(!empty($sec)){
        $course=Course::where('course_level',$type)->where('status',1)->get();
        return view('website.start_business_filter2',compact('course'));
      }else{
        $course=Course::where('course_level',$type)->where('status',1)->get();
        return view('website.start_business_filter',compact('course'));
      }
      
    }
    public function filter_course_price($type,$sec)
    {
        if(!empty($sec)){
            $course=Course::where('price_type',$type)->where('status',1)->get();
            return view('website.start_business_filter2',compact('course'));
        }else{
            $course=Course::where('price_type',$type)->where('status',1)->get();
            return view('website.start_business_filter',compact('course'));
        }

       
    }

    public function filter_course_duration($type,$sec=null)
    {
        if(!empty($sec)){
            $course=Course::where('total_hours','>',$type)->where('status',1)->get();
            return view('website.start_business_filter2',compact('course'));
        }else{
            $course=Course::where('total_hours','>',$type)->where('status',1)->get();
            return view('website.start_business_filter',compact('course'));
        }
     
    }
    public function filter_course_old_new($type,$sec=null)
    {
        if(!empty($sec)){
            if($type=="Newest"){
                $course=Course::orderBy('created_at','DESC')->where('status',1)->get();
                return view('website.start_business_filter2',compact('course'));
            }else{
                $course=Course::orderBy('created_at','ASC')->where('status',1)->get();
                return view('website.start_business_filter2',compact('course'));
            }
        }else{
            if($type=="Newest"){
                $course=Course::orderBy('created_at','DESC')->where('status',1)->get();
                return view('website.start_business_filter',compact('course'));
            }else{
                $course=Course::orderBy('created_at','ASC')->where('status',1)->get();
                return view('website.start_business_filter',compact('course'));
            }
        }
 
     
    }

    protected function player($video_id,$photo_id){
        $video=DB::table('uploads')->select('path')->where('upload_id',$video_id)->get();
        $photo=DB::table('uploads')->select('path')->where('upload_id',$photo_id)->get();

       

        return view('player',compact('video','photo'));
    }

    protected function show_media($path)
    {
        $videosDir = storage_path('app/'.base64_decode($path));
            if (file_exists($filePath = $videosDir)) {
        
                $stream = new \App\Http\VideoStream($filePath);
        
                return response()->stream(function() use ($stream) {
                    $stream->start();
                });
            }
         return response("File doesn't exists", 404);
    }

    

}
