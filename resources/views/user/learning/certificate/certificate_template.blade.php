<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}"> --}}
    <title>Eijad Certify</title>
    <style>
        @page{
            size:A4 landscape;
            margin:10mm;
        }
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
                font-size: 16px;
            }
        
    </style>
</head>
<body style="font-family:'Poppins', sans-serif;color:#777777;">
        <div>
            <div style="border:4mm solid #ED5154; margin-top:5mm; padding:6mm; height:157mm;">
                <div class="bg" style="height:97px;background-color: #2B4763">
            
                    <div  style="display: flex;">
                        <div class="leftDiv">
                            <img src="{{public_path('assets/images/ll.png')}}" alt="Eijad" style="margin-top: 26px;margin-left: 14px;max-width: 160px; height:auto;">
        
                        </div>
                        <div class="rightDiv">
                            <h3 style="margin-top: 32px;margin-right: 8px;">Issued {{ $cert[0]->created_at->format('d-M-Y ')}}</h3>
                        </div>
                    </div>
                </div>
            <div>
                <div style="text-align: center;">
                    <p style="text-align:center;margin-top:20px;font-size:18px">This certifies that</p>
                    <h2 style="text-align:center;">{{$cert[0]->name}}</h2>
                    <p style="text-align:center;">has successfully completed Eijad's</p>
                    <h2 style="text-align:center;">{{$cert[0]->course_name}}</h2><br>
                    <div>
                        <img src="{{public_path('assets/images/new.png')}}" alt="Sign" style="max-width: 200px; height:auto; text-align:center;">
                    </div>
                    <div style="margin-top: -15px;">
                        <img src="{{public_path('assets/images/line.png')}}" alt="Line"  style="height: 2px;width: 20%">
                    </div><br>
                  
                    <p style="text-align:center;display:block;font-size:18px;margin:0px">Shakib Mohsenyar</p>
                    <p style="text-align:center;font-size:18px;margin:0px"> <i>Executive Director, Eijad.co</i></p>
                  <div style="margin-top:40px">
                    <p style="margin-top:70; text-align:center;font-size: 9px">The person named on this certificate has completed the activities in the
                        attached transcript. For more information about Certificates of
                        Achievement and the effort required to become eligible, 
                        visit <br><a href="{{url('certificate/verify/')}}/{{$cert[0]->certificate_no}}">{{url('certificate/verify/')}}/{{$cert[0]->certificate_no}}</a>
                    </p>
                    </div>
                </div>
            </div>
          
         </div>
        </div>
</body>
</html>