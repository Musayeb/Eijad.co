@extends('layouts.master')
@section('css')
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />

    <style>
        .strip_single_course {
            padding-top: 10px;
        }

        .strip_single_course h4 {
            line-height: 18px;
            font-size: 16px;
            padding: 5px 10px 10px 50px;
            margin: 0;
        }

        .strip_single_course ul {
            margin-left: 10px;
        }

        ol,
        ul {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .creator_name {
            color: #00ab15 !important;
            font-weight: 800;
        }

        .intro {
            padding-bottom: 40px;
        }

        .text {
            position: relative;
            color: #03382e;
            font-weight: 600;
            line-height: 1.3em;
            margin-bottom: 15px;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }

        .modal-body {
            position: relative;
            padding: 0px;
        }

        .close {
            position: absolute;
            right: -30px;
            top: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }

    </style>
@endsection


@section('content')
    <section class="page-title">
        <div class="auto-container">
            <div class="intro">
                <h3 class="text-white font-weight-bold"> {{ 
                     $course[0]->course_name }}</h3>
                <p class="text-white">{{ $course[0]->course_bio }}</p>
                <span class="text-white">Created by</span>
                @foreach ($instructor as $ins)
                    <a class="creator_name"><span>{{ $ins->instructor_name }}</span>,</a>
                @endforeach


                <p><i class="fa fa-refresh text-white" aria-hidden="true"></i>&nbsp;<span class="text-white">Last Update
                        {{ $course[0]->last_update }}</span> &nbsp;<i class=" text-white fa fa-globe"
                        aria-hidden="true"></i>
                    <span class="text-white">{{ $course[0]->course_lanuguage }}</span>
                </p>
            </div>
        </div>
    </section>
    <section class="intro-section">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(&quot;{{ asset('public/assist/images/icons/icon-1.png') }}&quot;); transform: unset; transition: transform 0s linear 0s; will-change: transform;">
        </div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(&quot;{{ asset('public/assist/images/icons/icon-2.png') }}&quot;); transform: unset; transition: transform 0s linear 0s; will-change: transform;">
        </div>
        <div class="circle-one"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">

                        <div class="card p-5">

                            <h4 class="mt-2" style="position: relative;
                                        color: #03382e;
                                        font-weight: 600;
                                        line-height: 1.3em;
                                        margin-bottom: 11px;">Course content</h4>
                            <div id="course_content_div">
                                <span class="curriculum--content-length--1XzLS">{{ $course[0]->total_lecture }} Lecture
                                    • <span><span>{{ $course[0]->total_hours }} h </span> total length</span>
                                </span>
                                <div id="accordion">
                                    @if (!empty($course_topic))
                                        @foreach ($course_topic as $item)
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse"
                                                            data-target="#{{ $item->topics_id }}" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            {{ $item->topics_name }}
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="{{ $item->topics_id }}" class="collapse "
                                                    aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">

                                                        <div class="strip_single_course">
                                                            @php
                                                                $duration = DB::table('uploads')
                                                                    ->select('duration')
                                                                    ->where('upload_id', $item->vedio_upload_id)
                                                                    ->wherein('type', ['mp4', 'mov', 'wmv', 'mkv'])
                                                                    ->get();
                                                            @endphp

                                                            <ul class="pt-3">
                                                                <li> 
                                                                    <i class="fa fa-film"></i> &nbsp; 
                                                                   @if($item->type_of_topic=="description topic") <a style="text-decoration: underline;"  href="javascript:void()" data-target="#myModal" data-backdrop="static" data-toggle="modal"
                                                                   class="intro-video-box preview_video"
                                                                   data-photo-src="{{ $item->photo_upload_id }}"
                                                                   data-vedio-src="{{ $item->vedio_upload_id }}">{{ $item->topics_name }}
                                                                </a> @else
                                                                &nbsp; {{ $item->topics_name }}
                                                                    @endif    
                                                                <span
                                                                        class="float-right">@if (!empty($duration[0]->duration)){{ $duration[0]->duration }} @endif</span>
                                                                </li>
                                                                @php
                                                                    $upload = DB::table('topicstudymaterials')
                                                                        ->join('uploads', 'uploads.upload_id', 'topicstudymaterials.upload_id')
                                                                        ->where('topicstudymaterials.topics_id', $item->topics_id)
                                                                        ->wherein('type', ['pdf', 'docx', 'xlsx', 'doc'])
                                                                        ->get();
                                                                @endphp

                                                                <span class="@if (empty($item->topics_id) || $item->topics_id == 'No') d-none @endif">

                                                                    @foreach ($upload as $files)
                                                                        <li><i class="fa fa-file"></i>&nbsp;
                                                                            &nbsp; {{ $files->file_name }}<span
                                                                                class="float-right">{{ $files->type }}</span>
                                                                        </li>
                                                                        </tr>
                                                                    @endforeach

                                                                </span>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    @php
                                        $quiz = DB::table('quizes')
                                            ->where('course_id', $course[0]->course_id)
                                            ->get();
                                    @endphp
                                    @if (!empty($quiz[0]->quize_id))
                                        {{-- quiz --}}
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#quiz" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        {{ 'Quiz' }}
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="quiz" class="collapse " aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="strip_single_course">
                                                        <ul class="pt-3">
                                                            <li> <i class="fa fa-check-circle-o"></i> &nbsp;
                                                                {{ 'Quiz' }} <span class="float-right"></span>
                                                            </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- quiz --}}
                                    @endif
                                    @if ($course[0]->certification == 'Yes')
                                        {{-- certificate --}}
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#certify" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        {{ 'Certificate' }}
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="certify" class="collapse " aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="strip_single_course">
                                                        <ul class="pt-3">
                                                            <li> <i class="fa fa-file"></i> &nbsp;
                                                                {{ 'Certificate' }} <span class="float-right"></span>
                                                            </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- certificate --}}
                                    @endif

                                </div>
                            </div>
                            <h4 class="mt-2" style="position: relative;
                                        color: #03382e;
                                       font-weight: 600;
                                       line-height: 1.3em;
                                       margin-bottom: 11px;">Course Description</h4>
                            @php
                                echo html_entity_decode($course[0]->course_description);
                            @endphp


                            <h4 style="position: relative;
                                        color: #03382e;
                                       font-weight: 600;
                                       line-height: 1.3em;
                                       margin-bottom: 11px;">Instructors</h4>

                            <div class="row clearfix">
                                @foreach ($instructor as $ins)

                                    <div class="student-block col-lg-4 col-md-4 col-sm-6">
                                        <div class="block-inner">
                                            <div class="image" style="height: auto;max-height:230px;">
                                                <img style="max-height:180px;"
                                                    src="{{ url('storage/app') }}/{{ $ins->photo }}"
                                                    alt="Instructor-photo">
                                            </div>
                                            <h2>{{ $ins->instructor_name }}</h2>
                                            <div class="text">{{ $ins->position }}</div>
                                            <div class="social-box">
                                                @if (!empty($ins->facebook))
                                                    <a href="{{ $ins->facebook }}" class="fa fa-facebook-square"></a>
                                                @endif
                                                @if (!empty($ins->twitter))
                                                    <a href="{{ $ins->twitter }}" class="fa fa-twitter-square"></a>
                                                @endif
                                                @if (!empty($ins->linkedin))
                                                    <a href="{{ $ins->linkedin }}" class="fa fa-linkedin-square"></a>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- Rating --}}

                            <div class="row clearfix">
                                <div class="col-md-12 rating_area">
                                    <div>
                                        <h4 style="position: relative;
                                           color: #03382e;
                                           font-weight: 600;
                                           line-height: 1.3em;
                                           margin-bottom: 11px;">Student Feedback</h4>


                                        <div class="row  mt-2">
                                            <div class="col-md-2 pb-4 mt-4">
                                                <div style="font-size: 50px">{{ round($response['average'], 1) }}</div>
                                                <div class="mt-3">
                                                    @if ($response['average'] > 0 && $response['average'] <= 1)
                                                        <span class="fa fa-star"></span>
                                                        <span class="ti-star"></span>
                                                        <span class="ti-star"></span>
                                                        <span class="ti-star"></span>
                                                        <span class="ti-star"></span>
                                                    @endif

                                                    @if ($response['average'] > 1 && $response['average'] <= 2)
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ti-star"></span>
                                                        <span class="ti-star"></span>
                                                        <span class="ti-star"></span>
                                                    @endif

                                                    @if ($response['average'] > 2 && $response['average'] <= 3)
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ti-star"></span>
                                                        <span class="ti-star"></span>
                                                    @endif

                                                    @if ($response['average'] > 3 && $response['average'] <= 4)
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ti-star"></span>
                                                    @endif

                                                    @if ($response['average'] > 4 && $response['average'] <= 5)
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    @endif
                                                </div>
                                                <small>Course Rating</small>
                                            </div>
                                            <div class="col-md-10 te">
                                                <a class="rate" data-value="5"
                                                    data-course="{{ $course[0]->course_id }}">
                                                    <div class="d-flex">
                                                        <div style="width:65%">
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                    style="background-color:#ED5154;width:{{ $response['five'] }}%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="width:20%">
                                                            <div class="pl-2">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </div>
                                                        </div>
                                                        <div style="width:5%">
                                                            <small>{{ $response['five'] }}%</small>
                                                        </div>

                                                    </div>
                                                </a>
                                                <a class="rate" data-value="4"
                                                    data-course="{{ $course[0]->course_id }}">
                                                    <div class="d-flex">
                                                        <div style="width:65%">
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                    style="background-color:#ED5154;width:{{ $response['four'] }}%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="min-width:20%">
                                                            <div class="pl-2">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="ti-star"></span>
                                                            </div>
                                                        </div>
                                                        <div style="width:5%">
                                                            <small>{{ $response['four'] }}%</small>
                                                        </div>

                                                    </div>
                                                </a>
                                                <a class="rate" data-value="3"
                                                    data-course="{{ $course[0]->course_id }}">
                                                    <div class="d-flex">
                                                        <div style="width:65%">
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                    style="background-color:#ED5154;width:{{ $response['three'] }}%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="min-width:20%">
                                                            <div class="pl-2">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="ti-star"></span>
                                                                <span class="ti-star"></span>
                                                            </div>
                                                        </div>
                                                        <div style="width:5%">
                                                            <small>{{ $response['three'] }}%</small>
                                                        </div>

                                                    </div>
                                                </a>
                                                <a class="rate" data-value="2"
                                                    data-course="{{ $course[0]->course_id }}">
                                                    <div class="d-flex">
                                                        <div style="width:65%">
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                    style="background-color:#ED5154;width:{{ $response['two'] }}%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="min-width:20%">
                                                            <div class="pl-2">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="ti-star"></span>
                                                                <span class="ti-star"></span>
                                                                <span class="ti-star"></span>
                                                            </div>
                                                        </div>
                                                        <div style="width:5%">
                                                            <small>{{ $response['two'] }}%</small>
                                                        </div>

                                                    </div>
                                                </a>
                                                <a class="rate" data-value="1"
                                                    data-course="{{ $course[0]->course_id }}">
                                                    <div class="d-flex">
                                                        <div style="width:65%">
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                    style="background-color:#ED5154;width:{{ $response['one'] }}%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="min-width:20%">
                                                            <div class="pl-2">
                                                                <span class="fa fa-star"></span>
                                                                <span class="ti-star"></span>
                                                                <span class="ti-star"></span>
                                                                <span class="ti-star"></span>
                                                                <span class="ti-star"></span>
                                                            </div>
                                                        </div>
                                                        <div style="width:5%">
                                                            <small>{{ $response['one'] }}%</small>
                                                        </div>

                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Video Column -->
                    <div class="video-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column sticky-top">
                            <!-- Video Box -->
                            <div class="intro-video"
                                style="background-image: url( {{ asset('storage/app') }}/{{ $course[0]->course_photo }})">
                                @if(!empty($course_topic[0]->topics_id))
                                <a data-target="#myModal" data-backdrop="static" data-toggle="modal"
                                    class="intro-video-box preview_video"
                                    data-photo-src="{{ $course_topic[0]->photo_upload_id }}"
                                    data-vedio-src="{{ $course_topic[0]->vedio_upload_id }}">
                                    <span class="fa fa-play"><i class="ripple"></i></span>
                                </a>
                                @endif
                                
                                <h4>Preview this course</h4>
                            </div>
                            @if ($course[0]->course_type=="Paid")
                            <div class="price mb-4">${{ number_format($course[0]->course_price, 2, '.', ',') }}
                            </div>
                            @else
                            <div class="price mb-4">Free </div>
                            @endif
                            {{-- <a href="#" class="theme-btn btn-style-three"><span class="txt">Add To Cart <i class="fa fa-angle-right"></i></span></a> --}}
                          
                            @if ($course[0]->course_type=="Paid")
                            <a href="javscript:viod()" class="theme-btn btn-style-three add-to-cart"
                                data-id="{{ $course[0]->course_id }}"><span class="txt">Add To Cart <i
                                        class="fa fa-angle-right"></i></span></a>
                            <a href="{{ url('cart') }}" class="theme-btn btn-style-two"><span
                                    class="txt">Buy Now<i class="fa fa-angle-right"></i></span></a>
                            @else
                            <a href="{{ url('enroll/free/') }}/{{$course[0]->course_id}}" class="theme-btn btn-style-two"><span
                                class="txt">Enroll Now<i class="fa fa-angle-right"></i></span></a>
                        
                            @endif
                         

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->

                    <div class="play">

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('jquery')
    <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js') }}"></script>
     
    @if(session()->has('error'))
    <script>
        $.growl.error({
                message: '{{session()->get("error")}}',
                title: 'Error !',
            });
        </script>       
    @endif

 
    <script>
        $('.preview_video').click(function() {
        var src = $(this).attr('data-vedio-src');
        var src1 = $(this).attr('data-photo-src');
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

        $('body').on('click', '.add-to-cart', function() {
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});

            $.ajax({
                    method: "POST",
                    url: "{{ url('cart') }}",
                    data: {
                        name: $(this).attr('data-id')
                    }
                })
                .done(function(response) {
                    if (response.error) {
                        return $.growl.error({
                            message: response.error,
                            title: 'Error !',
                        });
                    } else {
                        $('.cart_detail').html(response);
                        var val = $('.counter1').html();
                        var total = parseInt(val) + 1;
                        $('.counter1').html(total);
                    }
                }).error(function(msg) {
                    if (msg.status == 401) {
                        window.location.href = "{{ url('login') }}";
                    }
                });

        });

        $('body').on('click', '.rate', function() {
            var value = $(this).attr('data-value');
            var course = $(this).attr('data-course');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '
                }
            });
            $.ajax({
                url: "{{ url('/add_rate') }}",
                type: 'post',
                dataType: 'json',
                data: {
                    value: value,
                    course: course
                },
                success: function(data) {
                    $('.rating_area').load(document.URL + ' .rating_area');
                },
                error: function(error) {
                    if (error.status == 401) {
                        window.location.href = "{{ url('login') }}";
                    }
                },

            });
        });
        $('.play').bind('contextmenu', function() {
            return false;
        });
        $(function() {
            $('#myModal').on('hidden.bs.modal', function() {
                $(this).find('video')[0].pause();
            });
        });
        
        $(document).ready(function() {
            function alignModal() {
                var modalDialog = $(this).find(".modal-dialog");
                modalDialog.css('top','20%')
            }
            $(".modal").on("shown.bs.modal", alignModal);
        });
      
    </script>
@endsection
