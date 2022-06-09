
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
@yield('css')

{{-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> --}}
<link rel="icon" href="{{url('public/assist/images/favicon.png')}}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
@yield('styles')
<style>
    .cart_detail{
        height: 25rem;
        overflow-y: scroll;
        padding-bottom: 50px;
    }
</style>
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
                    	<div class="logo pt-3 pb-1"><a href="{{url('/')}}"><img src="{{asset('public/assist/images/logo.png')}}"  alt="" title="Bootcamp"></a></div>
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
							<!-- Login Nav -->
                            <ul class="login-nav">
                                @if (!Auth::check())
                                    <li><a style="color:#ffffff" href="{{ url('login') }}">Log In</a></li>
                                    <li><a href="{{ url('register') }}">Register</a></li>                                    
                                @endif

                                {{-- </ul> --}}
                                @if (Auth::check())
                                    @if(Auth::user()->role=="User")
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
                                            <div class="dropdown-menu dropdown-menu-right  ">
                                                <div class="cart_detail">

                                                @foreach ($cart as $c)        
                                                <a href="{{url('cart')}}" class="mt-3 ">
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
                                                            <p class="m-0">{{'$'.number_format($c->course_price, 2, '.', ',')}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endforeach
                                              @if($cart->isEmpty())
                                              <div class="text-center">
                                                <span  style="position: absolute;top:44%;left:36%;">Cart is Empty </span>
                                              </div>
                                              @endif
                                            </div>

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
                                                <button style="height:3em;width:3em;position:
                                                                    relative;overflow:hidden;background:transparent">
                                                    <span>
                                                        <div aria-hidden="true" style="display: flex; width: 100%; height: 100%; border-radius: 50%;
                                                                            align-items: center; justify-content: center; text-align: center;
                                                                            user-select: none; background-color: #ff5773; color: #ff5773">
                                                            <span style="cursor: pointer;">
                                                                @if(empty(Auth::user()->profile_photo_path))
                                                                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png"
                                                                    class="main-profile-img" style="width:100%;height:100%;border-radius:
                                                                                9999px;border-width: 1px;
                                                                        
                                                                                border-color: #e2e8f0;border-color: rgba(226,232,240);" />
                                                               @else
                                                               <img src="{{url('storage/app').'/'.Auth::user()->profile_photo_path}}"
                                                               class="main-profile-img" style="width:100%;height:100%;border-radius:
                                                                           9999px;border-width: 1px;
                                                                                  border-color: #e2e8f0;border-color: rgba(226,232,240);" />
                                                               @endif                 
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
                                                    href="{{ url('purchase_history') }}">Purchase
                                                    History</a>
                                                    <a class="dropdown-item"
                                                    href="{{ url('/account-settings') }}">Account
                                                    Settings</a>

                                                <a class="dropdown-item"
                                                    href="{{ url('logout') }}">Logout</a>

                                            </div>
                                        </div>

                                    </li>

                                    @else
                                    <li><a style="color:#ffffff" href="{{ url('admin/home') }}">Dashboard</a></li>
                                    <li><a href="{{ url('logout') }}">Logout</a></li>    
                                    @endif
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
                <div class="nav-logo"><a href="index.html"><img src="{{asset('public/assist/images/logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
		
    </header>
    <!-- End Main Header -->
	