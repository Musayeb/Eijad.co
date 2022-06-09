@extends('layouts.master')
@section('css')
<link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />

<style>

</style>
@endsection

@section('content')
<section class="page-title" style="padding-bottom: 20px"> 
    <div class="auto-container">
        <div class="intro pb-4">
           <h3 class="text-white font-weight-bold" >My learning</h3>
           <h6 class="text-white float-left mt-2" style="cursor: pointer;border-bottom: 5px solid rgb(255, 255, 255)">All Courses</h6>

        </div>
    </div>
</section>
<div class="h-100 auto-container">
    <div class="row p-3">
            @foreach ($course as $item)
                <div class="cource-block-two col-lg-3 col-md-4 col-sm-6 col-xs-12 " >
                    <div class="inner-box" >
                        <div class="image">
                            <a href="{{url('dashboard/courses-learning')}}/{{$item->course_slug}}">
                               @php 
                               if(empty($item->course_photo)){
                                $path=url('public/img/empty.png');
                               }else{
                                $path=url('storage/app/').'/'.$item->course_photo;
                               }
                               @endphp
                                <img src="{{$path}}" alt="course-photo" style="max-height:150px;min-height:150px;">
                            </a>
                        </div>
                    @php
                        $totaltopic=Helper::get_all_topic_count($item->course_id);
                        if(!empty($item->quiz_id)){
                            $total=(int)$totaltopic[0]->total+1;
                        }else{
                            $total=$totaltopic[0]->total;
                        }
                      $checkCount=Helper::get_precentage_count($item->course_id,Auth::id());
                      if(empty($total)){
                        $final=0;
                      }else{
                      $final=$checkCount[0]->total_status*100/$total;
                      }
                    @endphp

                        <div class="lower-content">
                            <h5><a href="{{url('dashboard/courses-learning')}}/{{$item->course_slug}}">{{$item->course_name}}</a></h5>
                            <div class="text" style="min-width:370px"></div>
                            <div class="clearfix">
                                <div class="progress">
                                    <div class="progress-bar"  role="progressbar" style="width: {{$final}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  @if($final==0)
                                  <span class="badge badge-success ">Start Course</span>
                                  @else
                                  <small>{{round($final)}}% Completed</small>
                                  @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
     
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
@if(session()->has('notif'))
<script>
    $.growl.notice({
            message: '{{session()->get("notif")}}',
            title: 'Successfull !',
        });
    </script>       
@endif
@endsection