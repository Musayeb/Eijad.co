<?php

namespace App\Http\Controllers\entrepreneur;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseLearningStatusController;
use App\Models\certification;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Course_topics;
use App\Models\CourseLearningStatus;
use App\Models\Entreprenuer;
use App\Models\Like;
use App\Models\Quiz;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Helper;
use PDF;


class EntreprenuerController extends Controller
{
    // settings
    protected function store_personal_info(Request $request){

        $valid=$request->validate([
            "full_name"=>'required',
            "phone_number"=>'required',
            "country"=>'required',
            "province"=>'required',
            "gender"=>'required',
            "dob"=>'required'
        ]);
        if($valid){
            User::where('id',Auth::id())->update(['name'=>$request->full_name]);
            Entreprenuer::where('user_id',Auth::id())->update([
                'phone_number'=>$request->phone_number,
                'country'=>$request->country,
                'province'=>$request->province,
                'gender'=>$request->gender,
                'dob'=>$request->dob,
            ]);
            session()->flash('notif','Information saved successfully !');
            session()->flash('personal');
            return redirect()->back();
        }
        
    }

    protected function store_business_info(Request $request)
    {
      $valid=$request->validate([
        "business_role"=>'required',
        "current_status"=>'required',
        "education_level"=>'required',
        "incubation_program"=>'required',
        "goal_of_join"=>'required',
        "hear_about_us"=>'required',
        ]);
        if($valid){
            Entreprenuer::where('user_id',Auth::id())->update([
            'business_role'=>$request->business_role,
            'current_status'=>$request->current_status,
            'education_level'=>$request->education_level,
            'incubation_program'=>$request->incubation_program,
            'goal_of_join'=>$request->goal_of_join,
            'how_did_hear_about_us'=>$request->hear_about_us,
            'position'=>$request->position,
            'year_of_expirence'=>$request->years_of_experience,
            'employer'=>$request->employer,
            'field_of_experince'=>$request->field_of_experince,
           ]);
           

           session()->flash('notif','Information saved successfully !');
           session()->flash('busniess');
           return redirect()->back();
        }
    }

    protected function avetar_change(Request $request)
    {
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = uniqid() . '.png';
        Storage::disk('avatar')->put($file,$image_base64); 
        $path='avatar'.'/'.$file;    
      
        User::where('id',Auth::id())->update(['profile_photo_path'=>$path]);
         return response()->json(['success'=>'Profile picture successfully updated']);
    }

    protected function change_email(Request $request)
    {
        $valid=$request->validate([
            'email'=>'required|',
            'password'=>'required',
        ]);
        if($valid){
        if(Hash::check($request->password, Auth::user()->password)){
            User::where('id',Auth::id())->update(['email'=>$request->email]);
              session()->flash('notif','Email succesfully changed !');
               session()->flash('password','password !');
            return back();
        }else{
            session()->flash('error','Password is wrong try again !');
            session()->flash('password','password !');

            return back();

        }
     }
    }

    protected function change_password(Request $request)
    {
        $valid=$request->validate([
            'current_password'=>'required|min:8',
            'new_password'=>'required|min:8|same:confirm_password',
            'confirm_password'=>'required|',
        ]);
        if($valid){
        if(Hash::check($request->current_password, Auth::user()->password)){
            User::where('id',Auth::id())->update(['password'=>Hash::make($request->email)]);
            session()->flash('notif','Password succesfully changed !');
            session()->flash('password','password !');

            return back();
        }else{
            session()->flash('error','Current password is incorrect try again !');
            session()->flash('password','password !');

            return back();
        } 
     }

    }
    // settings

    // learning
    protected function courses_learning()
    {   
       $course=Course::join('checkout_details','courses.course_id','checkout_details.course_id')->where('checkout_details.author',Auth::id())->get();


       return view('User.learning.my_courses',compact('course')); 
    }
    protected function courses_learning_topic($slug=null){
        if(empty($slug)){
            abort(404);
        }else{
        $course=Course::where('course_slug',$slug)->get();
        $course=$course[0];
        $course_topics=Course_topics::where('course_id',$course->course_id)->get();

        $certificate=certification::where('course_id',$course->course_id)->where('author',Auth::id())->get();


        $quizesattemp=Quiz::join('quiz_result','quizes.quize_id','quiz_result.quize_id')
        ->where('quiz_result.author',Auth::id())
        ->where('quizes.course_id',$course->course_id)
        ->get();
        return view('User.learning.my_courses_topics',compact('course','course_topics','quizesattemp','certificate')); 
        }
    }
    // learning
    protected function courses_topic_show_detail($slug=null,$id=null)
    {
        if(empty($slug)||empty($id)){
            abort(404);
        }else{
        $comments = Comment::select('users.name','users.profile_photo_path','comments.*')->
             join('users', 'comments.user_id', '=', 'users.id')
            ->where('comments.topics_id', $id)
            ->where('comments.parent_id', NULL)
            ->orderBy('comments.comment_id', 'DESC')
            ->get();
        $total_comment = Comment::select(DB::raw('count(comment_id)as total_comment'))->
            where('comments.topics_id', $id)
           ->get()[0];

        
        $course=Course::select('course_id','course_slug','course_name','certification')->where('course_slug',$slug)->get()[0];
  
        $course_topics=Course_topics::where('course_id',$course->course_id)->where('topics_id',$id)->get();
          if($course_topics->isEmpty()){  
            abort(404);
        }
        $previous=Course_topics::select('topics_id','topics_name')->where('topics_id','<',$id)->where('course_id',$course->course_id)->orderBy('topics_id','DESC')->limit(1)->get();
        $next=Course_topics::select('topics_id','topics_name')->where('topics_id','>',$id)->where('course_id',$course->course_id)->limit(1)->get();

        return view('User.learning.my_courses_topics_show',compact('course','course_topics','comments','previous','next','total_comment')); 
        }
    }


    // comment and reply
    public function add_comment(Request $request){
        $valid = $request->validate([
            'text' => 'required',
            'topic_id' => 'required',
        ]);

        if($valid){
            $comment = new Comment();
            $comment->text = $request->text;
            $comment->topics_id = $request->topic_id;
            $comment->user_id = Auth::id();
            $comment->save();
            return response()->json($comment);

        }
    }

    public function add_reply(Request $request){
        $valid = $request->validate([
            'text' => 'required',
            'parent_id' => 'required',
            'topic_id' => 'required'
        ]);

        if($valid){
            $reply = new Comment();
            $reply->text = $request->text;
            $reply->parent_id = $request->parent_id;
            $reply->user_id = Auth::user()->id;
            $reply->topics_id = $request->topic_id;
            $reply->save();

            return response()->json($reply);
        }
    }

    public function get_replies($id){
        $replies = Comment::join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.text', 'comments.topic_id as c_topic_id', 'comments.created_at', 'users.name as c_user', 'comments.id as c_id')
        ->where('comments.parent_id', $id)
        ->orderBy('comments.id', 'DESC')
        ->get();
        return $replies;
    }


    public function add_like($id){
        
        

        $like = DB::table('likes')->where('comment_id', $id)->where('user_id', Auth::id())->get();

        if(count($like)>0){
            DB::table('likes')->where('comment_id', $id)->where('user_id', Auth::id())->delete();
            return response()->json('deleted');
        }else{
            $like = new Like();
            $like->user_id = Auth::id();
            $like->comment_id = $id;
            $like->save();
            return response()->json('added');
        }
        
    }
    // end comment and reply



    public function download($path)
    {   
       $path=base64_decode($path);
        return Storage::download($path);
    }
    protected function progress_status($id)
    {
        $check=CourseLearningStatus::where('topics_id',$id)->where('user_id',Auth::id())->get();
        if($check->isEmpty()){
            $status=new CourseLearningStatus;
            $status->topics_id=$id;
            $status->user_id=Auth::id();
            $status->status=1;
            $status->save();
             return response()->json(['success'=>'Success']);
        }
    }



    public function issueCertificate($slug)
    {

        $course=Course::where('course_slug',$slug)->get()[0]; 
        if(empty($course->course_id)){
            abort(404);
        }else{
         
         $check=certification::where('author',Auth::id())->where('course_id',$course->course_id)->get();
         if(empty($check[0]->certification_id)){
            $certificate_no=rand(200000,9000000);
            $totaltopic = Helper::get_all_topic_count($course->course_id);
            if (!empty($course->quiz_id)) {
                $total = (int) $totaltopic[0]->total + 1;
            } else {
                $total = $totaltopic[0]->total;
            }
            $checkCount = Helper::get_precentage_count($course->course_id);
            if (empty($total)) {
                $final = 0;
            } else {
                $final = ($checkCount[0]->total_status * 100) / $total;
            }
            if($final==100){
                // create cetificate
                $certify = new certification;
                $certify->author=Auth::id(); 
                $certify->course_id=$course->course_id;
                $certify->certificate_no=date('Y').$certificate_no;
                $certify->save();

                return response()->json(['success'=>'Congrdulation, your request for a certificate is rejected please make sure you are done with all the stage of course']);
    
            }else{
                return response()->json(['error'=>'Unfortunately, your request for a certificate is rejected please make sure you are done with all the stage of course']);
            }
         }   
      
            
        }
             
    }

    public function downloadCertificate($no)
    {

            $cert = certification::
             join('courses', 'certifications.course_id', 'courses.course_id')
            ->join('users', 'certifications.author', 'users.id')
            ->select('users.name', 'courses.course_name', 'certifications.certificate_no','certifications.created_at')
            ->where('certifications.certificate_no', $no)
            ->get();

            if(empty($cert[0]->certificate_no)){
                 abort(404);
            }else{
                view()->share('User.learning.certificate.certificate_template',compact('cert'));
                $pdf = PDF::loadView('User.learning.certificate.certificate_template',compact('cert'));
                return $pdf->download('eijad'.$no.'.pdf');
            }

           


    }

    public function verifyCertificate($no)
    {

        $cert = certification::
        join('courses', 'certifications.course_id', 'courses.course_id')
        ->join('users', 'certifications.author', 'users.id')
        ->select('users.name', 'courses.course_name', 'certifications.certificate_no','certifications.created_at')
        ->where('certifications.certificate_no', $no)
        ->get();
            if(empty($cert[0]->certificate_no)){
                abort(404);
           }else{
               return view('user.learning.certificate.certificate_template_website',compact('cert'));
           }

      
    }
}
