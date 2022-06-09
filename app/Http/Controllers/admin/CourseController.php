<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\certification;
use App\Models\Checkout;
use App\Models\CheckoutDetail;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use validator;
use App\Models\Course;
use App\Models\Course_topics;
use App\Models\Instructor;

use App\Models\Quiz;
use App\Models\Rating;
use App\Models\Topicstudymaterial;
use App\Models\upload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Image;
class CourseController extends Controller
{
    public function cources()
    {   
        $courses=Course::all();
        return view('admin.course.all',compact('courses'));
    }

    public function cources_add(Request $request){
        $datavalide = $request->validate([
        'course_name'=>"required",
        'course_type'=>"required",
        ]);
        if($datavalide==true){
            $dire=Storage::makeDirectory('course/'.$request->course_name);
            $coures=new Course();
            $coures->course_name=$request->course_name;
            $coures->course_type=$request->course_type;
            $coures->course_slug=Str::slug($request->course_name, '-');
            $coures->author=Auth()->user()->id;
            $coures->status=0;
            $coures->save();

            return response()->json(['success'=>"Course Created successfully"]);
        } 
    }
    public function cources_delete($id){
        Course_topics::where('course_id',$id)->delete();
        upload::where('course_id',$id)->delete();
      
        $course=Course::find($id);
        Storage::deleteDirectory('course/'.$course->course_name);
        $course->delete();

        response()->json(['success'=>'show']);
    }

    // public function cources_edit($id){
    //     $course=Course::find($id);
    //     $course_topic=Course_topics::select('topics_name')->where('course_id',$id)->get();
    //     foreach($course_topic as $row)
    //     {
    //         $arr[]=$row->topics_name;
    //     }
    //     $course_topic = implode(',',$arr);
    //     return response()->json([$course,$course_topic]);

    // }

    public function courses_setttings($id){
        
        $topic= Course_topics::where('course_id',$id)->get();
        $course=Course::where('course_id',$id)->get();
        $instructor=Instructor::join('users','users.id','instructors.author')->where('course_id',$id)->select('users.email','instructors.*')->get();
        return view('admin.course.course_settings',compact('id','course','topic','instructor'));
    }

    public function courses_info($id)
    {
        $course=Course::find($id);
        $topic= Course_topics::where('course_id',$id)->get();
      
        $totalenroll=CheckoutDetail::where('course_id',$id)->count();
        $profit=CheckoutDetail::where('course_id',$id)->sum('course_price');
   
        $certified=certification::where('course_id',$id)->count();
        $quiz=Quiz::join('quiz_result','quizes.quize_id','quiz_result.quize_id')
        ->where('quizes.course_id',$id)->count('quiz_result_id');
        $course_students=Checkout::
        select('users.id','name','email','users.created_at')
        ->join('checkout_details','checkout_details.checkout_id','checkouts.checkout_id')
        ->join('users','users.id','checkouts.user_id')
        ->where('checkout_details.course_id',$id)
        ->get();
      
        $total_star=Rating::select("value")->where('course_id',$id)->count();
        if(!empty($total_star)){
        $response['five'] = (DB::table('ratings')->where('course_id',$id)->where('value', 5)->count() / $total_star)*100;
        $response['four']= (DB::table('ratings')->where('course_id',$id)->where('value', 4)->count() / $total_star)*100;
        $response['three']= (DB::table('ratings')->where('course_id',$id)->where('value', 3)->count() / $total_star)*100;
        $response['two'] = (DB::table('ratings')->where('course_id',$id)->where('value', 2)->count() / $total_star)*100;
        $response['one']= (DB::table('ratings')->where('course_id',$id)->where('value', 1)->count() / $total_star)*100;
        }else{
        $response['five'] = (DB::table('ratings')->where('course_id',$id)->where('value', 5)->count());
        $response['four']= (DB::table('ratings')->where('course_id',$id)->where('value', 4)->count() );
        $response['three']= (DB::table('ratings')->where('course_id',$id)->where('value', 3)->count() );
        $response['two'] = (DB::table('ratings')->where('course_id',$id)->where('value', 2)->count());
        $response['one']= (DB::table('ratings')->where('course_id',$id)->where('value', 1)->count() );
        }
        $response['average'] = DB::table('ratings')->where('course_id',$id)->avg('value');

        // rating


        return view('admin.course.course_info',compact('topic','totalenroll','certified','profit','quiz','course_students','course','response'));
    }

    public function courses_info_comments($id)
    {
        $comments = Comment::select('users.name','users.profile_photo_path','comments.*')->
        join('users', 'comments.user_id', '=', 'users.id')
       ->where('comments.topics_id', $id)
       ->where('comments.parent_id', NULL)
       ->orderBy('comments.comment_id', 'DESC')
       ->get();
    
       $total_comment = Comment::select(DB::raw('count(comment_id)as total_comment'))->
        where('comments.topics_id',$id)
       ->get()[0];

        return view('admin.course.topic_comments_load',compact('comments','total_comment','id'));
    
    }
    

    public function create_topic(Request $request){
        
        $datavalide = $request->validate([
            'topic_name'=>"required",
            'type_of_topic'=>"required",
            ]);
            if($datavalide==true){
            $topic=new Course_topics();
            $topic->topics_name=$request->topic_name;
            $topic->type_of_topic=$request->type_of_topic;
            $topic->course_id=$request->course;
            $topic->save();
            return response()->json(['success'=>"Topic Created successfully"]);
                
            }
    }





    public function delete_topic($id){
        Course_topics::find($id)->delete();
    }

    public function courses_settings(Request $request)
    {
        $datavalide = $request->validate([
            'course_name'=>"required",
            'course_type'=>"required",
            'course_description'=>"required",
            'course_bio'=>"required",
            'total_lecture'=>"required",
            'total_hours'=>"required",
            'language'=>"required",
            'last_update'=>"required",         
            'course_level'=>"required",
            'certification'=>"required",
            'course_bio'=>"required",
            'course_price'=>'required'
            ]);

        if($datavalide){
        $course=Course::find($request->course_id);
        $course->course_name=$request->course_name;
        $course->course_type=$request->course_type;
        $course->total_lecture=$request->total_lecture;
        $course->total_hours=$request->total_hourse;
        $course->course_bio=$request->course_bio;
        $course->total_lecture=$request->total_lecture;
        $course->total_hours=$request->total_hours;
        $course->course_lanuguage=$request->language;
        $course->course_level=$request->course_level;
        $course->certification=$request->certification;
        $course->course_description=$request->course_description;
        $course->last_update=$request->last_update;
        $course->course_price=$request->course_price;

        $course->save();	
        return response()->json(['success'=>"Course setting updated successfully"]);
        }
    }    
    public function courses_photo_upload(Request $request)
    {
        $course=Course::find($request->course);

        if($request->hasFile('course_photo')){
            

            $image = $request->file('course_photo');
            $input['imagename'] = time().'.'.$image->extension();
         
            $filePath = storage_path('app/course-photo');
    
            $img = Image::make($image->path());
            $img->resize(400,400, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$input['imagename']);
           
            Storage::delete($course->course_photo);
            $course->course_photo='course-photo/'. $input['imagename'];
            $course->save();

        return response()->json(['success'=>"Course thumbnail photo updated successfully"]);

        }
    }


    public function cources_topic_info($course_id,$topic_id)
    {

        $course= DB::table('course_topics')
            ->join('courses','course_topics.course_id','courses.course_id')
            ->where('topics_id',$topic_id)
            ->groupBy('course_topics.topics_id')
            ->get();
       $videolink= DB::table('uploads')
                ->select('path')
                ->where('uploads.upload_id',$course[0]->vedio_upload_id)
                ->get();
 
        $imagelink= DB::table('uploads')
        ->select('path')
        ->where('uploads.upload_id',$course[0]->photo_upload_id)
        ->get();

        if(!empty($videolink[0]->path)){
            $videolink=$videolink[0]->path;
        }else{
            $videolink=null;
        }
        if(!empty($imagelink[0]->path)){
           $imagelink=$imagelink[0]->path;
        }else{
            $imagelink=null;
        }
      

         $study_material=Topicstudymaterial::join('uploads','uploads.upload_id','topicstudymaterials.upload_id')->where('topics_id',$topic_id)->get();

        return view('admin.course.course_topic_setting',compact('course_id','topic_id','course','study_material','imagelink','videolink'));
    }

    public function ajax_get_quiz($id)
    {
         $quiz=DB::table('quize_topics')->where('quize_id',$id)->get();
        return response()->json($quiz);
    }    
    public function course_info_update(Request $request)
    {
        $datavalide = $request->validate([
            'type_description'=>"required",
            'quiz_topic'=>"required",
            'assignment'=>"required",
        ]);
        if($datavalide==true){
         DB::table('course_topics')->where('topics_id',$request->topic_id)->update([
             'type_of_topic'=>$request->type_of_topic,
             'topic_descrip'=>$request->type_description,
             'assignment'=>$request->assignment,
             'quize_topic_id'=>$request->quiz_topic,
         ]);
         return response()->json(['success'=>"Topic Created successfully"]);
        }
    }

    public function updateCourseTopic(Request $request)
    {
        $datavalide = $request->validate(['course_topic_name'=>'required','description'=>"required"]);
        if($datavalide==true){  
            
            $topic=Course_topics::find($request->topic_id);
            $topic->topic_descrip=$request->description;
            $topic->topics_name=$request->course_topic_name;
            $topic->save();
            return response()->json(['success'=>"Description Updated successfully"]);

        }
    }


    public function updateCoursequiz(Request $request)
    {
        $datavalide = $request->validate(['quiz'=>"required"]);
        if($datavalide==true){  
            
            $topic=Course_topics::find($request->topic_id);
            $topic->quize_topic_id=$request->quiz;
            $topic->save();
            return response()->json(['success'=>"Quiz Set successfully"]);

        }
    }

    public function uploadedMaterials($topic_id,$type)
    {
     $check=DB::table('course_topics')
     ->join('courses','courses.course_id','course_topics.course_id')
     ->where('course_topics.topics_id',$topic_id)
     ->groupBy('course_topics.topics_id')
     ->get();   
     if($type=="video"){
        $upload=upload::where('type','like','mp4')
        ->orwhere('type','like','mkv')
        ->orwhere('type','like','webm')
        ->where('course_id',$check[0]->course_id)
        ->get();
     }else{
        $upload=upload::where('type','like','png')
        ->orwhere('type','like','jpg')
        ->orwhere('type','like','jpeg')
        ->orwhere('type','like','gif')
        ->where('course_id',$check[0]->course_id)
        ->get();
     }

     return view('admin.course.selectImage_video',compact('upload','topic_id'));
        
    }


    public function selectMaterial(Request $request)
    {
        $topic=Course_topics::find($request->topic);
        if($request->type=="poster"){
        $topic->photo_upload_id=$request->select;
        $topic->save();
        
        $check=DB::table('course_topics')->join('courses','courses.course_id','course_topics.course_id')
        ->where('course_topics.topics_id',$request->topic)
        ->groupBy('course_topics.topics_id')
        ->get(); 
        session()->flash('notif','Poster Image Set successfully !');
        return redirect('admin/course/d/'.$check[0]->course_id.'/'.$request->topic);

        }else{
         $topic->vedio_upload_id=$request->select;
         $topic->save();
         
         $check=DB::table('course_topics')->join('courses','courses.course_id','course_topics.course_id')
         ->where('course_topics.topics_id',$request->topic)
         ->groupBy('course_topics.topics_id')
         ->get(); 
         session()->flash('notif','Video Material Set successfully !');

         return redirect('admin/course/d/'.$check[0]->course_id.'/'.$request->topic);

        }

    }
    public function set_study_material($topic_id,$status)
    {
        $topic=Course_topics::find($topic_id);
        $topic->study_material=$status;
        $topic->save();
        if($status=="Yes"){
            return response()->json(['success'=>"Information update successfully"]);

        }else{
            return response()->json(['success'=>"Information update successfully"]);
        }
        
    }


    public function course_status($course_id,$value)
    {
        Course::where('course_id',$course_id)->update(['status'=>$value]);
        return response()->json(['success'=>'Course status changed successfully']);
    }
    
}
