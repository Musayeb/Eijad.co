@extends('admin.master')
@section('css')

<style>
    .chart-circle-value-3 {
        position: absolute;
    top: 0px;
    }
</style>
@endsection
@section('content')

<div class="col-md-12 ">
    <div class="card">
        <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
        <div class="card-header">
            <h3 class="card-title">{{$quiz->quize_name}}</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                {{-- <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> --}}
            </div>
        </div>
        @php
          $all2=$all->count();
          $all11=$fail*100/$all2;
          $all12=$pass*100/$all2;
        @endphp 
        <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="widget text-center" data-toggle="tooltip" title="{{round($all11)}}%">
                            <small class="text-muted"></small>
                            <h2 class="mb-2 mt-0">{{$fail}}</h2>
                            <div id="circle-3" class="mt-3 mb-3" ></div>
                            <div class="chart-circle-value-3 text-danger"><i  class="fa fa-times-circle fa-3x"></i></div>
                            <p class="mb-0"><span class="dot-label bg-danger mr-2"></span>Total Fail</p>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="widget text-center" data-toggle="tooltip" title="{{round($all12)}}%">
                            <h2 class="mb-2 mt-0">{{$pass}}</h2>
                            <div id="circle-2" class="mt-3 mb-3" ></div>
                            <div class="chart-circle-value-3 text-success fs-20"><i class="fa fa-check-circle fa-3x"></i></div>
                            <p class="mb-0"><span class="dot-label bg-success mr-2"></span>Toal Pass</p>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            </div>
            <div class="table-responsive ">
                <table  id="example" class="table table-striped table-bordered text-nowrap w-100" >
                    <tr>
                        <th>#</th>
                        <th>User name</th>
                        <th>Total mark</th>
                        <th>Earned mark </th>
                        <th>Precentage</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                    @php $counter=1; @endphp
                    @foreach ($all as $q)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td><a href="{{ url('admin/user') }}/{{ $q->id }}"> {{ $q->name }}</a></td>
                            <td>{{ $q->total_mark }}</td>
                            <td>{{ $q->earn_mark }}</td>
                            <td>{{ $q->precentage }}%</td>
                            <td>
                                @if ($q->status == 'Fail')
                                    <span class="badge badge-danger">{{ $q->status }}</span>
                                @else
                                    <span class="badge badge-success">{{ $q->status }}</span>
                                @endif
                            </td>
                            <td>{{ $q->created_at }}</td>
                        </tr>
                    @endforeach
    
                </table>
            </div>
        </div>
    </div>
</div><!-- COL END -->


    {{-- <div class="container"> --}}

    {{-- </div> --}}

@endsection
@section('directory')
    <li class="breadcrumb-item "><a href="{{ url('admin/quiz') }}"><small
                class="mb-0 breadcrump-tittle active">Quiz</small></a></li>
    <li class="breadcrumb-item "><a href="#"><small
                class="mb-0 breadcrump-tittle active">Statistics</small></a></li>
@endsection

@section('jquery')

<script>
      	$('#circle-3').circleProgress({
                value: {{$all11/100}},
                size: 90,
                fill: {
                    gradient: ["#f5334f"]
                }
        });
        $('#circle-2').circleProgress({
                value: {{$all12/100}},
                size: 90,
                fill: {
                    gradient: ["#34c39f"]
                }
        });

</script>
@endsection