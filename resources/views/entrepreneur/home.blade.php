@extends('master')

@section('css')
    <link rel="style">
    <link href="{{asset('public/assist/crop/cropper.min.css')}}" rel="stylesheet">

@endsection

@section('content')
    {{-- <div class="card" style="text-align:center">
        <h2>asdsdsds</h2>
   <div class="row">
    <div class="col-md-4">
    </div>
        <div class="col-md-4">
        <input type="date" id="date" >
    </div>
</div> --}}
<section class="slider-section" style="background-image: url({{asset('public/assist/images/main-slider/1.png')}})">
    <div class="main-slider-carousel owl-carousel owl-theme">
        
        <div class="slide">
            <div class="auto-container">
                <div class="row clearfix">
                            
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h1>Some books leave us free and some books make us free</h1>
                            <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</div>
                            <div class="btns-box">
                                <a href="course.html" class="theme-btn btn-style-four"><span class="txt">Get Stared <i class="fa fa-angle-right"></i></span></a>
                                <a href="course.html" class="theme-btn btn-style-five"><span class="txt">All Courses <i class="fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{asset('public/assist/images/main-slider/content-image.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="slide">
            <div class="auto-container">
                <div class="row clearfix">
                            
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h1>Some books leave us free and some books make us free</h1>
                            <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</div>
                            <div class="btns-box">
                                <a href="course.html" class="theme-btn btn-style-four"><span class="txt">Get Stared <i class="fa fa-angle-right"></i></span></a>
                                <a href="course.html" class="theme-btn btn-style-five"><span class="txt">All Courses <i class="fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{asset('public/assist/images/main-slider/content-image.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="slide">
            <div class="auto-container">
                <div class="row clearfix">
                            
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h1>Some books leave us free and some books make us free</h1>
                            <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</div>
                            <div class="btns-box">
                                <a href="course.html" class="theme-btn btn-style-four"><span class="txt">Get Stared <i class="fa fa-angle-right"></i></span></a>
                                <a href="course.html" class="theme-btn btn-style-five"><span class="txt">All Courses <i class="fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{asset('public/assist/images/main-slider/content-image.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</section> 

    
<div class="container h-100 mb-5" style="height:500px">
    <h5>Uplad</h5>
    <form action="" method="post">
        <input type="file" accept="image/*" class="image">
    </form>
</div>
</div>


            <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Image</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                              <div class="col-md-8">
                                <img id="image" alt="">
                              </div>
                              <div class="col-md-4">
                                <div class="preview"></div>
                              </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

@endsection

@section('jquery')
<script src="{{asset('public/assist/crop/cropper.min.js')}}"></script>

<script>
    // document.getElementById('date').max = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
</script>
<script>
    var bs_modal=$('#myModal');
    var image=$('#image');
    var cropper,reader,file;
    $('body').on('change','.image',function(e){
    var file=e.target.files;
    var done=function(url){
        image.src=url;
        bs_modal.modal('show');
    }
    if(files && files.lenght>0){
        file=file[0];
    }
    if(url){
        done(URL.createObjectURL(file));
    }else if(FileReader){
        reader =new FileReader();
        reader.onload=function(e){
          done(reader.result);
        }
        reader.readAsDataURL(file);
    }

    bs_modal.on('shown.bs.modal',function(){
        cropper= new Cropper(image,{
            aspectRatio:1,
            viewMode:3,
            preview:'.preview'
        })
    }).on('hidden.bs.modal',function(){
        cropper.destroy();
        cropper=null;
    });
    $('#crop').click(function(){
        canvas=cropper.getCroppedConvas({
            width:'160',
            height:'160',
        });
      convas.toBlob(function(blob){
          url=URL.createObjectURL(blob);
          var reader = new FileReader();
          reader.readAsDataURL(blob);
          reader.onloadend=function(){
              var base64= reader.result;
          }
          $.ajax({
            type: "POST",
            url: url,
            dataType:'json',
            data:{image:base64data},
            success: function(data){
                bs_modal.modal('hide');
                alert('success');
            },
            });

      })  
        
    })
    });

</script>
@endsection