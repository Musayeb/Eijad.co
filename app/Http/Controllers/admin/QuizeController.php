<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\Quize;
use App\Models\Quize_topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizeController extends Controller
{
    public function index(){
        $quize=Quize::
        select('courses.course_name','users.email','quizes.*')
        ->join('courses','courses.course_id','quizes.course_id')
        ->join('users','users.id','quizes.author')
        ->orderBy('courses.course_id','DESC')
        ->get();

        $courses=Course::select('course_id','course_name')->get();

        return view('admin.quize.all',compact('quize','courses'));
    }
    public function store(Request $request){
        $datavalide = $request->validate([
            'quiz_name'=>"required",
            'quiz_course'=>"required",
            'quiz_time'=>"required",     
            'total_question'=>'required'      
        ]);
        if($datavalide==true){
            $quiz=new Quize();
            $quiz->quize_name=$request->quiz_name;
            $quiz->course_id=$request->quiz_course;
            $quiz->time=$request->quiz_time;
            $quiz->author=Auth::id();
            $quiz->quiz_total_question=$request->total_question;
            $quiz->save();

            return response()->json(['success'=>"Quiz Created Successfully"]);
        } 

    }
    public function edit($id)
    {
       $quiz=Quize::find($id);
       return response()->json($quiz);
    }

    public function update(Request $request)
    {
        $datavalide = $request->validate([
            'quiz_name'=>"required",
            'quiz_course'=>"required",
            'quiz_time'=>"required",       
            'total_question'=>'required'     
        ]);
        if($datavalide==true){
            $quiz=Quize::find($request->quiz_id);
            $quiz->quize_name=$request->quiz_name;
            $quiz->course_id=$request->quiz_course;
            $quiz->time=$request->quiz_time;
            $quiz->quiz_total_question=$request->total_question;
            $quiz->save();
        }
        return response()->json(['success'=>"Quiz Updated Successfully"]);

    }

    public function destroy($id)
    {
        Quize::find($id)->delete();
    }

    public function quiz_statistics($id)
    {
        $pass=DB::table('quiz_result')
        ->where('status','Pass')
        ->where('quiz_result.quize_id',$id)
        ->count();
        $fail=DB::table('quiz_result')
        ->where('status','Fail')
        ->where('quiz_result.quize_id',$id)
        ->count();

        $all=DB::table('quiz_result')
        ->select('users.name','users.id','quiz_result.*')
        ->join('users','users.id','quiz_result.author')
        ->where('quiz_result.quize_id',$id)
        ->orderBy('quiz_result.created_at','Desc')->get();

        $quiz=Quiz::find($id);
        return view('admin.quize.statistics',compact('pass','fail','quiz','all'));
    }


    // public function show($id){
    //     $quize=Quize::find($id);
    //     $quize_topic=Quize_topic::where('quize_id',$id)->get();
        
    //     return view('admin.quize.quize_info',compact('quize','quize_topic'));
    // }


    // public function create_topic(Request $request)
    // {
    //     $datavalide = $request->validate([
    //         'quiz_topic'=>"required",
    //     ]);
    //     if($datavalide==true){
    //         $quize=new Quize_topic();
    //         $quize->quize_topic=$request->quiz_topic;
    //         $quize->quize_id=$request->quize;
    //         $quize->save();
    //         return response()->json(['success'=>"Quize Created Successfully"]);
    //     } 
    // }

    // public function update_topic(Request $request){
    //     $datavalide = $request->validate([
    //         'quiz_topics'=>"required",
    //     ]);
    //     if($datavalide==true){

    //         DB::table('quize_topics')
    //         ->where('quize_topic_id',$request->topic)
    //         ->update(['quize_topic'=>$request->quiz_topics]);
    //         return response()->json(['success'=>"Quize Updated Successfully"]);
    //     } 
    // }

    // public function delete_topic($id){
    //     Quize_topic::find($id)->delete();
    // }

//    public function questions($id){
       
//    } 
}
