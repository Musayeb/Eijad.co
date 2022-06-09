@extends('layouts.master')
@section('css')
    <style>
        body{
            font-family:'Poppins', sans-serif;
        }
        .leftDiv {
                /* background-color: #efefef; */
                text-align: left;
             
                width: 48%;
                float: left;
            }
            .rightDiv {
                /* background-color: #efefef; */
                width: 48%;
                float: right;
                text-align: right;
            }
            .rightDiv h3{
                color: #ffff;
                font-size: 18px;
            }
    </style>
@endsection
@section('content')
<section class="page-title1" style="padding: 130px 0px 0px;" >
    <div class="auto-container">
        <div class="intro pb-4">
            <h3 class="text-white font-weight-bold"></h3>
           
        </div>
    </div>
</section>
<div class="auto-container mb-5">
    <div>
     <div style="border:4mm solid #ED5154; margin:4mm; padding:6mm; height:170mm;">
        <div class="bg" style="height:97px;background-color: #2B4763">
            
            <div  style="display: flex;">
                <div class="leftDiv">
                    <img src="{{asset('public/assets/images/ll.png')}}" alt="Eijad" style="margin-top: 26px;margin-left: 14px;max-width: 160px; height:auto;">

                </div>
                <div class="rightDiv">
                    <h3 style="margin-top: 32px;margin-left: 14px;">Issued {{ $cert[0]->created_at->format('d-M-Y ') }}</h3>
                </div>
            </div>
        </div>

        <div>
            <div style="text-align: center;">
                <p style="text-align:center;margin-top:20px;font-size:18px">This certifies that</p>
                <h2 style="text-align:center;">{{$cert[0]->name}}</h2>
                <p style="text-align:center;">has successfully completed Eijad's</p>
                <h2 style="text-align:center;">{{$cert[0]->course_name}}</h2><br>
                <div  >
                    <img src="{{asset('public/assets/images/new.png')}}" alt="" style="max-width: 200px; height:auto; text-align:center;">

                </div>
                <div style="margin-top: -15px;">
                    <img src="{{asset('public/assets/images/line.png')}}" alt=""  style="height: 2px;width: 20%">
                </div>
              
                <p style="text-align:center;display:block;font-size:18px;margin:0px">Shakib Mohsenyar</p>
                <p style="text-align:center;font-size:18px;margin:0px"> <i>Executive Director, Eijad.co</i></p>
              <div style="margin-top:40px">
                <p style="margin-top:70; text-align:center;font-size: 9px">The person named on this certificate has completed the activities in the
                    attached transcript. For more information about Certificates of
                    Achievement and the effort required to become eligible, 
                    visit <br><a href="{{url('certificate/verify/')}}/{{$cert[0]->certificate_no}}">{{url('certificate/verify/')}}/{{$cert[0]->certificate_no}}</a></p>
                </div>
            </div>
        </div>
      
     </div>
    </div>

</div>

@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('public/assist/css/bootstrap.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <title>Eijad Certify</title>
    <style>
        @page{
            size:A4 landscape;
            margin:10mm;
        }
        
    </style>
</head>
<body style="font-family:'Poppins', sans-serif;text-align: center">
    <div class="container">

    <div style=" margin-top:10mm; height:170mm; width:277mm; border:1mm solid #991B1B;">
        <div>
         <div style="border:1mm solid #991B1B; margin:4mm; padding:10mm; height:140mm;">
            <div style="display: flex;">
                <div style="width: 20%">
                    <img src="{{asset('public/assets/images/ll.png')}}" alt="" style="max-width: 160px; height:auto;">
                </div>
            </div>
            <div>
                <div style="text-align: center;">
                    <h1 style="text-align:center;">Certificate of Achievement</h1>
                    <p style="text-align:center;">this certifies that</p>
                    <h2 style="text-align:center;">Musayeb Afzali</h2>
                    <p style="text-align:center;">has successfully completed Eijad's</p>
                    <h2 style="text-align:center;">Network+</h2><br>
                    <img src="{{asset('public/assets/images/new.png')}}" alt="" style="margin-bottom: -3px; max-width: 120px; height:auto; text-align:center;">
                    <hr style="width: 20%; margin-top: 0px; text-align:center;">
                    <span style="text-align:center;display:block;font-size:18px">Shakib Mohsenyar</span>
                    <span style="text-align:center;font-size:13px">Eijad President</span>
                    <p style="margin-top:70; text-align:center;font-size: 9px">The person named on this certificate has completed the activities in the
                        attached transcript. For more information about Certificates of
                        Achievement and the effort required to become eligible, 
                        visit <br><a href="http://futurelearn.com/proof-of-learning/certificate-of-achievement
                        verify this certification at: wwww.ejad.af/certification/1222">http://futurelearn.com/proof-of-learning/certificate-of-achievement
                        verify this certification at: wwww.ejad.af/certification/1222</a></p>
                </div>
            </div>
          
         </div>
        </div>
       </div>
    </div>

</body>
</html> --}}