@extends('layouts.master')
@section('css')
    <style>
        .inner-box {
            padding: 20px !important;
            padding-bottom: 40px !important;
            /* max-height: 300px !important; */
        }

        .inner-box:hover {
            background-color: #b8b6b6;
            cursor: pointer;
        }
        .topic-block .inner-box{
            min-height: 188px !important;
        } 

    </style>
@endsection
@section('content')
    <section class="page-title" style="padding-bottom: 20px">
        <div class="auto-container">
            <div class="intro pb-4">
                <h3 class="text-white font-weight-bold">{{ $course->course_name }}</h3>
                <h6 class="text-white float-left mt-2" style="cursor: pointer;border-bottom: 5px solid rgb(255, 255, 255)">
                    Course Topics
                </h6>
            </div>
        </div>
    </section>
    <div class="auto-container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Your Progrees</h2>
                    </div>
                    @php
                        $totaltopic = Helper::get_all_topic_count($course->course_id);
                        if (!empty($course->quiz_id)) {
                            $total = (int) $totaltopic[0]->total + 1;
                        } else {
                            $total = $totaltopic[0]->total;
                        }
                        $checkCount = Helper::get_precentage_count($course->course_id,Auth::id());
                        if (empty($total)) {
                            $final = 0;
                        } else {
                            $final = ($checkCount[0]->total_status * 100) / $total;
                        }
                    @endphp
                    <div class="card-body h-100">
                        <div class="mx-auto chart-circle chart-circle-lg mt-3 mb-4 text-center" data-thickness="8"
                            data-color="#556ee7">
                            <div class="chart-circle-value font-weight-bold h5">{{ round($final) }}%</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @php $counter=1; @endphp
                    @foreach ($course_topics as $item)
                        <div class="topic-block col-lg-4 col-md-6 col-sm-12">
                            @php  $checkStatus=Helper::get_precentage_status($item->topics_id); @endphp
                            <div class="inner-box" style="@if ($checkStatus->isEmpty()) border-bottom: 20px solid; @else border-bottom: 20px solid green; @endif">
                                <div class="text-left">
                                    <h5 class="text-primary m-0 h6"><span class="badge badge-danger">Module
                                            @php echo $num_padded = sprintf("%02d", $counter++); @endphp.</span></h5>
                                </div>
                                <span class="badge badge-danger h6"></span>
                                <div class="text-center">

                                    <h5 class="text-center">
                                        <a href="{{ url('dashboard/courses-learning') }}/{{ $course->course_slug }}/topic/{{ $item->topics_id }}">{{ $item->topics_name }}</a>
                                    </h5>
                                </div>

                            </div>
                        </div>
                    @endforeach
                 @php  $quizcheck=Helper::quiz_check($course->course_id);  @endphp
                   @if(!empty($quizcheck[0]->quize_id))     
                   @php  $check_quiz_Status=Helper::get_quiz_status($quizcheck[0]->quize_id);  @endphp
                    <div class="topic-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="@if ($check_quiz_Status->isEmpty()) border-bottom: 20px solid; @else border-bottom: 20px solid green; @endif">
                            <div class="text-left">
                                <h5 class="text-primary m-0 h6"><span class="badge badge-danger">Module
                                        @php echo $num_padded = sprintf("%02d", $counter++); @endphp.</span></h5>
                            </div>
                            <div class="text-center">
                                <h5 class="text-center">
                                 
                               @if ($check_quiz_Status->isEmpty())                             
                                    <a href="{{url('dashboard/course/quiz/start')}}/course={{$course->course_id}}">{{ "Quiz" }}</a>
                                @else
                                <a href="#">{{ "Quiz Completed" }}</a>
                                @endif

                                </h5>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($course->certification=="Yes")     
                    <div class="topic-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style=" @if (empty($certificate[0]->certification_id)) border-bottom: 20px solid; @else border-bottom: 20px solid green; @endif " >
                            @if (!empty($certificate[0]->certification_id))
                            <div class="text-left">
                                <h5 class="text-primary m-0 d-inline h6"><span class="badge badge-danger">Module
                                    @php echo $num_padded = sprintf("%02d", $counter++); @endphp.</span></h5>

                                    <a href="{{url('certificate/download')}}/{{$certificate[0]->certificate_no}}"><span class="float-right badge badge-danger "><i class="fa fa-download fa-2x" title="Download"></i></span></a>
                            </div>
                            @endif

                            @if (empty($certificate[0]->certification_id))
                            <div class="text-center">
                                <h5 class="text-center">
                                    <a href="{{url('certificate')}}/{{$course->course_slug}}">{{ "Certificate" }}</a>
                                </h5>
                            </div>
                            @else
                            <div class="text-center">
                                <h5 class="text-center">
                                    <a href="{{url('certificate/verify')}}/{{$certificate[0]->certificate_no}}">
                                        {{'View '}}{{$course->course_name}} {{ "Certificate" }}
                                        
                                    </a>
                                </h5>
                            </div>
                            @endif
                            

                        </div>
                    </div>
                    @endif
                </div>

                <div class="quiz_result border-top  mt-3">
                    <h6 class="mt-3 ">Quiz attemps & result</h6>
                    <div class="table-responsive">
                        
                    <table class="table text-center table-striped  w-100">
                        <head>
                            <tr>
                                <th>#</th>
                                <th>Quiz Name</th>
                                <th>Total mark</th>
                                <th>Earned mark</th>
                                <th>Precentage</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </head>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($quizesattemp as $qu)   
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$qu->quize_name}}</td>
                                <td>{{$qu->total_mark}}</td>
                                <td>{{$qu->earn_mark}}</td>
                                <td>{{$qu->precentage}}%</td>
                                <td>
                                    @if ($qu->status=="Pass")
                                    <span class="badge badge-success">{{$qu->status}}</span>            
                                    @else
                                    <span class="badge badge-danger">{{$qu->status}}</span>
                                    @endif
                                </td>
                                <td>{{ $qu->created_at->format('d-M-Y ')}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            </div>
        </div>
    </div>


@endsection
@section('jquery')
    <script src="{{ asset('public/assets/js/circle-progress.min.js') }}"></script>

    <script>
        $('.chart-circle').circleProgress({
            startAngle: -1.55,
            value: @php echo $final/100 @endphp,
            size: 150,
            thickness: 23,
            fill: {
                gradient: ["#3452ff", "#ff1053"]
            }
        });
    </script>
@endsection
