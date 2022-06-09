<?php

namespace App\Http\Controllers\admin\topics;
use App\Http\Controllers\Controller;
use App\Models\Topicstudymaterial;
use App\Models\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicstudymaterialController extends Controller
{
    protected function select_file($topic_id){
        $check=DB::table('course_topics')
        ->join('courses','courses.course_id','course_topics.course_id')
        ->where('course_topics.topics_id',$topic_id)
        ->groupBy('course_topics.topics_id')
        ->get();   
        
        $upload=upload::where('course_id',$check[0]->course_id)->wherein('type',['pdf','docx'])->get();
        return view('admin.course.selectstudymetrial',compact('upload','topic_id'));
    }

    protected  function store(Request $request)
    {
        $topic = new Topicstudymaterial;
        $topic->topics_id=$request->topic;
        $topic->upload_id=$request->select;
        $topic->save();

        $check=DB::table('course_topics')->join('courses','courses.course_id','course_topics.course_id')
        ->where('course_topics.topics_id',$request->topic)
        ->groupBy('course_topics.topics_id')
        ->get(); 
         
        session()->flash('notif','File selected successfully !');

        return redirect('admin/course/d/'.$check[0]->course_id.'/'.$request->topic);

    }
    protected function delete($id)
    {
       Topicstudymaterial::where('material_id',$id)->delete();
    }
}
