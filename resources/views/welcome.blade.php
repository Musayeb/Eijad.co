
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bootcamp HTML Template | Homepage Three</title>
<!-- Stylesheets -->
<link href="{{ asset('public/assist/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('public/assist/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('public/assist/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('public/assist/css/header.css') }}" rel="stylesheet">
<link href="{{ asset('public/assist/css/header.css') }}" rel="stylesheet">

{{-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> --}}
<link rel="icon" href="{{url('public/assist/images/favicon.png')}}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-three">
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index.html"><img src="{{asset('public/assist/images/logo-4.png')}}" alt="" title="Bootcamp"></a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									
                                    <li><a href="{{ url('/start_business') }}">Start a Business</a></li>
                                    <li><a href="{{ url('/') }}">Success Stories</a></li>
                                    <li><a href="{{ url('/') }}">About Us</a></li>

								</ul>
							</div>
							
						</nav>
						
						<div class="outer-box">
							
							<!--Search Box-->
							<div class="searched-popup search-box-outer">
								<button class="search-box-btn"><span class="flaticon-search-1"></span></button>
							</div>
							
							<!-- Login Nav -->
                            <ul class="login-nav">
                                @if (!Auth::check())
                                    <li><a href="{{ url('login') }}">Log In</a></li>
                                    <li><a href="{{ url('register') }}">Register</a></li>
                                @endif

                                {{-- </ul> --}}
                                @if (Auth::check())
                                    <li class="login-nav">
                                        {{-- notifications --}}
                                        <div class="d-inline">
                                            <a href="#" class="nav-link " id="navbarDropdown"
                                                data-toggle="dropdown" aria-expanded="false"
                                                style="padding:0px">
                                                <button style="height:
                                                        3em;width:3em;position:
                                                        relative;overflow:hidden;background:transparent">
                                                    <span>
                                                        <div aria-hidden="true" style="display: flex; width: 100%; height: 100%; border-radius: 50%;
                                                            align-items: center; justify-content: center; text-align: center;
                                                            user-select: none; background-color: #ff5773; color: #ff5773">
                                                            <span style="cursor: pointer;">
                                                                <i class="fa fa-bell text-white fs-5"></i>
                                                            </span>
                                                        </div>
                                                    </span>

                                                </button>
                                                <div class="d-inline counter text-center">4</div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a href="">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <span class="mt-0 float-left h6">Media
                                                                heading</span>
                                                            <span class="float-right">Date</span>
                                                            <p class="" style="display: inline-block">Will you
                                                                do the same for me?
                                                                It's time to face the music I'm no longer your
                                                                muse. Heard it's
                                                                beautiful, be the judge and my girls gonna take
                                                                a vote. I can feel a
                                                                phoenix inside of me. Heaven is jealous of our
                                                                love, angels are crying
                                                                from up above. Yeah, you take me to utopia.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="">
                                                    <div class="modal">
                                                        <div class="modal-body">
                                                            <span class="mt-0 float-left h6">Media
                                                                heading</span>
                                                            <span class="float-right">Date</span>
                                                            <p class="" style="display: inline-block">Will you
                                                                do the same for me?
                                                                It's time to face the music I'm no longer your
                                                                muse. Heard it's
                                                                beautiful, be the judge and my girls gonna take
                                                                a vote. I can feel a
                                                                phoenix inside of me. Heaven is jealous of our
                                                                love, angels are crying
                                                                from up above. Yeah, you take me to utopia.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-center"><a class="link"
                                                        href="{{ url('/notifications') }}">
                                                        Show all notifications</span></a></div>
                                            </div>
                                        </div>

                                        {{-- shopping --}}
                                        <div class="d-inline">
                                            <a href="#" class="nav-link" id="navbarDropdown"
                                                data-toggle="dropdown" aria-expanded="false"
                                                style="padding:0px">
                                                <button style="height: 3em;width:3em;position:relative;overflow:hidden;background:transparent">
                                                    <span>
                                                        <div aria-hidden="true" style="display: flex; width: 100%; height: 100%; border-radius: 50%;
                                                                align-items: center; justify-content: center; text-align: center;
                                                                user-select: none; background-color: #ff5773; color: #ff5773">
                                                            <span style="cursor: pointer;">
                                                                <i
                                                                    class="fa fa-shopping-cart text-white fs-5"></i>
                                                            </span>
                                                        </div>
                                                    </span>
                                                </button>
                                                @php
                                                $cart=DB::table('carts')
                                                     ->join('courses','courses.course_id','carts.course_id')
                                                     ->where('carts.user_id',Auth::id())
                                                     ->get();
                                                 $cart_total=DB::table('carts')->select(DB::raw('count(cart_id)as total'))->where('user_id',Auth::id())->get()[0];                                                             
                                                @endphp
                                                                                
                                                <div class="d-inline counter counter1 text-center">{{$cart_total->total}}</div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">

                                                @foreach ($cart as $c)        
                                                <a href="{{$c->course_slug}}" class="mt-3">
                                                    <div class="d-flex flex-row justify-content-start  shop-item pl-4 pr-4 border-bottom pt-2">
                                                        <div class="shop-img">
                                                            <img src="{{asset('storage/app')}}/{{$c->course_photo}}" alt="course-photo">
                                                        </div>
                                                        <div class="pl-3"> 
                                                            <p class="h6 p-0">{{$c->course_name}}</p>                                                                 

                                                            <p class="font-weight-normal m-0">  
                                                                @php
                                                                $text=html_entity_decode($c->course_bio);
                                                                $final12=implode(' ', array_slice(explode(' ', $text), 0, 5));
                                                                echo $final12.'....';
                                                               @endphp</p>
                                                            <p class="m-0">{{'$'.number_format($c->discount_price, 2, '.', ',')}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endforeach
                                              @if($cart->isEmpty())
                                              <div class="text-center">
                                                <span  style="position: absolute;top:44%;left:36%;">Cart is Empty </span>
                                              </div>
                                              @endif
                                              <a href="{{url('cart')}}" class="p-3 btn-block form-control btn"  style="position: absolute;right:0;bottom:0">
                                                    <span  >Go To Cart</span>
                                              </a>
                                            </div>
                                        </div>

                                        {{-- profile --}}
                                        <div class="d-inline">
                                            <a href="#" class="nav-link " id="navbarDropdown"
                                                data-toggle="dropdown" aria-expanded="false"
                                                style="padding:0px">
                                                <button style="height:
                                                                    3em;width:3em;position:
                                                                    relative;overflow:hidden;background:transparent">
                                                    <span>
                                                        <div aria-hidden="true" style="display: flex; width: 100%; height: 100%; border-radius: 50%;
                                                                            align-items: center; justify-content: center; text-align: center;
                                                                            user-select: none; background-color: #ff5773; color: #ff5773">
                                                            <span style="cursor: pointer;">

                                                                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png"
                                                                    class="main-profile-img" style="width:100%;height:100%;border-radius:
                                                                                9999px;border-width: 1px;
                                                                                
                                                                                border-color: #e2e8f0;border-color: rgba(226,232,240);" />
                                                            </span>
                                                        </div>
                                                    </span>
                                                </button>

                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="{{ url('dashboard/courses-learning') }}">My
                                                    Learning</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('/notifications') }}">Notifications</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('/account-settings') }}">Account
                                                    Settings</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('purchase-history') }}">Purchase
                                                    History</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('edit-profile') }}">Edit
                                                    Profile</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('logout') }}">Logout</a>

                                            </div>
                                        </div>

                                    </li>
                                @endif

                            </ul>
							
						</div>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!-- End Header Upper -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('public/assist/images/logo-2.png')}}" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
		
    </header>
    <!-- End Main Header -->
	
	<!-- Slider Section Two -->
    <section class="slider-section-two">
		<!-- Pattern Layer -->
		<div class="pattern-layer" style="background-image:url({{url('public/assist/images/main-slider/pattern-layer-1.png')}})"></div>
		<div class="pattern-layer-two" style="background-image:url({{url('public/assist/images/main-slider/pattern-layer-2.png')}})"></div>
		<div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide">
				<div class="auto-container">
					<div class="row clearfix">
								
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h1>To keep a customer demands as much skill as to win one.</h1>
								<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</div>
								<div class="btns-box">
									<a href="course.html" class="theme-btn btn-style-four"><span class="txt">Get Stared</span></a>
									<a href="course.html" class="theme-btn btn-style-five"><span class="txt">All Courses</span></a>
								</div>
							</div>
						</div>
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="{{asset('public/assist/images/main-slider/content-image-2.png')}}" alt="">
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
								<h1>To keep a customer demands as much skill as to win one.</h1>
								<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</div>
								<div class="btns-box">
									<a href="course.html" class="theme-btn btn-style-four"><span class="txt">Get Stared</span></a>
									<a href="course.html" class="theme-btn btn-style-five"><span class="txt">All Courses</span></a>
								</div>
							</div>
						</div>
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="{{asset('public/assist/images/main-slider/content-image-2.png')}}" alt="">
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
								<h1>To keep a customer demands as much skill as to win one.</h1>
								<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</div>
								<div class="btns-box">
									<a href="course.html" class="theme-btn btn-style-four"><span class="txt">Get Stared</span></a>
									<a href="course.html" class="theme-btn btn-style-five"><span class="txt">All Courses</span></a>
								</div>
							</div>
						</div>
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="{{asset('public/assist/images/main-slider/content-image-2.png')}}" alt="">
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Banner Section -->
	
	<!-- Title Section -->
	<section class="title-section">
		<div class="pattern-layer" style="background-image:url({{asset('public/assist/images/icons/icon-4.png')}})"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-8 col-md-12 col-sm-12">
					<!-- Sec Title -->
					<div class="sec-title style-two">
						<h2>Our quality curriculum is designed with top-tier industry partners, not academics, so you learn the high-impact skills that top companies want.</h2>
						<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable. There are many variations of passages of Lorem Ipsum.</div>
					</div>
					<a href="course.html" class="theme-btn btn-style-six"><span class="txt">Learn More</span></a>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Title Section -->
	
	<!-- Education Section Three -->
    <section class="education-section-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image titlt" data-tilt="" data-tilt-max="4">
							<a href="{{asset('public/assist/images/resource/education-2.png')}}" data-fancybox="education-2" data-caption="" class=""><img src="{{asset('public/assist/images/resource/education-2.jpg')}}" alt=""></a>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Our education system <br> works for you</h2>
						<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</div>
						<a href="course.html" class="theme-btn btn-style-six"><span class="txt">Learn More</span></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Education Section Three -->
	
	<!-- Project Section -->
    <section class="project-section">
		<!-- Pattern Layer -->
		<div class="pattern-layer" style="background-image:url({{url('public/assist/images/icons/icon-5.png')}})"></div>
		<div class="pattern-layer-two" style="background-image:url({{asset('public/assist/images/icons/dotted-layer-1.png')}})"></div>
    	<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title style-two centered">
				<h2>Our online courses from 25 Institutions. Start today!</h2>
				<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered <br> alteration in some form by injected humour or randomisedable.</div>
			</div>
			
        	<!--Porfolio Tabs-->
            <div class="project-tab">

                <div class="tab-btns-box">
					<!--Tabs Header-->
					<div class="tabs-header">
						<ul class="product-tab-btns clearfix">
							<li class="p-tab-btn active-btn" data-tab="#p-tab-1">Business</li>
							<li class="p-tab-btn" data-tab="#p-tab-2">Design</li>
							<li class="p-tab-btn" data-tab="#p-tab-3">Photography</li>
							<li class="p-tab-btn" data-tab="#p-tab-4">Development</li>
							<li class="p-tab-btn" data-tab="#p-tab-5">Marketing</li>
							<li class="p-tab-btn" data-tab="#p-tab-6">IT & Software</li>
							<li class="p-tab-btn" data-tab="#p-tab-7">See all</li>
						</ul>
					</div>
				</div>
                
                <!--Tabs Content-->  
                <div class="p-tabs-content">
                
                    <!--Portfolio Tab / Active Tab-->
                    <div class="p-tab active-tab" id="p-tab-1">
                        <div class="project-carousel owl-theme owl-carousel">
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-2.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-2.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
						</div>
					</div>
					
					<!--Portfolio Tab-->
                    <div class="p-tab" id="p-tab-2">
                        <div class="project-carousel owl-theme owl-carousel">
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-2.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-2.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
						</div>
					</div>
					
					<!--Portfolio Tab-->
                    <div class="p-tab" id="p-tab-3">
                        <div class="project-carousel owl-theme owl-carousel">
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
						</div>
					</div>
					
					<!--Portfolio Tab-->
                    <div class="p-tab" id="p-tab-4">
                        <div class="project-carousel owl-theme owl-carousel">
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-2.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-2.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
						</div>
					</div>
					
					<!--Portfolio Tab-->
                    <div class="p-tab" id="p-tab-5">
                        <div class="project-carousel owl-theme owl-carousel">
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-2.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-3.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
						</div>
					</div>
					
					<!--Portfolio Tab-->
                    <div class="p-tab" id="p-tab-6">
                        <div class="project-carousel owl-theme owl-carousel">
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
						</div>
					</div>
					
					<!--Portfolio Tab-->
                    <div class="p-tab" id="p-tab-7">
                        <div class="project-carousel owl-theme owl-carousel">
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">User  Research</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UX Management</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
							<!-- Institute Block Two -->
							<div class="institute-block-two">
								<div class="inner-box">
									<div class="image">
										<a href="books-detail.html"><img src="{{asset('public/assist/images/resource/institute-1.jpg')}}" alt=""></a>
									</div>
									<div class="lower-content">
										<div class="clearfix">
											<div class="pull-left">
												<h4><a href="books-detail.html">UI/ UX Design</a></h4>
											</div>
											<div class="pull-right">
												<div class="price">$140</div>
											</div>
										</div>
										<div class="text">Replenish him third creature and meat of the blessed void a fruit</div>
										<a href="books-detail.html" class="theme-btn btn-style-seven"><span class="txt">Enroll Now</span></a>
									</div>
								</div>
							</div>
							<!-- Institute Block Two -->
							
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Project Section -->
	
	<!-- Education Section Four -->
    <section class="education-section-four">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Learn anywhere, anytime</h2>
						<div class="text">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomisedable.</p>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
						</div>
						<a href="course.html" class="theme-btn btn-style-six"><span class="txt">Discover Now</span></a>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image titlt" data-tilt="" data-tilt-max="2">
							<a href="images/resource/education-3.png" data-fancybox="education-2" data-caption="" class=""><img src="{{asset('public/assist/images/resource/education-3.jpg')}}" alt=""></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Education Section Four -->
	
	<!-- Achievement Section Three -->
	<section class="achievements-section-three">
		<!-- Pattern Layer -->
		<div class="pattern-layer" style="background-image:url({{asset('public/assist/images/icons/dotted-layer-2.png')}})"></div>
		<div class="pattern-layer-two" style="background-image:url({{asset('public/assist/images/icons/icon-6.png')}})"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title style-two light centered">
				<h2>Our achievements</h2>
				<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re <br> two waters own morning gathered greater shall had behold had seed.</div>
			</div>
			
			<!-- Fact Counter -->
			<div class="fact-counter-three">
				<div class="row clearfix">

					<!-- Column -->
					<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-course"></span>
								</div>
								<h4 class="counter-title">Total Courses</h4>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2000" data-stop="50">0</span>+
								</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-course-1"></span>
								</div>
								<h4 class="counter-title">Total Student</h4>
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="3000" data-stop="45">0</span>K+
								</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-world"></span>
								</div>
								<h4 class="counter-title">Global Position</h4>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="4000" data-stop="115">0</span>
								</div>
							</div>
						</div>
					</div>

				</div>
				
			</div>
		</div>
	</section>
	<!-- End Achievement Section -->
	
	<!-- Pricing Section -->
    <section class="pricing-section-two">
        <div class="auto-container">
        	<div class="outer-container pricing-tabs-two tabs-box">
                <div class="clearfix">
                    
                    <!--Title Column-->
                    <div class="title-column">
                        <div class="inner-column">
                            
							<!-- Sec Title -->
							<div class="sec-title style-two">
								<h2>Plans & pricing</h2>
								<div class="text">There are many variations of passages of Lorem Ipsum available,</div>
							</div>
							
                            <!-- Tab Btns -->
                            <ul class="tab-buttons clearfix">
                                <li data-tab="#prod-monthly" class="tab-btn active-btn">Monthly</li>
								<li data-tab="#prod-yearly" class="tab-btn">Annually</li>
                            </ul>
                            
                        </div>
                    </div>
                    
                    <!--Price Column-->
                    <div class="price-column">
                        <div class="inner-column">
                            
                            <!--Tabs Container-->
                            <div class="tabs-content">
                                
                                <!--Tab-->
                                <div class="tab active-tab" id="prod-monthly">
                                    <div class="content">
                                        <div class="row clearfix">
                                        	
                                            <!-- Price Block Two -->
											<div class="price-block-two col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<h3>Standard</h3>
													<div class="text">Replenish him third creature and meat of the blessed void good a fruit</div>
													<div class="icon-box">
														<span class="icon flaticon-roll-o-plane"></span>
													</div>
													<div class="price">$29.99</div>
													<a href="course.html" class="theme-btn btn-style-seven"><span class="txt">Start Plan</span></a>
													<div class="time-period">Per month</div>
												</div>
											</div>
											
											<!-- Price Block Two -->
											<div class="price-block-two col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<h3>Premium</h3>
													<div class="text">Replenish him third creature and meat of the blessed void good a fruit</div>
													<div class="icon-box">
														<span class="icon flaticon-standard"></span>
													</div>
													<div class="price">$49.99</div>
													<a href="course.html" class="theme-btn btn-style-seven"><span class="txt">Start Plan</span></a>
													<div class="time-period">Per month</div>
												</div>
											</div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Tab-->
                                <div class="tab" id="prod-yearly">
                                    <div class="content">
                                        <div class="row clearfix">
                                        	
											<!-- Price Block Two -->
											<div class="price-block-two col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<h3>Standard</h3>
													<div class="text">Replenish him third creature and meat of the blessed void good a fruit</div>
													<div class="icon-box">
														<span class="icon flaticon-roll-o-plane"></span>
													</div>
													<div class="price">$29.99</div>
													<a href="course.html" class="theme-btn btn-style-seven"><span class="txt">Start Plan</span></a>
													<div class="time-period">Per month</div>
												</div>
											</div>
											
											<!-- Price Block Two -->
											<div class="price-block-two col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<h3>Premium</h3>
													<div class="text">Replenish him third creature and meat of the blessed void good a fruit</div>
													<div class="icon-box">
														<span class="icon flaticon-standard"></span>
													</div>
													<div class="price">$49.99</div>
													<a href="course.html" class="theme-btn btn-style-seven"><span class="txt">Start Plan</span></a>
													<div class="time-period">Per month</div>
												</div>
											</div>
											
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Section Two -->
	
	<!-- Testimonial Section Two -->
	<section class="testimonial-section-two">
		<!-- Pattern Layer -->
		<div class="pattern-layer" style="background-image:url({{asset('public/assist/images/icons/dotted-layer-2.png')}})"></div>
		<div class="pattern-layer-two" style="background-image:url({{asset('public/assist/images/icons/dotted-layer-2.png')}})"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title style-two centered">
				<h2>What our student have to say?</h2>
				<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered <br> alteration in some form by injected humour or randomisedable.</div>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="author-image">
							<img src="{{asset('public/assist/images/resource/author-10.jpg')}}" alt="">
						</div>
						<h4>Anna Sthesia</h4>
						<div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum the is that it has a more-or-less normal tribution of letters, as usinghere The point of using Lorem Ipsum the</div>
						<div class="category">Student</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="author-image">
							<img src="{{asset('public/assist/images/resource/author-11.jpg')}}" alt="">
						</div>
						<h4>Louis Ville</h4>
						<div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum the is that it has a more-or-less normal tribution of letters, as usinghere The point of using Lorem Ipsum the</div>
						<div class="category">Student</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="author-image">
							<img src="{{asset('public/assist/images/resource/author-10.jpg')}}" alt="">
						</div>
						<h4>Anna Sthesia</h4>
						<div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum the is that it has a more-or-less normal tribution of letters, as usinghere The point of using Lorem Ipsum the</div>
						<div class="category">Student</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="author-image">
							<img src="{{asset('public/assist/images/resource/author-11.jpg')}}" alt="">
						</div>
						<h4>Louis Ville</h4>
						<div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum the is that it has a more-or-less normal tribution of letters, as usinghere The point of using Lorem Ipsum the</div>
						<div class="category">Student</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section Two -->
	
	<!-- Subscribe Section -->
	<section class="subscribe-section">
		<!-- Pattern Layer -->
		<div class="pattern-layer" style="background-image:url({{asset('public/assist/images/icons/icon-4.png')}})"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title style-two centered">
				<h2>Subscribe to know our <br> every single updates</h2>
				<div class="text">There are many variations of passages of Lorem Ipsum available,</div>
			</div>
			
			<!-- Subscribe Form -->
			<div class="subscribe-form-two">
				<form method="post" action="contact.html">
					<div class="form-group clearfix">
						<span class="icon flaticon-mail"></span>
						<input type="email" name="email" value="" placeholder="Please Enter Your Email" required="">
						<button type="submit" class="theme-btn btn-style-six"><span class="txt">Subscribe Now</span></button>
					</div>
				</form>
			</div>
			
		</div>
	</section>
	
	<!--Main Footer-->
    <footer class="main-footer style-two">
		
		<!-- Pattern Layer Four -->
		<div class="pattern-layer-four" style="background-image:url({{asset('public/assist/images/icons/icon-7.png')}})"></div>
		<div class="pattern-layer-five" style="background-image:url({{asset('public/assist/images/icons/icon-8.png')}})"></div>
		<div class="pattern-layer-six" style="background-image:url({{asset('public/assist/images/icons/icon-9.png')}})"></div>
		<div class="auto-container">
		
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="{{asset('public/assist/images/footer-logo-2.png')}}" alt=""></a>
                                    </div>
									<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters own morning gathered greater.</div>
									<div class="social-box">
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-instagram"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-google"></a>
										<a href="#" class="fa fa-pinterest-p"></a>
									</div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>About Us</h4>
									<ul class="links-widget">
										<li><a href="#">Afficiates</a></li>
										<li><a href="#">Partners</a></li>
										<li><a href="#">Reviews</a></li>
										<li><a href="#">Blogs</a></li>
										<li><a href="#">Newsletter</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Resource</h4>
									<ul class="links-widget">
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Support Area</a></li>
										<li><a href="#">Documentations</a></li>
										<li><a href="#">How it works</a></li>
										<li><a href="#">Terms of Policy</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Quick Links</h4>
									<ul class="links-widget">
										<li><a href="#">home</a></li>
										<li><a href="#">About us</a></li>
										<li><a href="#">Features</a></li>
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom text-center">
				<div class="copyright">Copyright &copy; 2020 AuburnForest</div>
			</div>
			
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<!-- Header Search -->
{{-- <div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div> --}}
<!-- End Header Search -->

<script src="{{asset('public/assist/js/jquery.js')}}"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="{{asset('public/assist/js/popper.min.js')}}"></script>
<script src="{{asset('public/assist/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('public/assist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assist/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('public/assist/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('public/assist/js/appear.js')}}"></script>
<script src="{{asset('public/assist/js/swiper.min.js')}}"></script>
<script src="{{asset('public/assist/js/element-in-view.js')}}"></script>
<script src="{{asset('public/assist/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('public/assist/js/parallax.min.js')}}"></script>
<script src="{{asset('public/assist/js/tilt.jquery.min.js')}}"></script>
<script src="{{url('public/assist/js/validate.js')}}"></script>
<!--Master Slider-->
<script src="{{asset('public/assist/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('public/assist/js/owl.js')}}"></script>
<script src="{{asset('public/assist/js/wow.js')}}"></script>
<script src="{{asset('public/assist/js/jquery-ui.js')}}"></script>
<script src="{{asset('public/assist/js/script.js')}}"></script>

</body>
</html>