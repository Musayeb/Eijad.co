<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\questions;
use App\Models\Quize;
use App\Models\Quize_topic;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function show($id)
    {
        $question=questions::
         select('users.email','questions.*')
        ->join('users','users.id','questions.author')
        ->where('questions.quize_id',$id)
        ->get();
        
        $quiz=Quize::find($id);
      
        return view('admin.quize.make_question',compact('question','quiz'));
    }
    public function store(Request $request)
    {
            $datavalide = $request->validate([
                'question'=>"required",   
                'question_mark'=>"required",                
            ]);
            if($datavalide==true){
                $question =new questions(); 
                $question->text=$request->question;
                $question->quize_id=$request->quiz_number;
                $question->marks=$request->question_mark;
                $question->author=Auth::id();
                $question->save();    
               return response()->json(['success'=>'Question created Successfuly !']);      
           }
    }

    public function edit($id)
    {
        $question=questions::find($id);
        return response()->json($question);
    }
    public function update(Request $request)
    {  
        $datavalide = $request->validate([
            'question'=>"required",   
            'question_mark'=>"required",              
        ]);

        if($datavalide==true){
            $question=questions::find($request->question_id);
            $question->text=$request->question;
            $question->marks=$request->question_mark;
            $question->save();    
           return response()->json(['success'=>'Question updated Successfuly !']);      
       }
    }
    public function destroy($id)
    {
        questions::find($id)->delete();
    }
}
