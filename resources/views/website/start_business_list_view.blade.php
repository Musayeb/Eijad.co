@extends('layouts.master')
@section('css')

<link href="{{asset('public/assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet"/>

@endsection
@section('styles')


<style>
    .btn-circle.btn-md {
    position: relative;
    border: 2px solid transparent;
    height: 40px;
    padding: 0 30px;
    background-color: #2B4763;
    color: #FFF;
    text-transform: uppercase;
    font-weight: 700;
    border-radius: 40px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
    }
    .bt-container{
        text-align: center;
    }
    .btn-circle.btn-md:hover{
     background-color: #ED5154;
    }
     
 .sidebar-inner{
    min-height: 712px !important;
    position: sticky;
}
.main-header .header-upper {
    background-color: #2B4763;
}

.footer-pagination.text-center nav {
     display: inline-block;
     margin-bottom: 20px;
}
 ul.pagination li {
     margin: 3px;
     text-align: center;
     min-height: 15px;
     cursor: pointer;
}
 ul.pagination li a {
     color: #0e0e0f;
     padding: 6px 12px;
     font-size: 15px;
     line-height: 21px;
     margin-left: 0;
     border: none;
     box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
     border-radius: 50px;
}
 ul.pagination li a:hover {
     background: #201b34;
     background: -webkit-linear-gradient(legacy-direction(to right), #201b34 0%, #201b34 100%);
     background: -webkit-gradient(linear, left top, right top, from(#201b34), to(#201b34));
     background: -webkit-linear-gradient(left, #201b34 0%, #201b34 100%);
     background: -o-linear-gradient(left, #201b34 0%, #201b34 100%);
     background: linear-gradient(to right, #201b34 0%, #201b34 100%);
     color: #fff !important;
}
 .page-item.active .page-link {
     z-index: 3;
     background: #201b34;
     background: -webkit-linear-gradient(legacy-direction(to right), #201b34 0%, #201b34 100%);
     background: -webkit-gradient(linear, left top, right top, from(#201b34), to(#201b34));
     background: -webkit-linear-gradient(left, #201b34 0%, #201b34 100%);
     background: -o-linear-gradient(left, #201b34 0%, #201b34 100%);
     background: linear-gradient(to right, #201b34 0%, #201b34 100%);
     color: #fff !important;
}


.students{
    color: #393939;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.4em;
    margin-top: 8px;
}
.popover.left .arrow {
    left:90% !important;
}

</style>
@endsection
@section('content')

<div class="sidebar-page-container">
    <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(&quot;public/assist/images/icons/icon-1.png&quot;); transform: translateY(-28px); transition: transform 0s linear 0s; will-change: transform;"></div>
    <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(&quot;public/assist/images/icons/icon-2.png&quot;); transform: translateY(35px); transition: transform 0s linear 0s; will-change: transform;"></div>
    <div class="circle-one"></div>
    <div class="circle-two"></div>
    <div class="auto-container">
        <div class="row clearfix">
           
            	<!-- Content Side -->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
					<div class="sidebar-inner">
						<aside class="sidebar">
							
							<!-- Filter Widget -->
							<div class="filter-widget">
								<h5>Filter By</h5>
								
								<div class="skills-box">
									
									<!-- Skills Form -->
									<div class="skills-form">
											<span>Skill Level</span>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="skill" class="skill" value="Entre Level" id="type-1"> 
												<label for="type-1">Beginner</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="skill" class="skill" value="Intermediate Level"  id="type-2"> 
												<label for="type-2">Intermediate</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" class="skill"  name="skill" value="Advance Level" id="type-3"> 
												<label for="type-3">Expert</label>
											</div>
											
									</div>
									
								</div>
								
								<div class="skills-box-two">
									<!-- Skills Form -->
									<div class="skills-form-two">
											<span>Price</span>		
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="price" class="price" value="free" id="type-4"> 
												<label for="type-4">Free</label>
											</div>		
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="price" class="price" value="paid" id="type-5"> 
												<label for="type-5">Paid</label>
											</div>			
									</div>	
								</div>
								
								<div class="skills-box-three">
									<!-- Skills Form -->
									<div class="skills-form-three">
											<span>Duration Time</span>
											
											<!-- Radio Box -->
											<div class="radio-box-three">
												<input type="radio" name="duration"  class="duration" value="5"  id="type-7">
												<label for="type-7">5+ hours</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box-three">
												<input type="radio" name="duration" class="duration" value="10" id="type-8"> 
												<label for="type-8">10+ hours</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box-three">
												<input type="radio" name="duration"  class="duration" value="15" id="type-9"> 
												<label for="type-9">15+ hours</label>
											</div>
											
									</div>
									
								</div>
								
							</div>
							
						</aside>
					</div>
				</div>
      
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                	<div class="our-courses">
						
						<!-- Options View -->
						<div class="options-view">
							<div class="clearfix">
								<div class="pull-left">
									<h3>Browse Courses</h3>
								</div>
								<div class="pull-right clearfix">
									<!-- List View -->
									<ul class="list-view">
                                        <li ><a href="{{url('start_business')}}"><span class="icon flaticon-grid"></span></a></li>
										<li><a href="{{url('start_business_list')}}"><span class="icon flaticon-list-1"></span></a></li>
									</ul>
									
									<!-- Type Form -->
									<div class="type-form">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select  class="old_new">
                                                <option value="Newest">Newest</option>
                                                <option value="Old">Old</option>
                                            </select>
                                        </div>
									</div>
								</div>
							</div>
						</div>
                      
                        <div class="row clearfix" id="filter_change">
                            @if(!$course->isEmpty()) 
                          @foreach ($course as $item)
                          <div class="cource-block-three w-100 card" data-html="true" 
                          data-toggle="popover" 
                          data-trigger="hover" 
                          data-animation="true"
                       
                          data-offset="-1"
                            data-id="{{$item->course_id}}"
                          data-content="
                          <div class='p-2'><h4 style='color:#ED5154;font-weight:800'>{{$item->course_name}}</h4>
                          <ul>
                              <li class='text-success'>Updated {{$item->last_update}}</li>
                              <li>{{$item->course_bio}}</li>
                              <li><span class='text-success font-bold'>Level &nbsp;</span>{{$item->course_level}}</li>
                              <li><span class='text-success font-bold'>Lectures &nbsp;</span>{{$item->total_lecture}}</li>
                              <li><span class='text-success font-bold'>Hours &nbsp;</span>{{$item->total_hours}}</li>
                              <li><span class='text-success font-bold'>Languages &nbsp;</span>{{$item->course_lanuguage}}</li>
                            </ul>
                            @if($item->course_type=='Free')
                            <a  href='{{url("start_business")}}/{{$item->course_slug}}' class='enroll_btn mt-2'>Enroll Now
                            </a>
                           @else
                           <button type='button' class='btn btn-circle btn-md btn-outline-primary btn-block add-to-cart mt-5' 
                           data-id='{{$item->course_id}}'> <i class='fa fa-shopping-cart'></i> Add To Cart</button></div>@endif" >
                          <div class="d-flex">
                            <div class="image p-3" style="width:30%;" >
                                <a href="{{url('start_business')}}/{{$item->course_slug}}">
                                    <div  >
                                    <img  src="{{url('storage/app')}}/{{$item->course_photo}}" 
                                    alt="Course-avatar" style="object-fit:fill;width: 250px">
                                </div>
                                </a>
                            </div>

                            <div class="content p-3" style="width:60%;">
                                <div class="clearfix">
                                    <div class="pull-left">
                                    <h5 style="position: relative;
                                    color: #03382e;
                                    font-weight: 600;
                                    line-height: 1.3em;"><a href="{{url('start_business')}}/{{$item->course_slug}}">{{$item->course_name}}</a></h5>

                                    </div>
                                    <div class="pull-right clearfix">
                                    
                                                          
                                  @if($item->course_type=="Free")
                                 <h5 style="position: relative;
                                  color: #03382e;
                                  font-weight: 600;
                                  line-height: 1.3em;">  
                                  <a href="{{url('start_business')}}/{{$item->course_slug}}">{{$item->course_type}}</a>
                                </h5>

                                 @else

                                 <h5 style="position: relative;
                                 color: #03382e;
                                 font-weight: 600;
                                 line-height: 1.3em;">  
                                 <a href="{{url('start_business')}}/{{$item->course_slug}}">{{'$'.number_format($item->course_price, 2, '.', ',')}}</a>
                               </h5>
                                 @endif

                                </div>
                                </div>
                               
                                <div class="text">{{$item->course_bio}}</div>
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="level-box" style="position: relative;
                                        color: #393939;
                                        font-size: 16px;
                                        font-weight: 500;
                                        line-height: 1.3em;
                                        padding-top: 7px;
                                        ">
                                            <span class="icon flaticon-settings-1"></span>
                                            {{$item->course_level}}
                                        </div>
                                    </div>
                                    <div class="pull-right clearfix">
                                        <div class="students">{{$item->total_lecture}} Lecturer</div>
                                        <div class="students">{{$item->total_hours}} Hours</div>
                                    </div>
                                </div>
                                <div class="clearfix ">
                                    <div class="pull-left">
                                        <span  style=" color: #393939;
                                        font-size: 16px;
                                        font-weight: 500;">Language  <span class="text-success">{{$item->course_lanuguage}}</span></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>  
                 @endforeach 
                @else
                <img src="{{asset('public/assist/images/no-record-found.gif')}}" alt="">
                
                @endif
                            
                </div>
 
					</div>
             
				</div>
				
				<!-- Sidebar Side -->
            
                
        </div>
        <div class="float-right">
            {{$course->links()}}

        </div>
        
    </div>
</div>

@endsection

@section('jquery')
<script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>

<script>
$(document).ready(function(){
    $('.list-view li:first-child').removeClass('active');
    $('.list-view li:last-child').addClass('active');
});

jQuery(function ($) {
    $("[data-toggle='popover']").popover({ trigger: "manual" , html: true, animation:true})
        $('body').on('mouseenter',"[data-toggle='popover']",function () {
            $(".popover").popover("hide");
            var _this = this;
            $(this).popover("show");
            $("body").on("mouseleave", '.popover',function () {
                $(_this).popover('hide');
            });
        });
        $('body').on('mouseleave',"[data-toggle='popover']",function () {
            var _this = this;
                setTimeout(function () {
                    if (!$(".popover:hover").length) {
                        $(_this).popover("hide");
                    }
            }, 100);
        });
});
$('body').on('click','.add-to-cart',function(){
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '} });
    $.ajax({
        method: "POST",
        url: "{{url('cart')}}",
        data: { name: $(this).attr('data-id')}
        })
        .done(function( response ) {
            if(response.error){
                return $.growl.error({
                message: response.error,
                title: 'Error !',
            });
            }else{
                $('.cart_detail').html(response);
                var val=$('.counter1').html();
                var total=parseInt(val)+1;
                $('.counter1').html(total);
            }
        }).error(function(msg){
            if(msg.status==401){
            window.location.href="{{url('login')}}";
        }
        });
        
});

$('body').on('click','.add-to-cart',function(){
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '} });
    $.ajax({
        method: "POST",
        url: "{{url('cart')}}",
        data: { name: $(this).attr('data-id')}
        })
        .done(function( response ) {
            if(response.error){
                return $.growl.error({
                message: response.error,
                title: 'Error !',
            });
            }else{
                $('.cart_detail').html(response);
                var val=$('.counter1').html();
                var total=parseInt(val)+1;
                $('.counter1').html(total);
            }
        }).error(function(msg){
            if(msg.status==401){
            window.location.href="{{url('login')}}";
        }
        });
        
});

$('.skill').change(function() {
    $.ajax({
        method: "get",
        url: "{{url('course/filter/skill/')}}"+'/'+$(this).val(),
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
});

$('.price').change(function () {
    $.ajax({
        method: "get",
        url: "{{url('course/filter/price/')}}"+'/'+$(this).val(),
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
});
$('.duration').change(function () {
    $.ajax({
        method: "get",
        url: "{{url('course/filter/duration/')}}"+'/'+$(this).val(),
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
 });

$('.old_new').change(function() {
    $.ajax({
        method: "get",
        url: "{{url('course/filter/old_new/')}}"+'/'+$(this).val(),
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
});

 </script>
@endsection