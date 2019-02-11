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
        
                <!-- End Left Sidebar -->
                @yield('content')
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="{{asset ('vendors/js/base/jquery.min.js')}}"></script>
        <script src="{{asset ('vendors/js/base/core.min.js')}}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{asset ('vendors/js/nicescroll/nicescroll.min.js')}}"></script>
        <script src="{{asset ('vendors/js/noty/noty.min.js')}}"></script>
        <script src="{{asset ('vendors/js/chart/chart.min.js')}}"></script>
        <script src="{{asset ('vendors/js/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset ('vendors/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset ('vendors/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset ('vendors/js/leaflet/leaflet.min.js')}}"></script>
        <script src="{{asset ('vendors/js/app/app.min.js')}}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{asset ('js/dashboard/db-clean.js')}}"></script>
        <!-- End Page Snippets -->
    </body>
</html>