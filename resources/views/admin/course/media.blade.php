@extends('admin.master')

@section('content')
    <div class="row">
       @foreach ($course as $row)
        <div class="col-md-4">
           <a style="text-decoration: none" href="{{url('admin/course/media/')}}/{{$row->course_id}}">  

            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-success align-items-center text-center box-success-shadow">
                            <img src="{{asset('public/assets/images/svgs/circle.svg')}}" alt="img" class="card-img-absolute">
                            <i class="fa fa-folder fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 font-weight-normal mt-2">{{$row->course_name}}</h2>
                            <h5 class="font-weight-normal mb-0">Files {{count($files = Storage::allFiles('course/'.$row->course_name))}}</h5>
                        </div>
                    </div>
                </div>
            </div>
                </a>
        </div>
    @endforeach 
</div>



@endsection

@section('jquery')
    
@endsection

@section('directory')
<li class="breadcrumb-item"><a href="{{url('/admin/media')}}"><small class="mb-0 breadcrump-tittle">Media</small></a></li>

@endsection