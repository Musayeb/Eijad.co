@extends('layouts.master')
@section('css')
    <style>
		.main-header .header-upper{

            background-color:#201b34 !important;
		}
		.header-style-two .auto-container,
		.header-style-three .auto-container{      
			background-color:transparent !important;
		}
    </style>
@endsection
@section('content')
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
@endsection
