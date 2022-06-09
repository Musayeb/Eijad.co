@extends('layouts.master')
@section('css')
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/assets/css/icons.css')}}">
    <style>
        #my-video {
            width: 100%;
            min-height: 300px;
        }
        .sidebar-page-container {
            position: relative;
            padding: 1% 0px 0px;
            background-color:transparent !important;
        }
        .btn-circle.btn-xl {
            width: 90px;
            height: 90px;
            padding: 10px 16px;
            border-radius: 53px;
            font-size: 12px;
            text-align: center;
            font-weight: 600;
        }
        .d-flex .prev:hover{
            background-color: #e5e7ec;
            cursor: pointer;
        }
        .d-flex .next:hover{
            background-color: #e5e7ec;
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <section class="page-title" style="padding-bottom: 20px">
        <div class="auto-container">
            <div class="intro pb-4">
                <h3 class="text-white font-weight-bold">{{ $course->course_name }} >
                    <small>{{ $course_topics[0]->topics_name }}</small>
                </h3>
            </div>
        </div>
    </section>
    <div class="auto-container pt-3 pb-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h6>{{ $course_topics[0]->topics_name }}</h6>
                <hr>
                <div class="w-100 text-center">
                    <div class="play">
                        
                    </div>
                </div>
               {{-- content --}}
                <div class="content-description mt-3">
                    <div>
                        @php
                            echo html_entity_decode($course_topics[0]->topic_descrip);
                        @endphp
                    </div>
                </div>
                {{-- content --}}
              
                {{-- download --}}
                @if ($course_topics[0]->study_material=="Yes") 
                @php
                    $files=DB::table('topicstudymaterials')
                    ->where('topics_id',$course_topics[0]->topics_id)
                    ->join('uploads','uploads.upload_id','topicstudymaterials.upload_id')
                    ->get();
                @endphp
                <div class="download mb-3">
                    <h4 style="position: relative;font-size: 20px;color: #161e39;font-weight: 700;margin-bottom: 25px;text-transform: capitalize;" class="border-bottom">Download</h4>
                    @foreach ($files as $one_file)
                    <div class="files">
                        <div class="d-flex ">
                            <div class="icon">
                                <i class="ti-download font-weight-bold"></i>
                            </div>
                            <div class="title">
                                <label class="pl-3"><a href="{{url('download')}}/{{ base64_encode($one_file->path)}}">{{$one_file->file_name}} </a></label>
                            </div>
                            <div class="extenstion">
                                <label class="pl-3">{{$one_file->type}}</label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                {{-- end download --}}

                {{-- topic slider --}}
                 <div class="d-flex mt-3 status_btn"> 
                     <div class="w-50  pt-4">
                     <a href="javscript:void()"><span >{{$total_comment->total_comment}} Comment</span></a>
                     </div>
                     <div class="w-50  text-right ">
                         @php $status=Helper::topic_status_check($course_topics[0]->topics_id); @endphp
                        @if($status=="exisit")
                        <button type="button" class="btn btn-primary btn-circle btn-xl " ><i class="ti-check h1 font-weight-bold"></i></button>
                        @else
                        <button type="button" class="btn btn-danger btn-circle btn-xl isComplete" data-id="{{$course_topics[0]->topics_id}}">Mark as<br> Complete</button>
                        @endif
                </div>
                 </div>
                <div class="slider border-top mt-3 mb-5 border-bottom">
                    <div class="d-flex ">
                        
                            <div class="w-50 border-right prev " >
                                @if(!empty($previous[0]->topics_id))
                                <div class="title pt-4 pb-4">
                                   <a href="{{url('dashboard/courses-learning')}}/{{$course->course_slug}}/topic/{{$previous[0]->topics_id}}">
                                    <i class="ti-angle-left h6" ></i>

                                    <span class="title-d font-weight-bold" style="font-size:18px">{{$previous[0]->topics_name}}</span>
                                   </a>

                                </div>
                                @else
                                <div style="cursor: not-allowed! important;" class="w-100 h-100">
                                </div>
                                @endif
                           
                            </div>
                            <div class="w-50 next">
                            @if(!empty($next[0]->topics_id))
                                    <div class="title text-right  pt-4 pb-4">
                                        <a href="{{url('dashboard/courses-learning')}}/{{$course->course_slug}}/topic/{{$next[0]->topics_id}}">
                                        <span class="title-d font-weight-bold" style="font-size:18px">{{$next[0]->topics_name}}</span>
                                        <i class="ti-angle-right h6" ></i>
                                        </a>
                                    </div>
                            @else

                            <div class="title text-right  pt-4 pb-4">
                                <a  href="{{url('dashboard/courses-learning')}}/{{$course->course_slug}}">
                                <span class="title-d font-weight-bold" style="font-size:18px">Course Dashboard</span>
                                <i class="ti-angle-right h6" ></i>
                                </a>
                            </div>
                            @endif
{{--                         
                                @php  $quizcheck=Helper::quiz_check($course->course_id); @endphp
                                @if(!empty($quizcheck[0]->quize_id))    

                                    @php  $check_quiz_Status=Helper::get_quiz_status($quizcheck[0]->quize_id);  @endphp
                                
                                          @if ($check_quiz_Status->isEmpty())      
                                            <div class="title text-right  pt-4 pb-4">
                                                <a href="{{url('dashboard/courses-learning')}}/{{$course->course_slug}}/quiz/start">
                                                <span class="title-d font-weight-bold" style="font-size:18px">Quiz</span>
                                                <i class="ti-angle-right h6" ></i>
                                                </a>
                                            </div>
                                     
                                        @else
                                        @if ($course->certification=="Yes")
                                            <div class="title text-right  pt-4 pb-4">
                                                <a href="{{url('dashboard/courses-learning')}}/{{$course->course_slug}}/certificate">
                                                <span class="title-d font-weight-bold" style="font-size:18px">Certificate</span>
                                                <i class="ti-angle-right h6" ></i>
                                                </a>
                                            </div> 
                        
                                        
                                        @endif
                                                
                                    @endif
                                
                                   @else

                                    @if ($course->certification=="Yes")
                                    <div class="title text-right  pt-4 pb-4">
                                        <a href="{{url('dashboard/courses-learning')}}/{{$course->course_slug}}/certificate">
                                        <span class="title-d font-weight-bold" style="font-size:18px">Certificate</span>
                                        <i class="ti-angle-right h6" ></i>
                                        </a>
                                    </div>
                            
                                    @endif
                                                         
    
                                @endif   
                            @endif --}}


                            </div>
                    </div>
                </div>
                 {{--end topic slider --}}
                

                                
                {{-- comment --}}
                <div class="sidebar-page-container">
                    <div class="row clearfix">
                            <div class="content-side blog-detail-column col-md-12 ">
                                <div class="blog-detail">
                                    
                                    
                                    <!-- Comment Form -->
                                    <div class="comment-form">
                                        <div class="group-title"><h4>Leave Comment</h4></div>
                                        
                                        <!--Comment Form-->
                                        <form method="POST" id="commentForm">
                                            @csrf
                                            <div class="row clearfix">
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <textarea class="" name="text" style="border:1px solid #00ab15" placeholder="Write your comment..." required></textarea>
                                                </div>
                                                <div>
                                                    <input type="hidden" name="topic_id" value="{{$course_topics[0]->topics_id}}">
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Submit Your Comment <i class="fa fa-angle-right"></i></span></button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                            
                                    </div>
                          
                                    <!-- Comments Area -->
                                    <div class="comments-area">
                                        <div class="group-title">
                                            <h4>Recent Comments</h4>
                                        </div>
                                        
                                        @foreach ($comments as $comment)
                                        <div id="comment{{$comment->comment_id}}">
                                            <div class="comment-box">
                                                <div class="comment">
                                                    @php $path=Helper::get_avatar_image_user($comment->user_id); @endphp

                                                    <div class="author-thumb"><img src="{{$path}}" alt="user-photo"></div>
                                                    <div class="comment-info clearfix"><strong>{{$comment->name}}</strong><div class="comment-time">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d-m-Y')}}</div></div>
                                                    <div class="text">{{$comment->text}}</div>
                                                    <a data-id="{{$comment->comment_id}}"  class="theme-btn reply-btn like"><i class="{{Helper::get_status($comment->comment_id) == 'liked' ? 'fa fa-heart' : 'ti-heart'}}"></i> Like</a><span class="theme-btn ml-2 like_count">{{Helper::get_likes($comment->comment_id)}}</span>
                                                    <a onclick="show_reply({{$comment->comment_id}})" class="theme-btn reply-btn ml-4"><i class="fa fa-reply"></i> Reply</a>
                                                    <div class="d-none" id="reply{{$comment->comment_id}}">
                                                        <form method="POST" class="replyForm">
                                                            @csrf
                                                            
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                                    <textarea class="w-100 mt-4" rows="5" name="text" required  style="border:1px solid #00ab15" placeholder="Write your reply..."></textarea>
                                                                </div>
                                                                <div>
                                                                    <input type="hidden" name="parent_id" value="{{$comment->comment_id}}">
                                                                    <input type="hidden" name="topic_id" value="{{$comment->topics_id}}">
                                                                </div>
                                                                
                                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                                    <button class="btn btn-md btn-success" type="submit" ><span class="txt">Submit Your Reply <i class="fa fa-angle-right"></i></span></button>
                                                                </div>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @foreach (Helper::get_replies($comment->topics_id, $comment->comment_id) as $reply)
                                        <div class="comment-box reply-comment mt-3">
                                            <div class="comment">
                                                @php $path1=Helper::get_avatar_image_user($reply->user_id); @endphp
                                                <div class="author-thumb"><img src="{{$path1}}" alt="user-photo"></div>
                                                <div class="comment-info clearfix"><strong>{{$reply->name}}</strong><div class="comment-time">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $reply->created_at)->format('d-m-Y')}}</div></div>
                                                <div class="text">{{$reply->text}}</div>
                                                <a data-id="{{$reply->comment_id}}" class="theme-btn reply-btn like"><i class="{{Helper::get_status($reply->comment_id) == 'liked' ? 'fa fa-heart' : 'ti-heart'}}"></i> Like</a><span class="theme-btn ml-2 like_count">{{Helper::get_likes($reply->comment_id)}}</span>
                                                <a onclick="show_reply({{$reply->comment_id}})" class="theme-btn reply-btn ml-4"><i class="fa fa-reply"></i> Reply</a>
                                                <div class="d-none" id="reply{{$reply->comment_id}}">
                                                    <form method="POST" class="replyForm">
                                                        @csrf
                                                        
                                                        <div class="row clearfix">
                                                    
                                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                                <textarea class="w-100 mt-4" rows="5" name="text" required style="border:1px solid #00ab15" placeholder="Write your reply..."></textarea>
                                                            </div>
                            
                                                            <div>
                                                                <input type="hidden" name="parent_id" value="{{$comment->comment_id}}">
                                                                <input type="hidden" name="topic_id" value="{{$comment->topics_id}}">
                                                            </div>
                                                            
                                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                                <button class="btn btn-md btn-success" type="submit" ><span class="txt">Submit Your Reply <i class="fa fa-angle-right"></i></span></button>
                                                            </div>
                                                            
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                
                
                                        @endforeach
                                      
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                {{-- end comment --}}
            </div>

        </div>
    </div>

    </div>
@endsection
@section('jquery')
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>

    <script>

    $(document).ready(function() {
        var src = '{{$course_topics[0]->vedio_upload_id}}';
        var src1 = '{{$course_topics[0]->photo_upload_id}}';
        $.ajax({
                method: "get",
                url: "{{ url('player') }}/" + src + '/' + src1,
            })
            .done(function(response) {
                $('.play').html(response);
            }).error(function(msg) {

            });
        });
     
    </script>
    
 <script>
        jQuery('.play').bind('contextmenu', function() {
            return false;
        });

    </script>
    
<script>
    $("#commentForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});
        $.ajax({
            url: "{{ url('/add_comment') }}",
            type: 'post',
            data: formData,
            success: function(data) {
                $('#commentForm')[0].reset();
                $('.comments-area').load(document.URL+' .comments-area');
            },
            error: function(data) {
                alert('server error');

            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>

<script>
    
    $('.new').css('display', 'none');
    function show_reply(id){
        document.getElementById("reply"+id).setAttribute('style', 'display:block !important');
    }
</script>

<script>

    $('body').on('submit','.replyForm',function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});
        $.ajax({
            url: "{{ url('/add_reply') }}",
            type: 'post',
            data: formData,
            success: function(data) {
                $('.replyForm')[0].reset();
                $('.comments-area').load(document.URL+' .comments-area');
            },
            error: function(data) {
                console.log('server error');

            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>


<script>

$('body').on('click','.like',function() {

   $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});
        $.ajax({
            url: "{{ url('/add_like') }}/"+$(this).attr('data-id'),
            type: 'get',
     
            dataType:'json',
            success: function(data) {
                $('.comments-area').load(document.URL+' .comments-area');
            },
            error: function(data) {
                console.log('server error')
            },
            cache: false,
            contentType: false,
            processData: false
        });
});

</script>

<script>
    $('body').on('click','.isComplete',function(){

        $.ajax({
            url: "{{ url('add-progress-status') }}/"+$(this).attr('data-id'),
            type: 'get',
            success: function(data) {
               
               if(data.success){
                $('.isComplete').addClass('btn-primary').removeClass('btn-danger').fadeIn('slow');
                $('.isComplete').html('<i class="ti-check h1 font-weight-bold"></i>').fadeIn('slow');

               }
            },
            error: function(data) {
                console.log('server error');

            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>

@endsection
