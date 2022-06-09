<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use Illuminate\Support\Facades\Storage;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/

// pages 

Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
->middleware(['auth'])
->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
->middleware(['auth', 'signed', 'throttle:6,1'])
->name('verification.verify');
    
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('start_business','Homecontroller@start_business');
Route::get('start_business_list','Homecontroller@start_business_list');

Route::get('start_business/{course_slug?}','Homecontroller@start_business_detail');
Route::get('player/{video?}/{photo?}','Homecontroller@player');
Route::get('media_show/{id?}','Homecontroller@show_media');

// Route::get('get-video/{video?}', 'Homecontroller@getVideo')->name('getVideo');












// Route::get('/player', function () {
//     $video = "video/PIBtOloUC4SJtxrGZzBNdBh16TnFZHOtIlKVjg6Z.mp4";
//     $mime = "video/mp4";
//     $title = "Os Simpsons";

//     return view('player')->with(compact('video', 'mime', 'title'));
// });

// Route::get('/media_show/{filename}', function ($filename) {
//     // Pasta dos videos.

// });










































// course filter
Route::get('course/filter/skill/{type?}/{second?}','Homecontroller@filter_course_skill');
Route::get('course/filter/price/{type?}/{second?}','Homecontroller@filter_course_price');
Route::get('course/filter/duration/{type?}/{second?}','Homecontroller@filter_course_duration');
Route::get('course/filter/old_new/{type?}/{second?}','Homecontroller@filter_course_old_new');
// end filter



Route::get('/', function () {
return view('index');
});
Route::get('redirect', 'SocialController@redirect');
Route::get('callback', 'SocialController@callback');



Route::group(['middleware' => 'auth:sanctum','verified'], function () {
   Route::group(['middleware' => ['verified']], function () {


Route::get('/dashboard', 'Homecontroller@index');
    
    





// Route::get('entrepreneur/home','entrepreneur\homeController@index');

// Route::get('entrepreneur_2step_register','entrepreneur\Entre_2_s_data@index');
// Route::post('entrepreneur_2step_register','entrepreneur\Entre_2_s_data@store');
// Route::post('create_experience','entrepreneur\Entre_2_s_data@create_exprience'); 
// Route::post("upload",'Homecontroller@upload');

// admin

Route::get('admin/home','admin\homecontroller@index');

Route::get('admin/student','admin\homecontroller@users');
Route::get('admin/student/{id?}','admin\homecontroller@user_profile');


Route::get('admin/courses','admin\CourseController@cources');
Route::post('admin/courses','admin\CourseController@cources_add');
Route::post('admin/course/add-topic','admin\CourseController@create_topic');
Route::get('admin/course/delete-topic/{id?}','admin\CourseController@delete_topic');
Route::get('admin/course-status/{course_id?}/{value?}','admin\CourseController@course_status');


// course settings
Route::get('admin/delete/course/{id?}','admin\CourseController@cources_delete');
Route::get('admin/course/d/{id?}','admin\CourseController@courses_setttings');
Route::get('admin/course/statistics/{id?}','admin\CourseController@courses_info');
Route::get('admin/course/statistics/show_comments/{id?}','admin\CourseController@courses_info_comments');




Route::post('admin/course/settings','admin\CourseController@courses_settings');
Route::post('admin/course/upload/photo','admin\CourseController@courses_photo_upload');

// instructor
Route::resource('admin/course-instractor','admin\Course\InstructorController');
Route::post('admin/course-instractor-update','admin\Course\InstructorController@update');

// 

Route::get('admin/course/d/{id?}/{sub_id?}','admin\CourseController@cources_topic_info');

Route::post('admin/course/info/update','admin\CourseController@course_info_update');
Route::get('admin/course/ajax/get_quiz/{id?}','admin\CourseController@ajax_get_quiz');
// topic setting
Route::post('admin/course/topic/update/description','admin\CourseController@updateCourseTopic');
Route::post('admin/course/topic/update/quiz','admin\CourseController@updateCoursequiz');
Route::get('admin/course/uploaded/materials/{id?}/{type?}','admin\CourseController@uploadedMaterials');
Route::post('admin/course/select/materials','admin\CourseController@selectMaterial');
Route::get('admin/course/set/study_material/{topic_id?}/{status?}','admin\CourseController@set_study_material');
// end of topic setting

// //pakage setting
// Route::post('admin/course/pakage/add','admin\CourseController@store_pakage');
// Route::post('admin/course/pakage/update','admin\CourseController@update_pakage');
// Route::get('admin/course/pakage/delete/{id?}','admin\CourseController@delete_pakage');

// Route::post('admin/course/pakage/detail_store','admin\CourseController@store_pakage_detail');
// Route::post('admin/course/pakage/detail_edit','admin\CourseController@edit_pakage_detail');
// Route::get('admin/course/pakage/detail_delete/{id?}','admin\CourseController@delete_pakage_detail');
// // 
// media
Route::get('admin/media','admin\homecontroller@media');
Route::get('admin/course/media/{course_name?}','admin\homecontroller@media_show');
Route::post('admin/course/media/upload','admin\homecontroller@media_upload');
Route::post('admin/course/media/upload2','admin\homecontroller@media_upload2');
Route::get('admin/course/media/select/file/{topic_id?}','admin\topics\TopicstudymaterialController@select_file');
Route::post('admin/course/media/select/file','admin\topics\TopicstudymaterialController@store');
Route::delete('admin/course/media/select/file/delete/{id?}','admin\topics\TopicstudymaterialController@delete');
// media

// quiz setup
Route::resource('admin/quiz','admin\QuizeController');
Route::post('admin/quiz/update','admin\QuizeController@update');
// end quiz

// quiz question
Route::resource('admin/quiz/question','admin\QuestionController');
Route::post('admin/question/update','admin\QuestionController@update');
// quiz option
Route::resource('admin/quiz/option','admin\OptionController');
Route::post('admin/option/update','admin\OptionController@update');
// quiz statistics
Route::get('admin/quiz/statistics/{id?}','admin\QuizeController@quiz_statistics');

Route::get('admin/payments','admin\homecontroller@payments');
// end question


// user management
Route::group(['middleware' => 'auth'], function () {
Route::resource('admin/users-manage', 'admin\UserController');
Route::post('user_update','admin\UserController@update');
Route::post('resetPassword', 'admin\UserController@reset_password');

// User Profile
Route::get('admin/profile', 'admin\ProfileController@index');
Route::post('ChangePassword', 'admin\ProfileController@ChangePassword');
Route::post('ChangePhoto', 'admin\ProfileController@ChangePhoto');
});
// end user management




// entreprenuer

//checkout
Route::post('add_rate','Homecontroller@add_rate');
Route::get('enroll/free/{course_id?}','checkout\CheckoutController@enroll_free');
Route::resource('checkout','checkout\CheckoutController');
Route::post('card-payment','checkout\CheckoutController@cart_payment');

Route::get('paypal-payment','checkout\CheckoutController@paypal_payment');
Route::get('paypal-success','checkout\CheckoutController@paypal_success');
Route::get('paypal-cancel','checkout\CheckoutController@paypal_cancel');


 // Stripe Route
// Route::get('checkout/{id}', 'StripePaymentController@index');
// Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
// Route::get('test_email', function () {
//     return view('mail.purchase_confirmation');
// });

Route::get('account-settings','entrepreneur\homeController@accountsettings');

// entreprenuer
Route::post('store-info-personal',"entrepreneur\EntreprenuerController@store_personal_info");
Route::post('store-business-info',"entrepreneur\EntreprenuerController@store_business_info");
Route::post('avatar-change','entrepreneur\EntreprenuerController@avetar_change');
Route::post('change_email_address','entrepreneur\EntreprenuerController@change_email');
Route::post('change_password','entrepreneur\EntreprenuerController@change_password');

// ent pages
Route::get('purchase_history','entrepreneur\homeController@purchase_history');
// end entreprenuer

// Learn
Route::get('dashboard/courses-learning','entrepreneur\EntreprenuerController@courses_learning');
Route::get('dashboard/courses-learning/{slug?}','entrepreneur\EntreprenuerController@courses_learning_topic');
// topics show
Route::get('dashboard/courses-learning/{slug?}/topic/{topic_id?}','entrepreneur\EntreprenuerController@courses_topic_show_detail');
Route::get('download/{file?}','entrepreneur\EntreprenuerController@download');
Route::get('add-progress-status/{id?}','entrepreneur\EntreprenuerController@progress_status');
// 


// quiz
Route::get('dashboard/course/quiz/start/course={id?}','entrepreneur\QuizController@quiz_start');
Route::get('dashboard/course/quiz/start/get_question/{id?}','entrepreneur\QuizController@get_question');
Route::get('dashboard/course/quiz/start/load_question/{id?}','entrepreneur\QuizController@load_question');
Route::post('dashboard/course/quiz/start/submit_question','entrepreneur\QuizController@submit_question');
Route::get('dashboard/course/quiz/start/complete','entrepreneur\QuizController@quiz_complete');
// quiz


Route::get('certificate/{slug?}/','entrepreneur\EntreprenuerController@issueCertificate');
Route::get('certificate/download/{no?}','entrepreneur\EntreprenuerController@downloadCertificate');
Route::get('certificate/verify/{no?}','entrepreneur\EntreprenuerController@verifyCertificate');



// Route::get('aaa',function(){
//    return view('User.learning.certificate.certificate_template');
// });
// add to cart

Route::resource('cart','entrepreneur\CartController');

// comment and reply
Route::post('/add_comment','entrepreneur\EntreprenuerController@add_comment');
Route::post('/add_reply', 'entrepreneur\EntreprenuerController@add_reply');
Route::get('topic_list','entrepreneur\EntreprenuerController@list');
Route::get('get_reply/{id?}', 'entrepreneur\EntreprenuerController@get_replies');
Route::get('add_like/{id?}', 'entrepreneur\EntreprenuerController@add_like');
// 


// quiz

Route::get('dashboard/quiz/start',  'entrepreneur\QuizController@setting');


// endquiz
});

});

// Route::get('test-video',function(){
// return view('vedio');
// });

// Route::get('welcome',function(){
//     return view('welcome');
// });



    // 
//     Route::get('stripe', [StripeController::class, 'stripe']);
// Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

// Route::get('{any}',function()
// {
//     return view('home');
// })->where('any','.*');