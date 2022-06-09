@extends('admin.master')
@section('css')
<link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />

@endsection
@section('content')
<div class="row" id="user-profile">
    <div class="col-xl-3 col-md-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="wideget-user text-center">
                    <div class="wideget-user-desc pt-5 pb-5">
                        @php $path=Helper::get_avatar_image_user($user->id); @endphp
                        <div class="wideget-user-img">
                            <img class="" style="min-height: 90px" src="{{$path}}" alt="img">
                        </div>
                        <div class="user-wrap">
                            <h3 class="pro-user-username text-dark">{{$user->name}}</h3>
                            <h6 class="text-muted mb-2">{{$user->email}}</h6>
                    
                        </div>
                    </div>
                  
                </div>
            </div>

        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Personal Info</h3>
            </div>
            <div class="card-body">
                <div class="media-list">
                    <div class="media mt-1 pb-2">
                        <div class="mediaicon">
                            <i class="fe fe-user" aria-hidden="true"></i>
                        </div>
                        <div class="media-body ml-5 mt-1">
                            <h6 class="mediafont text-dark mb-1">Full Name</h6>
                            <span class="d-block">{{$user->name}}</span>
                        </div>
                    </div>
                    <div class="media mt-1 pb-2">
                        <div class="mediaicon">
                            <i class="fe fe-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-body ml-5 mt-1">
                            <h6 class="mediafont text-dark mb-1">Phone Number</h6>
                            <span class="d-block"> @if(empty($second[0]->phone_number)) N/A @else {{$second[0]->phone_number}} @endif  </span>
                        </div>
                    </div>
                    <div class="media mt-1 pb-2">
                        <div class="mediaicon">
                            <i class="fe fe-map-pin" aria-hidden="true"></i>
                        </div>
                        <div class="media-body ml-5 mt-1">
                            <h6 class="mediafont text-dark mb-1">Location</h6>
                            <span class="d-block">@if(empty($second[0]->country)) N/A @else {{$second[0]->country}}{{$second[0]->province}} @endif  </span>
                        </div>
                    </div>
                    <div class="media mt-1 pb-2">
                        <div class="mediaicon">
                            <i class="fe fe-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body ml-5 mt-1">
                            <h6 class="mediafont text-dark mb-1">Gender</h6>
                            <span class="d-block">@if(empty($second[0]->gender)) N/A @else {{$second[0]->gender}}@endif  </span>
                        </div>
                    </div>
                    <div class="media mt-1 pb-2">
                        <div class="mediaicon">
                            <i class="fe fe-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body ml-5 mt-1">
                            <h6 class="mediafont text-dark mb-1">DOB</h6>
                            <span class="d-block"> @if(empty($second[0]->dob)) N/A @else {{$second[0]->dob}}@endif  </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">About</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive around10 pt0">
                    <table class="table table-hover table-bordered ">
                        <tbody>
                            <tr>
                                <td>Business role</td>
                                <td>@if(empty($second[0]->business_role)) N/A @else {{$second[0]->business_role}}@endif</td>
                            </tr>
                            <tr>
                                <td>Current status</td>
                                <td>@if(empty($second[0]->current_status)) N/A @else {{$second[0]->current_status}}@endif </td>
                            </tr>
                            <tr>
                                <td>Highest education level</td>
                                <td>@if(empty($second[0]->education_level)) N/A @else {{$second[0]->education_level}}@endif </td>
                            </tr>
                            <tr>
                                <td>Field of experience</td>
                                <td>@if(empty($second[0]->field_of_experince)) N/A @else {{$second[0]->field_of_experince}}@endif </td>    
                            </tr>  
                            <tr>
                                <td>Employer</td>
                                <td>@if(empty($second[0]->employer))N/A @else {{$second[0]->employer}}@endif </td>    
                            </tr>  
                            <tr>
                                <td>Position</td>
                                <td>@if(empty($second[0]->position))N/A @else {{$second[0]->position}}@endif </td>    
                            </tr>      
                            <tr>
                                <td>Years of experience</td>
                                <td>@if(empty($second[0]->year_of_expirence)) N/A @else  {{$second[0]->year_of_expirence}}@endif</td>    
                            </tr>      
                            <tr>
                                <td>Have he/she been part of the incubation program previously</td>
                                <td>@if(empty($second[0]->incubation_program)) N/A @else {{$second[0]->incubation_program}}@endif </td>
                            </tr>
                            <tr>
                                <td>Goal behind joining Eijad virtual incubation program</td>
                                <td>@if(empty($second[0]->goal_of_join)) N/A @else {{$second[0]->goal_of_join}}@endif </td>
                            </tr>
                            <tr>
                                <td>How did you hear about us</td>
                                <td>@if(empty($second[0]->how_did_hear_about_us)) N/A @else {{$second[0]->how_did_hear_about_us}}@endif </td>
                            </tr>
                       </tbody>
                    </table>
                </div> 
               
            </div>
        </div>
        <div class="card">
            <div class="card-header p-0">
                <div class="wideget-user-tab">
                    <div class="tab-menu-heading">
                        <div class="tabs-menu1">
                            <ul class="nav">
                                <li class=""><a href="#tab-61" class="active show" data-toggle="tab">Courses</a></li>
                                <li><a href="#tab-71" data-toggle="tab" class="">Payments</a></li>
                                <li><a href="#tab-91" data-toggle="tab" class="">Quiz attemp</a></li>
                                <li><a href="#tab-81" data-toggle="tab" class="">Certificates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="border-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-61">
                            <ul class="widget-users row">
                                @foreach ($courses as $co)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center border p-3 mb-3">
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{url('storage/app')}}/{{$co->course_photo}}" style="background: url(&quot;../../assets/images/users/17.jpg&quot;) center center;"></div>
                                        <div class="wrapper ml-3">
                                            <p class="mb-0 mt-1 text-dark font-weight-semibold">{{$co->course_name}}</p>
                                            <small>Lecture {{$co->total_lecture}}</small>
                                        </div>
                                        <div class="float-right ml-auto">
                                            <a href="{{url('admin/course/statistics')}}/{{$co->course_id}}" class="btn btn-default btn-sm"><i class="si si-eye mr-1"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </ul>
                        </div>
                        <div class="tab-pane" id="tab-71">
                           <table class="table table-striped ">
                            <tr>
                            <th>#</th>
                            <th>Invoice number</th>
                            <th>Payment method</th>
                            <th>price</th>
                            <th>Course</th>
                            <th>Billing address code</th>
                            <th>Date</th>
                            </tr>
                            @php
                                $couter=1;
                            @endphp
                            @foreach ($payment as $pay)
                            <tr>
                                <td>{{$couter++}}</td>
                                <td>#{{$pay->invoice_number}}</td>
                                <td>{{$pay->payment_method}}</td>
                                <td>{{$pay->course_price}}</td>
                                <td>{{$pay->course_name}}</td>
                                <td>{{$pay->bill_address}}</td>
                                <td>{{$pay->created_at}}</td>
                            </tr>
                            @endforeach
                        </table>
                        </div>
                        <div class="tab-pane" id="tab-81">
                            <table class="table ">
                                <tr>
                                <th>#</th>
                                <th>Course name</th>
                                <th>Certificate no</th>
                                <th>date</th>
                                <th>Verify</th>
                                <th>Download</th>
                                </tr>
                                @php
                                    $c=1;
                                @endphp
                                @foreach ($certificate as $cert)
                                <tr>
                                    <td>{{$c++}}</td>
                                    <td>{{$cert->course_name}}</td>
                                    <td>{{$cert->certificate_no}}</td>
                                    <td>{{$cert->created_at}}</td>
                                    <td><a href="{{url('certificate/verify')}}/{{$cert->certificate_no}}"> <span class="badge badge-success">Verify link</span></a></td>
                                    <td><a href="{{url('certificate/download')}}/{{$cert->certificate_no}}"><span class="badge badge-danger">download</span></a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-91">
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
    </div><!-- COL-END -->
</div>

@endsection
@section('directory')
<li class="breadcrumb-item "><a href="{{ url('admin/user') }}"><small
            class="mb-0 breadcrump-tittle active">users</small></a></li>
@endsection
@section('jquery')
<script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script>
$('#example').DataTable();
</script>

@endsection