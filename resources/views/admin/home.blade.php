@extends('admin.master')
@section('css')
<link href="{{asset('public/assets/plugins/morris/morris.css')}}" rel="stylesheet" />

@endsection
@section('content')
<div class="row">

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-primary img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$totalcourse}}</h2>
                        <p class="text-white mb-0">Total Courses</p>
                    </div>
                    <div class="ml-auto"> <i class="fe fe-book-open text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-success img-card box-success-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$totalstd}}</h2>
                        <p class="text-white mb-0">Total Student</p>
                    </div>
                    <div class="ml-auto"><i class="fa fa-user text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-info img-card box-info-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$totalcert}}</h2>
                        <p class="text-white mb-0">Total Certified</p>
                    </div>
                    <div class="ml-auto"> <i class="fa fa-certificate text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-danger img-card box-danger-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$totalquiz_count}}</h2>
                        <p class="text-white mb-0">Total Quiz</p>
                    </div>
                    <div class="ml-auto"> <i class="fa fa-question text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
 
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Earning</h3>
            </div>
            <div class="card-body">
                <div id="morrisBar2" class="chartsh"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Taken Quiz</h3>
            </div>
            <div class="card-body">
                <div id="morrisBar3" class="chartsh"></div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('jquery')
<script src="{{asset('public/assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{asset('public/assets/plugins/morris/morris.js')}}"></script>


<script>
var day_data1 = [<?php echo $chart_data?>];
var day_data2= [<?php echo $chart_data1?>];
new Morris.Bar({
		element: 'morrisBar2',
		data: day_data1,
        xkey: 'x',
		ykeys: ['y'],
		barColors: ['#fd4967'],
		labels: ['Earning', 'Month']
	});
</script>
<script>
    new Morris.Bar({
		element: 'morrisBar3',
		data: day_data2,
        xkey: 'x',
		ykeys: ['y'],
        barColors: ['#30bb67', '#556ee7 '],

		labels: ['Quiz', 'Month']
	});
</script>
@endsection