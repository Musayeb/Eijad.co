<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Flaira - Bootstrap HTML Admin Template">
    <meta name="author" content="Sarey.co">
    <meta name="keywords" content="">
    <meta name="_token" content="{{ csrf_token() }}" />

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>Eijad - Dashboard</title>

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="{{ asset('public/assets/css/sidemenu.css') }}" rel="stylesheet">


    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css')}}" media="all"
        href="{{ asset('public/assets/colors/color1.css') }}" />

    @yield('css')

</head>

<body class="app sidebar-mini Left-menu-Default  Sidemenu-left-icons dark-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('public/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--APP-SIDEBAR-->
            <div class="app-header header-search-icon">
                <div class="header-style1">
                    <a class="header-brand" href="{{url('admin/home')}}">
                        <img src="{{ asset('public/assist/images/logo.png') }}"
                            class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('public/assist/images/logo.png') }}"
                            class="header-brand-img mobile-logo" alt="logo">
                    </a><!-- LOGO -->
                    <a class="header-brand header-brand1" href="{{url('admin/home')}}">
                        <img src="{{ asset('public/assist/images/logo.png') }}"
                            class="header-brand-img desktop-logo" alt="logo" style="width: 150px">
                        <img src="{{ asset('public/assist/images/logo.png') }}"
                            class="header-brand-img mobile-logo" alt="logo">
                    </a><!-- LOGO -->
                </div>
                <div class="app-sidebar__toggle" data-toggle="sidebar">
                    <a class="open-toggle" href="#"><i class="fe fe-align-left"></i></a>
                    <a class="close-toggle" href="#"><i class="fe fe-x"></i></a>
                </div>
                <div class="d-flex  ml-auto header-right-icons">

                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link nav-link-bg fullscreen-button">
                            <i class="fe fe-minimize fullscreen-button"></i>
                        </a>
                    </div><!-- FULL-SCREEN -->
                    <div class="dropdown d-md-flex notifications">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                            <span class="nav-unread badge badge-success badge-pill">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a href="#" class="dropdown-item text-center">Notifications</a>
                            <div class="dropdown-divider"></div>
                            <div class="notifications-menu">
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-primary mr-3">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="">
                                        <strong>Event today</strong>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-primary mr-3">
                                        <i class="fa fa-commenting-o"></i>
                                    </div>
                                    <div class="">
                                        <strong>Settings</strong>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-danger mr-3">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="">
                                        <strong>Your Admin Lanuch</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">View all Notification</a>
                        </div>
                    </div><!-- NOTIFICATIONS -->
                    {{-- <div class="dropdown d-md-flex message">
                        <a class="nav-link icon text-center" data-toggle="dropdown">
                            <i class="fe fe-mail"></i>
                            <span class="nav-unread badge badge-danger badge-pill">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="message-menu">
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                        data-image-src="{{ asset('public/assets/images/users/1.jpg') }}"></span>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                        data-image-src="{{ asset('public/assets/images/users/12.jpg') }}"></span>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                        data-image-src="{{ asset('public/assets/images/users/4.jpg') }}"></span>
                                    <div>
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 mintues ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                        data-image-src="{{ asset('public/assets/images/users/15.jpg') }}"></span>
                                    <div>
                                        <strong>Sanderson</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            2 days ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">See all Messages</a>
                        </div>
                    </div><!-- MESSAGE-BOX --> --}}
                    <div class="dropdown profile-1">
                        <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                            <span>
                                <img src="{{ asset('storage/app').'/'.Auth::user()->profile_photo_path}}" alt="profile-user"
                                    class="avatar  profile-user brround cover-image">
                            </span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="drop-heading">
                                <div class="text-center">
                                    <h5 class="text-dark mb-0">{{Auth::user()->name}}</h5>
                                    <small class="text-muted">{{Auth::user()->role}}</small>
                                </div>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item" href="{{url('admin/profile')}}">
                                <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                            </a>
                                         
                            <div class="dropdown-divider mt-0"></div>
                         
                            <a class="dropdown-item" href="{{url('logout')}}">
                                <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!--APP-SIDEBAR-->

            <!--APP-SIDEBAR-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar">
                <div class="sidebar-user-settings">
                    <div class="app-sidebar__user mb-4 mt-4">
                        <div class="dropdown user-pro-body text-center">
                            <a href="#" class="user-box">
                                <div class="user-pic">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-image-src="{{ asset('storage/app').'/'.Auth::user()->profile_photo_path}}">
                                        <span class="avatar-status bg-primary"></span><span
                                            class="avatar-border"></span>
                                    </span>
                                </div>
                                <div class="user-info">
                                    <h5 class=" mb-1 font-weight-bold text-dark">{{Auth::user()->name}}</h5>
                                    <span class="text-muted app-sidebar__user-name text-sm">{{Auth::user()->role}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <ul class="side-menu">

                    <li>
                        <a class="side-menu__item" href="{{ url('admin/home') }}">
                            <span class="side-menu__label">Dashboard</span><i
                                class="side-menu__icon fe fe-airplay"></i></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="{{ url('admin/courses') }}"><span
                                class="side-menu__label">Courses</span><i
                                class="side-menu__icon fe fe-book-open"></i></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="{{ url('admin/quiz') }}">
                            <span class="side-menu__label">Quizzes</span><i class="side-menu__icon fa fa-question"></i></a>
                    </li>

                    <li>
                        <a class="side-menu__item" href="{{ url('admin/media') }}"><span
                                class="side-menu__label">Media Center</span><i class="side-menu__icon fe fe-video"></i></a>
                    </li>
         
                    <li>
                        <a class="side-menu__item" href="{{ url('admin/payments') }}">
                            <span class="side-menu__label">Payments & Financial</span><i
                                class="side-menu__icon fa fa-money"></i></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="{{ url('admin/student') }}">
                            <span class="side-menu__label">Students</span><i
                                class="side-menu__icon fa fa-users"></i></a>
                    </li>

        
                    <li>
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="angle fe fe-chevron-right"></i><span class="side-menu__label">User Management</span><i class="side-menu__icon fa fa-user"></i></a>
                            <ul class="slide-menu">
                                    <li><a href="{{url('admin/users-manage')}}" class="slide-item"><i class="sidemenu-icon  fe fe-chevrons-right"></i>Users</a></li>
                                    <li><a href="{{url('admin/users_activity_log')}}" class="slide-item"><i class="sidemenu-icon  fe fe-chevrons-right"></i>Users activity Log</a></li>
                            </ul>
                    </li>

			

           
                    <li>
                        <a class="side-menu__item" href="{{ url('admin/certificates') }}">
                            <span class="side-menu__label">Certificates</span><i
                                class="side-menu__icon fa fa-money"></i></a>
                    </li>
         
                    <li>
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="angle fe fe-chevron-right"></i><span class="side-menu__label">Reports</span><i class="side-menu__icon fa fa-user"></i></a>
                            <ul class="slide-menu">
                                    <li><a href="{{url('admin/report1')}}" class="slide-item"><i class="sidemenu-icon  fe fe-chevrons-right"></i>Report1</a></li>
                                    <li><a href="{{url('admin/report2')}}" class="slide-item"><i class="sidemenu-icon  fe fe-chevrons-right"></i>Report2</a></li>
                            </ul>
                    </li>

                    <li>
                        <a class="side-menu__item" href="{{ url('admin/reports') }}">
                            <span class="side-menu__label">Sign out</span><i
                                class="side-menu__icon mdi  mdi-logout-variant"></i></a>
                    </li>
       

                </ul>
            </aside>
            <!--/APP-SIDEBAR-->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="container-fluid">
                    <div class="d-flex">
                        <div class="app-sidebar__toggle" data-toggle="sidebar">
                            <a class="open-toggle" href="#"><i class="fe fe-align-left"></i></a>
                            <a class="close-toggle" href="#"><i class="fe fe-x"></i></a>
                        </div>
                        <a class="header-brand" href="index.html">
                            <img src="{{ asset('public/assets/images/brand/logo.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                        </a>
                        <a class="header-brand header-brand1" href="index.html">
                            <img src="{{ asset('public/assets/images/brand/logo-white.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                        </a><!-- LOGO -->
                        <div class="d-flex order-lg-2 ml-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-md-none" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                            </button>
                            <div class="dropdown profile-1">
                                <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                                    <span>
                                        <img src="{{ asset('public/assets/images/users/15.jpg') }}" alt="profile-user"
                                            class="avatar  profile-user brround cover-image">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0">Devid Antoni</h5>
                                            <small class="text-muted">Administrator</small>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="float-right"></span>
                                        <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                    </a>
                                    <a class="dropdown-item" href="login.html">
                                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown d-md-flex header-settings">
                                <a href="#" class="nav-link icon " data-toggle="sidebar-right"
                                    data-target=".sidebar-right">
                                    <i class="fe fe-align-right"></i>
                                </a>
                            </div><!-- SIDE-MENU -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="d-sm-flex">
                            <a href="#" class="nav-link icon search-btn">
                                <i class="fe fe-search"></i>
                            </a>
                            <div class="search-area">
                                <div class="close-btn pull-right"><button class="btn"><i class="fe fe-x"></i></button>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="input-group form-btn">
                                            <div class="input-group-append">
                                                <button class="btn" type="button" id="button-addon3"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search here..."
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- SEARCH -->
                        <div class="dropdown d-md-flex">
                            <a class="nav-link icon full-screen-link nav-link-bg ">
                                <i class="fe fe-maximize fullscreen-button"></i>
                            </a>
                        </div><!-- FULL-SCREEN -->
                        <div class="dropdown d-md-flex notifications">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="notifications-menu">
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-success mr-3">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div class="">
                                            <strong>Someone likes our posts.</strong>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-primary mr-3">
                                            <i class="fa fa-commenting-o"></i>
                                        </div>
                                        <div class="">
                                            <strong>3 New Comments.</strong>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-danger mr-3">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div class="">
                                            <strong>Server Rebooted</strong>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all Notification</a>
                            </div>
                        </div><!-- NOTIFICATIONS -->
                        {{-- <div class="dropdown d-md-flex message">
								<a class="nav-link icon text-center" data-toggle="dropdown">
									<i class="fe fe-mail"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="message-menu">
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('public/assets/images/users/1.jpg')}}"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('public/assets/images/users/12.jpg')}}"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('public/assets/images/users/4.jpg')}}"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('public/assets/images/users/15.jpg')}}"></span>
											<div>
												<strong>Sanderson</strong> New Schedule Realease......
												<div class="small text-muted">
													2 days ago
												</div>
											</div>
										</a>
									</div>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">See all Messages</a>
								</div>
							</div><!-- MESSAGE-BOX --> --}}
                    </div>
                </div>
            </div>
            <!-- /Mobile Header -->

            <!--app-content open-->
            <div class="app-content">
                <div class="side-app">
                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <ol class="breadcrumb">
                            <!-- breadcrumb -->
                            <li class="breadcrumb-item"><a href="{{ url('/admin/home') }}"><small
                                        class="mb-0 breadcrump-tittle">Dashboard</small></a></li>
                            @yield('directory')
                        </ol><!-- End breadcrumb -->
                        @yield('add_btn')
                    </div>
                    @yield('content')
                </div>
            </div>
            <!-- CONTAINER END -->
        </div>

        <!-- SIDE-BAR -->

        <!-- SIDE-BAR CLOSED -->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2021 <a href="#">Eijad.co</a>. Designed by <a href="#"> Sarey.co </a> All rights
                        reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('public/assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <!-- SPARKLINE JS-->
    <script src="{{ asset('public/assets/js/jquery.sparkline.min.js') }}"></script>
    <!-- Moment js-->
    <script src="{{ asset('public/assets/plugins/moment/moment.min.js') }}"></script>
    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('public/assets/js/circle-progress.min.js') }}"></script>
    <!-- SIDE-MENU JS-->
    <script src="{{ asset('public/assets/plugins/sidemenu/sidemenu.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>
    <!-- CUSTOM JS -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
    @yield('jquery')
</body>

</html>
