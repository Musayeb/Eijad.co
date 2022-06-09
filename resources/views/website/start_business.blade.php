@extends('layouts.master')
@section('css')
{{-- <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
 --}}
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
</style>
@endsection
@section('content')

{{-- <section class="intro-section-two">
    <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(public/assist/images/icons/icon-1.png)"></div>
    <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(public/assist/images/icons/icon-2.png)"></div>
    <div class="circle-one"></div>
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Choose a topic</h2>
            <div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two <br> waters own morning gathered greater shall had behold had seed.</div>
        </div>
    
        <div class="row clearfix justify-content-center">
            
            <!-- Topic Block -->
            <div class="topic-block col-lg-3 col-md-6 col-sm-12 image titlt "  data-tilt="" data-tilt-max="4" style="will-change: transform; transform: perspective(300px) rotateX(1.73deg) rotateY(1.79deg) scale3d(1, 1, 1); transition: all 400ms cubic-bezier(0.03, 0.98, 0.52, 0.99) 0s;">
                <div class="text-center"> <svg xmlns="http://www.w3.org/2000/svg"  width="15px" height="15px" class=" text-success text-center" viewBox="0 0 32 32">
                    <path d="M2 10.02h28L16 24.03 2 10.02z" class="svg"></path></svg></div>                
                <div class="inner-box active">
                    <div class="icon-box">
                        <a href="course.html" class="overlay-link"></a>
                        <span class="icon flaticon-user"></span>
                    </div>
                    <h5><a href="course.html" class="title">Entrepreneurship</a></h5>                
                </div>
            </div>

            <!-- Topic Block -->
            <div class="topic-block col-lg-3 col-md-6 col-sm-12 image titlt"  data-tilt="" data-tilt-max="4" style="will-change: transform; transform: perspective(300px) rotateX(1.73deg) rotateY(1.79deg) scale3d(1, 1, 1); transition: all 400ms cubic-bezier(0.03, 0.98, 0.52, 0.99) 0s;">
                <div class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" class="text-success text-center" viewBox="0 0 32 32">
                    <path d="M2 10.02h28L16 24.03 2 10.02z"></path></svg></div>                 
                <div class="inner-box">
                    <div class="icon-box">
                        <a href="course.html" class="overlay-link"></a>
                        <span class="icon flaticon-graphic"></span>
                    </div>
                    <h5><a href="course.html"  class="title">Business</a></h5>
                  
                </div>
            </div>
            
            <!-- Topic Block -->
        <div class="topic-block col-lg-3 col-md-6 col-sm-12 image titlt"  data-tilt="" data-tilt-max="4" style="will-change: transform; transform: perspective(300px) rotateX(1.73deg) rotateY(1.79deg) scale3d(1, 1, 1); transition: all 400ms cubic-bezier(0.03, 0.98, 0.52, 0.99) 0s;">
           <div class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" class="text-success text-center" viewBox="0 0 32 32">
                <path d="M2 10.02h28L16 24.03 2 10.02z"></path></svg></div>
                <div class="inner-box">
                    <div class="icon-box">
                        <a href="course.html" class="overlay-link"></a>
                        <span class="icon flaticon-money-bag"></span>
                    </div>
                    <h5><a href="course.html" class="title">Finance and Bookkeeping </a></h5>            
                </div>
            </div>
            <div class="col-md-9">
                <span>You complete <strong>1</strong> out of <strong>24</strong> lectures</span><span id="end"><i class="icon-trophy"></i></span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" data-percentage="25" style="width: 25%;">25%</div>
                    </div>
                <i class="icon-trophy"></i>
            </div>
         
        </div>

    </div>

</section>  --}}
<!-- End intro Courses -->

<div class="sidebar-page-container">
    <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(&quot;public/assist/images/icons/icon-1.png&quot;); transform: translateY(-28px); transition: transform 0s linear 0s; will-change: transform;"></div>
    <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(&quot;public/assist/images/icons/icon-2.png&quot;); transform: translateY(35px); transition: transform 0s linear 0s; will-change: transform;"></div>
    <div class="circle-one"></div>
    <div class="circle-two"></div>
    <div class="auto-container">
        <div class="row clearfix">
                  <!-- Sidebar Side -->
                  {{-- <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar-inner">
                        <aside class="sidebar">
                            
                            <!-- Filter Widget -->
                            <div class="filter-widget">
                                <h5>Filter By</h5>
                                
                                <div class="skills-box">
                                    
                                    <!-- Skills Form -->
                                    <div class="skills-form">
                                        <form method="post" action="index.html">
                                            <span>Skill Level</span>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box">
                                                <input type="radio" name="remember-password" checked="" id="type-1"> 
                                                <label for="type-1">Beginner</label>
                                            </div>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box">
                                                <input type="radio" name="remember-password" id="type-2"> 
                                                <label for="type-2">Intermediate</label>
                                            </div>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box">
                                                <input type="radio" name="remember-password" id="type-3"> 
                                                <label for="type-3">Expert</label>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                                
                                <div class="skills-box-two">
                                    
                                    <!-- Skills Form -->
                                    <div class="skills-form-two">
                                        <form method="post" action="index.html">
                                            <span>Skill Level</span>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box">
                                                <input type="radio" name="remember-password" checked="" id="type-4"> 
                                                <label for="type-4">Free (14)</label>
                                            </div>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box">
                                                <input type="radio" name="remember-password" id="type-5"> 
                                                <label for="type-5">Paid</label>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                                
                                <div class="skills-box-three">
                                    
                                    <!-- Skills Form -->
                                    <div class="skills-form-three">
                                        <form method="post" action="index.html">
                                            <span>Duration Time</span>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box-three">
                                                <input type="radio" name="remember-password" checked="" id="type-7">
                                                <label for="type-7">5+ hours (30)</label>
                                            </div>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box-three">
                                                <input type="radio" name="remember-password" id="type-8"> 
                                                <label for="type-8">10+ hours (20)</label>
                                            </div>
                                            
                                            <!-- Radio Box -->
                                            <div class="radio-box-three">
                                                <input type="radio" name="remember-password" id="type-9"> 
                                                <label for="type-9">15+ hours (5)</label>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </aside>
                    </div>
                </div> --}}
            <!-- Content Side -->
            {{-- <div class="content-side col-lg-9 col-md-12 col-sm-12">
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
                                    <li class="active"><a href="course.html"><span class="icon flaticon-grid"></span></a></li>
                                    <li><a href="course-list.html"><span class="icon flaticon-list-1"></span></a></li>
                                </ul>
                                
                                <!-- Type Form -->
                                <div class="type-form">
                                    <form method="post" action="index.html">
                                        
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box" id="ui-id-1" style="display: none;">
                                                <option>Newest</option>
                                                <option>Old</option>
                                            </select>
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row clearfix">
                        
                        @foreach ($course as $item)
                            <div class="cource-block col-lg-4 col-md-6 col-sm-12 ">
                                <div class="inner-box card course_title_body" >
                                    <div class="image">
                                        <a href="{{url('start_business')}}/{{$item->course_slug}}">
                                            <div style="height:150px;min-width:270px">
    
                                            <img class="img-fluid" style="contain: cover" src="{{url('storage/app')}}/{{$item->course_photo}}" 
                                            alt="Course-avatar">
                                        </div>
                                        
                                        </a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="clearfix">
                                                <span class="course_name"><a href="course-detail.html">{{$item->course_name}}</a></span>
                                                <div class="author">
                                                    <small>{{"Musayeb"}}</small>
                                                </div>
                                        </div>
                                        <div class="text" style="min-width:200px;min-height:60px">{{$item->course_bio}}</div>
                                        <div class="font-weight-bold h6">{{'$'.number_format($course[0]->discount_price, 2, '.', ',')}}</div>

                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">{{$item->total_lecture}} Lecturer</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="students"><a href="javscript:void()">{{$item->total_hours}} Hours</a></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="add-cart">
                                        <div class="bt-container" >
                                            <button type="button" class="btn btn-circle btn-md btn-outline-primary add-to-cart" data-id="{{$item->course_id}}"> <i class="fa fa-shopping-cart"></i> Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                               
                            
                        </div>
                   
                        @endforeach
                   
             
                     
                        
                    </div>
                    
                </div>
                
            </div>
            <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                <div class="sidebar-inner">
                    <aside class="sidebar">
                        
                        <!-- Filter Widget -->
                        <div class="filter-widget">
                            <h5>Filter By</h5>
                            
                            <div class="skills-box">
                                
                                <!-- Skills Form -->
                                <div class="skills-form">
                                    <form method="post" action="index.html">
                                        <span>Skill Level</span>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" checked="" id="type-1"> 
                                            <label for="type-1">Beginner</label>
                                        </div>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" id="type-2"> 
                                            <label for="type-2">Intermediate</label>
                                        </div>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" id="type-3"> 
                                            <label for="type-3">Expert</label>
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                            
                            <div class="skills-box-two">
                                
                                <!-- Skills Form -->
                                <div class="skills-form-two">
                                    <form method="post" action="index.html">
                                        <span>Skill Level</span>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" checked="" id="type-4"> 
                                            <label for="type-4">Free (14)</label>
                                        </div>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" id="type-5"> 
                                            <label for="type-5">Paid</label>
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                            
                            <div class="skills-box-three">
                                
                                <!-- Skills Form -->
                                <div class="skills-form-three">
                                    <form method="post" action="index.html">
                                        <span>Duration Time</span>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box-three">
                                            <input type="radio" name="remember-password" checked="" id="type-7">
                                            <label for="type-7">5+ hours (30)</label>
                                        </div>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box-three">
                                            <input type="radio" name="remember-password" id="type-8"> 
                                            <label for="type-8">10+ hours (20)</label>
                                        </div>
                                        
                                        <!-- Radio Box -->
                                        <div class="radio-box-three">
                                            <input type="radio" name="remember-password" id="type-9"> 
                                            <label for="type-9">15+ hours (5)</label>
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </aside>
                </div>
            </div> --}}
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
										<form method="post" action="">
											
											<!-- Form Group -->
                                            <div class="form-group">
                                                <select  class="old_new">
                                                    <option value="Newest">Newest</option>
                                                    <option value="Old">Old</option>
                                                </select>
                                            </div>
											
										</form>
									</div>
									
								</div>
							</div>
						</div>

                        <div class="row clearfix" id="filter_change">
                            @if(!$course->isEmpty())   
                            @foreach ($course as $item)
                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12  popover_t" 
                            data-html="true" 
                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-animation="true"
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
                             data-id='{{$item->course_id}}'> <i class='fa fa-shopping-cart'></i> Add To Cart</button></div>@endif">

                             


                                <div class="inner-box course_title_body">
                                    <div class="image">
                                        <a href="{{url('start_business')}}/{{$item->course_slug}}">
                                            <div >
                                            <img class="img-fluid" src="{{url('storage/app')}}/{{$item->course_photo}}" 
                                            alt="Course-avatar">
                                        </div>
                                        </a>
                                    </div>
                                    <div class="lower-content">
                                        <span class="course_name"><a href="{{url('start_business')}}/{{$item->course_slug}}">{{$item->course_name}}</a></span>
                                        <div class="author">
                                            <small>{{"Musayeb"}}</small>
                                        </div>
                                    
                                        @if($item->course_type=="Free")
                                        <h3 class="font-weight-bold h6 text-success">{{$item->course_type}}</h3>
                                       @else
                                       <div class="font-weight-bold h6">{{'$'.number_format($item->course_price, 2, '.', ',')}}</div>
                                       @endif

                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">{{$item->total_lecture}} Lecturer</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="students"><a href="javscript:void()">{{$item->total_hours}} Hours</a></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                            
                            
                                </div>
                            </div>
                            @endforeach 
                            @else
                            <div class="card w-100">
                                <img  src="{{asset('public/assist/images/no-record-found.gif')}}" alt="">
                            </div>
                            
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
{{-- <div class="sidebar-page-container">
    <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
    <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
    <div class="circle-one"></div>
    <div class="circle-two"></div>
    <div class="auto-container">
        <div class="row clearfix">

	<!-- Content Side -->
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
                            <li><a href="course.html"><span class="icon flaticon-grid"></span></a></li>
                            <li class="active"><a href="course-list.html"><span class="icon flaticon-list-1"></span></a></li>
                        </ul>
                        
                        <!-- Type Form -->
                        <div class="type-form">
                            <form method="post" action="index.html">
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <select class="custom-select-box">
                                        <option>Newest</option>
                                        <option>Old</option>
                                    </select>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            @foreach ($course as $row)
              <!-- Cource Block Two -->
            <div class="cource-block-three">
                <div class="inner-box">
                    <div class="image" style="vertical-align: middle">
                        <a href="{{url('start_business')}}/{{$row->course_slug}}"><img style="vertical-align: middle;height:200px;width:280px;object-fit:contain" src="{{url('storage/app')}}/{{$row->course_thumnail_photo}}" alt=""></a>
                    </div>
                    <div class="content-box">
                        <div class="box-inner">
                            <h5><a href="{{url('start_business')}}/{{$row->course_slug}}">{{$row->course_name}}</a></h5>
                            <div class="text">
                                @php
                                $text=html_entity_decode($row->course_description);
                                $final=implode(' ', array_slice(explode(' ', $text), 0, 30));
                                echo $final.'...';
                               @endphp</div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="level-box">
                                        <span class="icon flaticon-settings-1"></span>
                                        {{$row->course_level}}
                                    </div>
                                </div>
                                <div class="pull-right clearfix">
                                    <div class="students">{{$row->total_lecture}} Lecturer</div>
                                    <div class="hours">{{$row->total_hourse}} Hours</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            {{$course->links()}}
          
            
        </div>        
</div>
    
    <!-- Sidebar Side -->
    <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
        <div class="sidebar-inner">
            <aside class="sidebar">
                
                <!-- Filter Widget -->
                <div class="filter-widget">
                    <h5>Filter By</h5>
                    
                    <div class="skills-box">
                        
                        <!-- Skills Form -->
                        <div class="skills-form">
                            <form method="post" action="index.html">
                                <span>Skill Level</span>
                                
                                <!-- Radio Box -->
                                <div class="radio-box">
                                    <input type="radio" name="remember-password" checked="" id="type-1"> 
                                    <label for="type-1">Beginner</label>
                                </div>
                                
                                <!-- Radio Box -->
                                <div class="radio-box">
                                    <input type="radio" name="remember-password" id="type-2"> 
                                    <label for="type-2">Intermediate</label>
                                </div>
                                
                                <!-- Radio Box -->
                                <div class="radio-box">
                                    <input type="radio" name="remember-password" id="type-3"> 
                                    <label for="type-3">Expert</label>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                    
                    <div class="skills-box-two">
                        
                        <!-- Skills Form -->
                        <div class="skills-form-two">
                            <form method="post" action="index.html">
                                <span>Skill Level</span>
                                
                                <!-- Radio Box -->
                                <div class="radio-box">
                                    <input type="radio" name="remember-password" checked="" id="type-4"> 
                                    <label for="type-4">Free (14)</label>
                                </div>
                                
                                <!-- Radio Box -->
                                <div class="radio-box">
                                    <input type="radio" name="remember-password" id="type-5"> 
                                    <label for="type-5">Paid</label>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                    
                    <div class="skills-box-three">
                        
                        <!-- Skills Form -->
                        <div class="skills-form-three">
                            <form method="post" action="index.html">
                                <span>Duration Time</span>
                                
                                <!-- Radio Box -->
                                <div class="radio-box-three">
                                    <input type="radio" name="remember-password" checked="" id="type-7">
                                    <label for="type-7">5+ hours (30)</label>
                                </div>
                                
                                <!-- Radio Box -->
                                <div class="radio-box-three">
                                    <input type="radio" name="remember-password" id="type-8"> 
                                    <label for="type-8">10+ hours (20)</label>
                                </div>
                                
                                <!-- Radio Box -->
                                <div class="radio-box-three">
                                    <input type="radio" name="remember-password" id="type-9"> 
                                    <label for="type-9">15+ hours (5)</label>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
                
            </aside>
        </div>
    </div>
    
</div> --}}
@endsection

@section('jquery')
<script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>


{{-- <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
<script src="{{asset('public/assist/vedio.js/videojs-playback-aduster.js')}}"></script>
<script src="{{asset('public/assist/vedio.js/vediojs-contrib.js')}}"></script> --}}

<script>

//     jQuery('#my-video').bind('contextmenu',function() { return false; });
//     (function(window, videojs) {
//       var player = window.player = videojs('my-video', {
//         playbackRates: [0.5, 1, 1.25,1.5, 2]
//       });

//     }(window, window.videojs));
//   </script>
 <script>

// if (document.getElementById("my-video")) {
//   videojs("my-video").ready(function() {
//     var myPlayer = this;
//     var currentTime = 0;

//     myPlayer.on("seeking", function(event) {
//       if (currentTime < myPlayer.currentTime()) {
//         myPlayer.currentTime(currentTime);
//       }
//     });

//     myPlayer.on("seeked", function(event) {
//       if (currentTime < myPlayer.currentTime()) {
//         myPlayer.currentTime(currentTime);
//       }
//     });

//     setInterval(function() {
//       if (!myPlayer.paused()) {
//         currentTime = myPlayer.currentTime();
//       }
//     }, 1000);

//   });
  
// }
// videojs('video', {
//     controls: true,
//     plugins: {
//       videoJsResolutionSwitcher: {
//         default: 'low', // Default resolution [{Number}, 'low', 'high'],
//         dynamicLabel: true
//       }
//     }
//   }, function(){
//     var player = this;
//     window.player = player
//     player.updateSrc([
//       {
//         src: 'https://vjs.zencdn.net/v/oceans.mp4?SD',
//         type: 'video/mp4',
//         label: 'SD',
//         res: 360
//       },
//       {
//         src: 'https://vjs.zencdn.net/v/oceans.mp4?HD',
//         type: 'video/mp4',
//         label: 'HD',
//         res: 720
//       }
//     ])
//     player.on('resolutionchange', function(){
//       console.info('Source changed to %s', player.src())
//     })
//   })
jQuery(function ($) {
    $("[data-toggle='popover']").popover({ trigger: "manual" , html: true, animation:true})
        $('body').on('mouseenter',"[data-toggle='popover']",function () {
            
            $(".popover").popover("hide");
            var _this = this;
            $(_this).popover("show");

        });
        $('body').on('mouseleave',"[data-toggle='popover']",function () {
            var _this = this;
            setTimeout(function () {
            var isHovered = $('.popover').is(":hover");
            if(isHovered==true){
                $(_this).popover("show");
            }else{
                $(_this).popover("hide");
            }
          }, 100);

        });
});

$(document).ready(function(){
    $('.list-view li:last-child').removeClass('active');
    $('.list-view li:first-child').addClass('active');

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
        url: "{{url('course/filter/skill/')}}"+'/'+$(this).val()+'/2',
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
});

$('.price').change(function () {
    $.ajax({
        method: "get",
        url: "{{url('course/filter/price/')}}"+'/'+$(this).val()+'/2',
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
});
$('.duration').change(function () {
    $.ajax({
        method: "get",
        url: "{{url('course/filter/duration/')}}"+'/'+$(this).val()+'/2',
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
 });

$('.old_new').change(function() {
    $.ajax({
        method: "get",
        url: "{{url('course/filter/old_new/')}}"+'/'+$(this).val()+'/2',
        })
        .done(function( response ) {
           $('#filter_change').html(response);
        }).error(function(msg){
            
        });
});
 </script>
@endsection