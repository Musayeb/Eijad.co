<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Option;
use App\Models\questions;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function show ($question_id){

        $question=questions::find($question_id);
     
        $options=Answer::select('users.email','answers.*')
        ->join('users','users.id','answers.author')
        ->where('question_id',$question_id)
        ->orderBy('answer_id','DESC')
        ->get();

        return view('admin.quize.option',compact('options','question','question_id'));
    }
    public function store(Request $request){
        $datavalide = $request->validate([
            'option'=>"required", 
            'is_correct_option'=>"required",                
        ]);        
        
        if($datavalide==true){
            $option =new Answer(); 
            $option->text=$request->option;
            $option->is_correct=$request->is_correct_option;
            $option->question_id=$request->question_number;
            $option->author=Auth::id();
            $option->save();    
           return response()->json(['success'=>'Option created Successfuly !']);      
       }
    }

    public function edit($id)
    {
        $option =Answer::find($id);
        return response()->json($option);
    }
    public function update(Request $request)
    {
        $datavalide = $request->validate([
            'option'=>"required", 
            'is_correct_option'=>"required",                
        ]);   
        if($datavalide==true){ 
        $option=Answer::find($request->option_id);
        $option->text=$request->option;
        $option->is_correct=$request->is_correct_option;
        $option->save();
        return response()->json(['success'=>'Option Updated Successfuly !']);      
        }
    }

    public function destroy($id)
    {
        $option=Answer::find($id)->delete();
        
    }
}
