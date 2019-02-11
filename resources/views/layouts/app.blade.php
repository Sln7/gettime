<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('img/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('img/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('img/favicon-16x16.png') }}">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset ('vendors/css/base/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset ('vendors/css/base/elisyam-1.5.min.css') }}">
        <link rel="stylesheet" href="{{asset ('css/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{asset ('css/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{asset ('css/owl-carousel/owl.theme.min.css') }}">
        <link rel="stylesheet" href="{{asset ('css/leaflet/leaflet.min.css') }}">
        <link rel="stylesheet" href="{{asset ('css/datatables/datatables.min.css')}}">

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{asset ('img/logo.png') }}" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page bg-2 rounded-widget">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Procurar ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-2">
                                <!-- Toggle Button -->
                                <a id="toggle-btn" href="#" class="menu-btn active ml-2">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <!-- End Toggle -->
                            </div>
                            <div class="col-xl-4 col-3 d-flex justify-content-center">
                                <div class="navbar-header">
                                    <a href="{{ route('home') }}" class="navbar-brand">
                                        <div class="brand-image brand-big">
                                            <img src="{{asset ('img/logo-big.png')}}" alt="logo" class="logo-big">
                                        </div>
                                        <div class="brand-image brand-small">
                                            <img src="{{asset ('img/logo.png')}}" alt="logo" class="logo-small">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-7">
                                <!-- Begin Navbar Menu -->
                                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                                    <!-- Search -->
                                    <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                                    <!-- End Search -->
   
                                    <!-- User -->
                                    <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="{{asset ('img/avatar/avatar-01.jpg')}}" alt="..." class="avatar rounded-circle"></a>
                                        <ul aria-labelledby="user" class="user-size dropdown-menu">
                                            <li class="welcome">
                                                <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                                <img src="{{asset ('img/avatar/avatar-01.jpg')}}" alt="..." class="rounded-circle">
                                            </li>
                                            <li>
                                                <a href="pages-profile.html" class="dropdown-item"> 
                                                    Perfil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item no-padding-bottom"> 
                                                    Configurações
                                                </a>
                                            </li>
                                            <li class="separator"></li>
                                            <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                <i class="ti-power-off"></i>
                                             </a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 @csrf
                                             </form></li>
                                         </a>
                                        </ul>
                                    </li>
                                    <!-- End User -->
                                    <!-- Begin Quick Actions -->
                                    <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li>
                                    <!-- End Quick Actions -->
                                </ul>
                                <!-- End Navbar Menu -->
                            </div>
                        </div>
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="compact-light-sidebar has-shadow">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                        <ul class="list-unstyled">
                            <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i></a>
                                <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                                    <li><a href="app-calendar.html">Calendar</a></li>
                                    <li><a href="app-chat.html">Chat</a></li>
                                    <li><a href="app-mail.html">Mail</a></li>
                                    <li><a href="app-contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('mesa.index') }}"><i class="la la-group "></i></a></li>
                            <li><a href="{{ route('dado.index') }}"><i class="la la-book"></i></a></li>
                            <li><a href="components-widgets.html"><i class="la la-spinner"></i></a></li>

                        </ul>
                        <span class="sidebar-separator"></span>
                        <ul class="list-unstyled">
                            <li><a href="#dropdown-authentication" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i></a>
                                <ul id="dropdown-authentication" class="collapse list-unstyled pt-0">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-login-02.html">Login 02</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-forgot-password.html">Forgot Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-mail-confirm.html">Mail Confirmation</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                        @yield('content')
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="{{asset ('vendors/js/base/jquery.min.js')}}"></script>
        <script src="{{asset ('vendors/js/base/core.min.js')}}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{asset ('vendors/js/countdown/countdown.min.js')}}"></script>
        <script src="{{asset ('vendors/js/nicescroll/nicescroll.min.js')}}"></script>
        <script src="{{asset ('vendors/js/noty/noty.min.js')}}"></script>
        <script src="{{asset ('vendors/js/chart/chart.min.js')}}"></script>
        <script src="{{asset ('vendors/js/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset ('vendors/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset ('vendors/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset ('vendors/js/leaflet/leaflet.min.js')}}"></script>
        <script src="{{asset ('vendors/js/app/app.min.js')}}"></script>
        <script src="{{asset ('vendors/js/datatables/datatables.min.js')}}"></script>
        <script src="{{asset ('vendors/js/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset ('vendors/js/datatables/jszip.min.js')}}"></script>
        <script src="{{asset ('vendors/js/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset ('vendors/js/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset ('vendors/js/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset ('vendors/js/datatables/buttons.print.min.js')}}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{asset ('js/dashboard/db-clean.js')}}"></script>
        <script src="{{asset ('js/pages/coming-soon.js')}}"></script>
        <script src="{{asset ('js/components/tables/tables.js')}}"></script>

        <!-- End Page Snippets -->
    </body>
</html>