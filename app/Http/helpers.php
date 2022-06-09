   <?php

use App\Http\helpers as Helpers;
use App\Models\Checkout;
use App\Models\CheckoutDetail;
use App\Models\Comment;
use App\Models\Course_topics;
use App\Models\CourseLearningStatus;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

    class Helper
    {

        public static function get_replies($topic_id, $parent_id)
        {
            $replies = Comment::join('users', 'comments.user_id', '=', 'users.id')
                ->select('users.name','users.id as user_id', 'comments.*')
                ->where('comments.parent_id', $parent_id)
                ->where('comments.topics_id', $topic_id)
                ->get();
            return($replies);

        }

        public static function get_likes($comment_id)
        {
            $likes = DB::table('likes')->select('comment_id')->where('comment_id', $comment_id)->count();

            if ($likes == 0) {
                return "";
            } else {
                return $likes;
            }
        }

        public static function get_status($comment_id)
        {
            $status = DB::table('likes')->where('comment_id', $comment_id)->where('user_id', Auth::id())->get();

            if (count($status) > 0) {
                return "liked";
            } else {
                return "not liked";
            }
        }

        public static function topic_status_check($topic_id){
            $check=CourseLearningStatus::where('topics_id',$topic_id)->where('user_id',Auth::id())->get();
            if($check->isEmpty()){
                return "notexisit";

            }else{
                return "exisit";
            }
        }
        public static function get_all_topic_count($course_id){
            $course=Course_topics::select(DB::raw('count(topics_id) as total'))->where('course_id',$course_id)->get();
            return $course;

        }
        public static function get_precentage_count($course_id,$id)
        {
            $check=CourseLearningStatus::
              select(DB::raw('count(course_learning_statuses.topics_id)as total_status'))
             ->join('course_topics','course_topics.topics_id','course_learning_statuses.topics_id')
            ->where('course_topics.course_id',$course_id)
            ->where('course_learning_statuses.user_id',$id)
            ->get();
            return $check;
        }

        public static function get_precentage_status($topic_id)
        {
            $check=CourseLearningStatus::select('status')
            ->where('course_learning_statuses.topics_id',$topic_id)
            ->where('course_learning_statuses.user_id',Auth::id())
            ->get();
            return $check;
        } 
        public static function get_avatar_image_user($user_id)
        {
           $path=User::find($user_id)->profile_photo_path;
            if(empty($path)){
                $path=url('public/img/photo.png');
                return $path;
            }else{
                $path=url('storage/app').'/'.$path;
                return $path;
            }
        } 
        public static function getInvoiceNumber()
        {
           $max=Checkout::max('invoice_number');
            return $max+1;
        }

        public static function quiz_check($course_id)
        {
            $quiz=Quiz::select('quize_id')->where('course_id',$course_id)->get();
            return $quiz; 
        }

        public static function get_quiz_status($quize_id)
        {
            $check=CourseLearningStatus::select('status')
            ->where('course_learning_statuses.quiz',$quize_id)
            ->where('course_learning_statuses.user_id',Auth::id())
            ->get();
            return $check;

        }

        public static function getpurchase_detail($id)
        {
            $detail=CheckoutDetail::
            select('courses.course_name','checkout_details.course_price')
            ->join('courses','courses.course_id','checkout_details.course_id')
            ->where('checkout_id',$id)
            ->get();
            return $detail;
        }

        public static function get_topic_status_admin($id)
        {
           $total_count= DB::table('course_learning_statuses')->where('topics_id',$id)->count();
           return $total_count;

        }
      

        
    }
