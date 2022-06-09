@extends('admin.master')
@section('css')
<link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />

@endsection
@section('content')
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                    <thead>
                        <tr>
                            <th class="wd-15p">#</th>
                            <th class="wd-15p">Full name</th>
                            <th class="wd-25p">E-mail</th>
                            <th class="wd-15p">Join date</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $counter=1;
                    @endphp
                    @foreach ($user as $row)
                    <tr>
                        <td>{{$counter++}}</td>
                        <td> {{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('Y-m-d')}}</td> 
                        <td>
                            <a class="btn btn-success" href="{{url('admin/user')}}/{{$row->id}}">see more...</a>
                        </td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div><!-- COL-END -->

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