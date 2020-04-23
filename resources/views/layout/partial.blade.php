<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=" width=device-width, initial-scale=1">
    <meta name="description" content="A collection of well grouped photo arts. Copyright © 2020. Designed by Emmanuel Asaber">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>@yield('title') | Lashpixel</title>
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116463723-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-116463723-1');
    </script>

</head>

<body>
    <!-- Page Preloader -->
    <div id="Lfa-page-loading" class="pozo-pageloading">
        <div class="pozo-pageloading-inner"> <img src="{{ URL::asset('images/logo.png') }}" class="logo" alt=""> </div>
    </div>

    <div id="pozo-page-wrapper">
        <!-- Lines -->
        <div class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </div>
        <!-- Header -->
        <header>
            <div class="container pozo-navbar-container">
                <div class="pozo-navigation-wrap pozo-start-header start-style">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <nav class="navbar navbar-expand-md navbar-light">
                                    <!-- Logo -->
                                    <a class="navbar-brand animate-box" data-animate-effect="fadeInUp" href="{{URL::to('/')}}"> <img src="images/logo.png" class="logo" alt=""> </a>
                                    <!-- Menu -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                    <div class="collapse navbar-collapse animate-box" data-animate-effect="fadeInUp" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                                            <li class="nav-item pl-md-0 ml-0 ml-md-4 active"> <a class="nav-link" href="{{URL::to('/')}}">Home</a></li>
                                            <li class="nav-item pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{URL::to('about')}}">About</a></li>
                                            <li class="nav-item pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{URL::to('albums')}}">Albums</a></li>
                                            <li class="nav-item pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{URL::to('contact')}}">Contact</a> </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Slider -->
        @yield('slider')
        <!-- Gallery -->
        @yield('gallery')
        <!-- Footer -->
        <footer>
            <div class="container pozo-footer-container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="pozo-social-icons">
                            <li class="pozo-social-icons-item">
                                <a class="pozo-social-link" href="https://www.facebook.com/lashpixel"> <span class="pozo-social-icon fa fa-facebook-f"></span> </a>
                            </li>
                            <li class="pozo-social-icons-item">
                                <a class="pozo-social-link" href="https://www.twitter.com/lashpixel"> <span class="pozo-social-icon fa fa-twitter"></span> </a>
                            </li>
                            <li class="pozo-social-icons-item">
                                <a class="pozo-social-link" href="https://www.instagram.com/lashpixel/"> <span class="pozo-social-icon fa fa-instagram"></span> </a>
                            </li>
                            <li class="pozo-social-icons-item">
                                <a class="pozo-social-link" href="https://www.behance.net/lashpixel"> <span class="pozo-social-icon fa fa-behance"></span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="pozo-copyright">© 2020 <span>Lashpixel</span> All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Js -->
    @yield('pre-script')
    @yield('post-script')
    <script src="{{ URL::asset('js/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/jquery.fancybox.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>