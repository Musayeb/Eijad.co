<?php

namespace App\Http\Controllers\entrepreneur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Select_question;
use App\Models\Result;
use App\Models\Final_result;
use App\Models\certification;
use App\Models\CourseLearningStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Carbon\Carbon;


class QuizController extends Controller
{
 
    public function quiz_start($course=null){
        if($course==null){
            abort(404);
        }else{
           $quiz=Quiz::where('course_id',$course)->limit(1)->get();
           if($quiz->isEmpty()){
            abort(404);
           }else{
            return view('user.learning.quiz.start',compact('quiz'));
           }
        }
        
    }
   
    public function submit_question(Request $request){
        $score = 0;

        $question=Answer::select('answers.question_id','questions.marks','answers.is_correct')
        ->join('questions','answers.question_id','questions.question_id')
        ->where('answers.answer_id',$request->answer_id)
        ->get();
  
        if($question[0]->is_correct==1){
         Select_question::where('question_id',$question[0]->question_id)->update(['earn_mark'=>$question[0]->marks]);
        }else{
         Select_question::where('question_id',$question[0]->question_id)->update(['earn_mark'=>0]);
        }

    
        
    }



    public function get_question($quiz_id)
    {
        //delete previous question
        Select_question::where('author',Auth::id())->delete();

        $total=Quiz::find($quiz_id)->quiz_total_question;

        $questions= DB::table('questions')
        ->where('quize_id', $quiz_id)
        ->inRandomOrder()
        ->limit($total)
        ->get();

        $counter = 1;

        foreach($questions as $question){
            $selected = new Select_question();
            $selected->number = $counter;
            $selected->question_id = $question->question_id;
            $selected->quize_id = $question->quize_id;
            $selected->author = Auth::id();
            $selected->question_mark=$question->marks;            
            $selected->save();
            $counter++;
        }

        return response()->json($status=200);
    }

    public function load_question(Request $request){
        $number = $request->number;

        $question = Select_question::
          join('questions', 'questions.question_id', 'select_questions.question_id')
        ->select('questions.text', 'select_questions.question_id','select_questions.number')
        ->where('select_questions.number', $number)
        ->where('select_questions.quize_id',$request->quiz_id)
        ->where('select_questions.author',Auth::id())
        ->get()[0];

        $answers = DB::table('answers')
        ->where('question_id', $question->question_id)
        ->inRandomOrder()
        ->get();

        $questions_no = DB::table('quizes')->select('quiz_total_question')->where('quize_id', $request->quiz_id)->get();

        $response['data'] = $question;
        $response['n_o_q'] = $questions_no[0]->quiz_total_question;
        $response['answers'] = $answers;
        
        return response()->json($response);
        
        
    }

    public function quiz_complete(){
        $total_mark=Select_question::where('author',Auth::id())->sum('question_mark');
      if(!empty($total_mark)){
        $quiz=Select_question::where('author',Auth::id())->select('quize_id')->get()[0];
        $earn_mark=Select_question::where('author',Auth::id())->sum('earn_mark');
        $earnprecentage=100*$earn_mark/$total_mark;
        if($earnprecentage>70){
            $status="Pass";
        }else{
            $status="Fail";   
        }

        DB::table('quiz_result')
        ->insert([
            'total_mark'=>$total_mark,
            'earn_mark'=>$earn_mark,
            'precentage'=>round($earnprecentage),
            'status'=>$status,
            'quize_id'=>$quiz->quize_id,
            'author'=>Auth::id(),
            'created_at'=>Carbon::now()->toDateTimeString(),
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        $check=CourseLearningStatus::where('quiz',$quiz->quize_id)->where('user_id',Auth::id())->get();
        if($check->isEmpty()){
            $status=new CourseLearningStatus;
            $status->topics_id=Null;
            $status->quiz=$quiz->quize_id;
            $status->user_id=Auth::id();
            $status->status=1;
            $status->save();
        }
        Select_question::where('author',Auth::id())->delete();	

        if($earnprecentage>70){
            return response()->json(['success'=>'Congrats']);
        }else{
            return response()->json(['fail'=>'Faild']);
        }
       
     }else{
         return redirect('/dashboard');
     }
    }



    public function get_certificate($course){

        $cert = certification::join('courses', 'certifications.course_id', 'courses.id')
        ->join('users', 'certifications.user_id', 'users.id')
        ->select('users.name as u_name', 'courses.name as course_name', 'certifications.certificate_no')
        ->where('certifications.user_id', Auth::id())
        ->where('certifications.course_id', $course)
        ->get()[0];
        

        view()->share('topic.certification',$cert);
        $pdf = PDF::loadView('topic.certification', $cert);

        // download PDF file with download method
        return $pdf->download('eijad.pdf');
    }

    
}
