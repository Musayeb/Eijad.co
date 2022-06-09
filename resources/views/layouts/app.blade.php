
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Eijad</title>
<!-- Stylesheets -->
<link href="{{asset('public/assist/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('public/assist/css/main.css')}}" rel="stylesheet">
<link href="{{asset('public/assist/css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('public/assist/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('public/assist/images/favicon.png')}}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
@yield('css')

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

@yield('styles')
</head>

<body>

<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
 <div id="app">
    <header class="main-header header-style-two">
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="{{url('/')}}"><img src="{{asset('public/assist/images/logo-2.png')}}" alt="" title="Bootcamp"></a></div>
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

							<div class="navbar-collapse collapse clearfix" >
								<ul class="navigation clearfix">
									<li><a href="{{url('/start_business')}}">Start a Business</a></li>
									<li><a href="{{url('/')}}">Success Stories</a></li>
									<li><a href="{{url('/')}}">About Us</a></li>                                   
								</ul>
							</div>							
						</nav>
						
						<div class="outer-box">

							<!-- Login Nav -->
							<ul class="login-nav">
                                @if (!Auth::check())        
                                <li><a href="login">Log In</a></li>
								<li><a href="register-option">Register</a></li>
                                @endif

							{{-- </ul>  --}}
                            @if (Auth::check())
        
                                <li class="dropdown login-nav">
                                    <a href="#" class="nav-link " id="navbarDropdown" data-toggle="dropdown" aria-expanded="false" style="padding:0px"> 
                                        <button  style="height: 3em;width:3em;position: relative;overflow:hidden;background:transparent">
                                            <span>
                                                <div aria-hidden="true" style="display: flex; width: 100%; height: 100%; border-radius: 50%;  align-items: center; justify-content: center; text-align: center; user-select: none; background-color: #ff5773; color: #ff5773"> 
                                    <span> <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" class="main-profile-img"  style="width:100%;height:100%;border-radius: 9999px;border-width: 1px; 
                          border-color: #e2e8f0;
                          border-color: rgba(226,232,240);"/></span>
                                                </div>
                                            </span>
                                        </button>
                                        
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{url('/account-settings')}}">Account Settings</a>
                                        <a class="dropdown-item" href="{{url('/course')}}">Course</a>
                                        <a class="dropdown-item" href="#">Assesments</a>
                                    </div>
                                </li>
                                @endif

                            </ul>
					
						{{-- </div> --}}
						
					</div>
                   
                </div>
            </div>
        </div>
        <!-- End Header Upper -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 404px;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                <div class="nav-logo"><a href="{{('/')}}"><img src="{{asset('public/assist/images/logo-2.png')}}" alt="" title="" class="mCS_img_loaded"></a></div>
                <div class="menu-outer">			
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation">
                                    <li><a href="{{url('/')}}">Start a Business</a></li>
									<li><a href="{{url('/')}}">Success Stories</a></li>
									<li><a href="{{url('/')}}">About Us</a></li>     
                                    <li><a href="login">Log In</a></li>
                                    <li><a href="register-option">Register</a></li>

								</ul>
							</div>
							
						</div>
            </nav>
            <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></nav>
        </div>
		<!-- End Mobile Menu -->
		
    </header>



    
    @yield('content')

 
<!--End pagewrapper-->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

</div>
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
            <div class="copyright">Copyright &copy; 2021 Eijad</div>
        </div>
        
    </div>
</footer>    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>
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

<!--Master Slider-->
<script src="{{asset('public/assist/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('public/assist/js/owl.js')}}"></script>
<script src="{{asset('public/assist/js/wow.js')}}"></script>
<script src="{{asset('public/assist/js/jquery-ui.js')}}"></script>
<script src="{{asset('public/assist/js/script.js')}}"></script>
<script src="{{asset('public/js/app.js')}}"></script>
@yield('jquery')


</body>
</html>