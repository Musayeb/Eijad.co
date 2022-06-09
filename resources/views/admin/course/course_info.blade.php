@extends('admin.master')
@section('css')
    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/accordion/accordion.css') }}" rel="stylesheet" />
    <style>
        .chart-circle-value-3 {
            position: absolute;
            top: 0px;
        }
/* comment */
    .comments-area {
        position: relative;
        margin-top: 60px;
        margin-bottom: 50px;
    }
     .comments-area .comment {
    position: relative;
    font-size: 14px;
    min-height: 120px;
    padding: 0px 0px 0px 110px;
}
.comments-area .comment-box .author-thumb {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 90px;
    border-radius: 50%;
    margin-bottom: 20px;
    overflow: hidden;
    background-color: #7a7a7a;
}
.comments-area .comment-info {
    margin-bottom: 10px;
}
 .comments-area .comment-box .theme-btn {
    position: relative;
    font-size: 16px;
    color: #00aa15;
    font-weight: 600;
    text-transform: capitalize;
}
.comments-area .comment-box:last-child {
    margin-bottom: 0px;
}
 .comments-area .reply-comment {
    margin-left: 100px;
}

.comment-form .form-group textarea {
    position: relative;
    display: block;
    width: 100%;
    line-height: 24px;
    padding: 15px 20px 25px;
    color: #888888;
    border: 1px solid transparent;
    height: 145px;
    background: #ffffff;
    resize: none;
    border-radius: 4px;
    font-size: 14px;
    -webkit-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    transition: all 300ms ease;
}
.btn-style-three {
    position: relative;
    display: inline-block;
    font-size: 16px;
    line-height: 30px;
    color: #ffffff;
    padding: 12px 44px 12px;
    font-weight: 400;
    overflow: hidden;
    background: none;
    border-radius: 50px;
    background-color: #00ab15;
    text-transform: capitalize;
    font-family: 'Poppins', sans-serif;
    /* -webkit-box-shadow: 0 10px 30px rgb(0 171 21 / 10%);
    -moz-box-shadow: 0 10px 30px rgba(0,171,21,0.10);
    -ms-box-shadow: 0 10px 30px rgba(0,171,21,0.10);
    -o-box-shadow: 0 10px 30px rgba(0,171,21,0.10);
    box-shadow: 0 10px 30px rgb(0 171 21 / 10%); */
}
.comments-area .comment-box .theme-btn:hover{
	color:#3d415b;
}
.comments-area .comment-info .comment-time {
    position: absolute;
    right: 0px;
    font-size: 15px;
    color: #ffffff;
    padding-left: 24px;
    display: inline-block;
}
.comments-area .comment-box strong{
	font-size:18px;
	font-weight:600;
	color:#ffffff;
	display:block;
	line-height:1.3em;
	display:inline-block;
	text-transform:capitalize;
}
.comments-area .comment-info .comment-time:before{
	position:absolute;
	content: "\f133";
	left:0px;
	top:0px;
	color:#00aa15;
	font-family: 'FontAwesome';
}

a{
    cursor: pointer;
}
</style>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Statistics</h3>
                    <div class="card-options">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                class="fe fe-chevron-up"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card bg-primary img-card box-primary-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h2 class="mb-0 number-font">{{$totalenroll}}</h2>
                                            <p class="text-white mb-0">Total Sale </p>
                                        </div>
                                        <div class="ml-auto"> <i
                                                class="fa fa-cart-plus text-white fs-30 mr-2 mt-2"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card bg-success img-card box-success-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h2 class="mb-0 number-font">{{$certified}}</h2>
                                            <p class="text-white mb-0">Total Certified</p>
                                        </div>
                                        <div class="ml-auto"> <i class="fa fa-file text-white fs-30 mr-2 mt-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card bg-info img-card box-info-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h2 class="mb-0 number-font">{{$profit}}</h2>
                                            <p class="text-white mb-0">Total Profit</p>
                                        </div>
                                        <div class="ml-auto"> <i class="fa fa-dollar text-white fs-30 mr-2 mt-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card bg-danger img-card box-danger-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h2 class="mb-0 number-font">{{$quiz}}</h2>
                                            <p class="text-white mb-0">Total taken quiz</p>
                                        </div>
                                        <div class="ml-auto"> <i
                                                class="fa fa-cart-plus text-white fs-30 mr-2 mt-2"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                    </div>
                    {{-- end row --}}

                  
                </div>
            </div>
        </div>
        {{-- feed back --}}
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Students Feedback </h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12 text-center rating_area">
                        <div>

                            <div class="row  mt-2 justify-content-center">
                                <div class="" style="width: 10%">
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
                                <div style="width: 40%" class="mt-4">
                                    <a class="rate" data-value="5">
                                        <div class="d-flex">
                                            <div style="width:65%">
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="background-color:#ED5154;width:{{ $response['five'] }}%;"></div>
                                                </div>
                                            </div>
                                            <div style="width:25%">
                                                <div class="pl-2">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                            <div style="width:7%">
                                                <small>{{ $response['five'] }}%</small>
                                            </div>

                                        </div>
                                    </a>
                                    <a class="rate" data-value="4">
                                        <div class="d-flex">
                                            <div style="width:65%">
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="background-color:#ED5154;width:{{ $response['four'] }}%"></div>
                                                </div>
                                            </div>
                                            <div style="min-width:25%">
                                                <div class="pl-2">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </div>
                                            <div style="width:7%">
                                                <small>{{ $response['four'] }}%</small>
                                            </div>

                                        </div>
                                    </a>
                                    <a class="rate" data-value="3">
                                        <div class="d-flex">
                                            <div style="width:65%">
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="background-color:#ED5154;width:{{ $response['three'] }}%"></div>
                                                </div>
                                            </div>
                                            <div style="min-width:25%">
                                                <div class="pl-2">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </div>
                                            <div style="width:7%">
                                                <small>{{ $response['three'] }}%</small>
                                            </div>

                                        </div>
                                    </a>
                                    <a class="rate" data-value="2" >
                                        <div class="d-flex">
                                            <div style="width:65%">
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="background-color:#ED5154;width:{{ $response['two'] }}%"></div>
                                                </div>
                                            </div>
                                            <div style="min-width:25%">
                                                <div class="pl-2">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </div>
                                            <div style="width:7%">
                                                <small>{{ $response['two'] }}%</small>
                                            </div>

                                        </div>
                                    </a>
                                    <a class="rate" data-value="1"
                                        data-course="{{ $course->course_id }}">
                                        <div class="d-flex">
                                            <div style="width:65%">
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="background-color:#ED5154;width:{{ $response['one'] }}%"></div>
                                                </div>
                                            </div>
                                            <div style="min-width:25%">
                                                <div class="pl-2">
                                                    <span class="fa fa-star"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </div>
                                            <div style="width:7%">
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
        </div><!-- COL-END -->
        {{-- table --}}
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Enrolled Students </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="wd-15p">Full name</th>
                                    <th class="wd-25p">E-mail</th>
                                    <th class="wd-25p">Course Status</th>
                                    <th class="wd-15p">Join date</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($course_students as $student)
                            <tr>
                                <td> <a href="{{url('admin/user')}}/{{$student->id}}">{{$student->name}}</a> </td>
                                <td>{{$student->email}}</td>
                                @php
                                $totaltopic = Helper::get_all_topic_count($course->course_id);
                                if (!empty($course->quiz_id)) {
                                    $total = (int) $totaltopic[0]->total + 1;
                                } else {
                                    $total = $totaltopic[0]->total;
                                }
                                $checkCount = Helper::get_precentage_count($course->course_id,$student->id);
                                if (empty($total)) {
                                    $final = 0;
                                } else {
                                    $final = ($checkCount[0]->total_status * 100) / $total;
                                }
                                 @endphp
                                 <td><span class="badge badge-success">{{ round($final) }}%</span></td>
                                <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $student->created_at)->format('Y-m-d')}}</td>
                                
                            </tr>
                            @endforeach
                           
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div><!-- COL-END -->

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course topics</h3>
                </div>
                <div class="card-body">

                    <!-- ACCORDION BEGIN -->
                    <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                        @foreach ($topic as $item)
                            <li>
                                <div>
                                    <h3>{{ $item->topics_name }}</h3>
                                </div>
                                <div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card" style="background-color: #2B4763">
                                                <div class="card-body">
                                                    <div class="widget text-center" data-toggle="tooltip"
                                                        title="{{ round($totalenroll) }}">
                                                        <small class="text-muted"></small>
                                                        <h2 class="mb-2 mt-0">{{ $totalenroll }}</h2>
                                                        <div class="text-danger"><i class="fa fa-book fa-3x"></i></div>
                                                        <p class="mb-0"><span
                                                                class="dot-label bg-danger mr-2"></span>Total Enrolled</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- COL END -->
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card" style="background-color: #2B4763">
                                                <div class="card-body">
                                                    @php $count_topics=helper::get_topic_status_admin($item->topics_id); @endphp
                                                    <div class="widget text-center" data-toggle="tooltip"
                                                        title="{{ round($count_topics) }}">
                                                        <h2 class="mb-2 mt-0">{{ $count_topics }}</h2>
                                                        <div class="text-success "><i class="fa fa-check-circle fa-3x"></i>
                                                        </div>
                                                        <p class="mb-0"><span class="dot-label bg-success mr-2"></span>Toal Pass</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- COL END -->
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <button class="btn btn-danger btn-block show_comments" data-id="{{$item->topics_id}}">Check Comments</button>
                                        </div>
                                    </div>
                                </div>

                            </li>

                        @endforeach
                    </ul>
                </div>
                <!-- Comment Form -->          
            </div>
        </div><!-- COL-END -->

        <div class="modal fade" id="comments_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"> Topic comments</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="comments_info">

                       </div>
                    </div>

                </div>
            </div>
        </div>

    @endsection

    @section('directory')
        <li class="breadcrumb-item "><a href="{{ url('admin/courses') }}"><small
                    class="mb-0 breadcrump-tittle active">Cources</small></a></li>
        <li class="breadcrumb-item "><a href="#"><small class="mb-0 breadcrump-tittle active">Cources Statistics</small></a>
        </li>
    @endsection

    @section('jquery')
        <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/accordion/accordion.min.js') }}"></script>

        <script>
            var id;
            $('#example').DataTable();
        </script>
        <script>
            $(function(e) {
                $(".demo-accordion").accordionjs();
            });
         </script>

        <script>
            $('body').on('click','.show_comments',function(){
                id=$(this).attr('data-id');
                show_comment_data(id);
            });

           function show_comment_data(id){
            $.ajax({
                url: "{{ url('admin/course/statistics/show_comments') }}"+'/'+id,
                type: 'get',
                success: function(data) {
                    $('.comments_info').html(data);
                    $('#comments_modal').modal('show');
                },
                error: function(data) {
                    console.log('server error')
                },
                cache: false,
                contentType: false,
                processData: false
            });
           }
        </script>
        
<script>
     $('body').on('submit','#commentForm',function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});
        $.ajax({
            url: "{{ url('/add_comment') }}",
            type: 'post',
            data: formData,
            success: function(data) {
                $('#commentForm')[0].reset();
                show_comment_data(id);
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
                show_comment_data(id);
            },
            error: function(data) {
                console.log('server error');

            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
    $('body').on('click','.like',function() {

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});
        $.ajax({
            url: "{{ url('/add_like') }}/"+$(this).attr('data-id'),
            type: 'get',
    
            dataType:'json',
            success: function(data) {
                show_comment_data(id);
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

    @endsection
