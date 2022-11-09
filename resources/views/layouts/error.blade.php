<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Mar 21 2018 11:43:04 GMT+0000 (UTC)  -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Error</title>

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/libs/bootstrap/css/bootstrap-grid.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('js/libs/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/FormStyler/jquery.formstyler.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('js/libs/JqueryMmenu/jquery.mmenu.all.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('js/libs/OwlCarousel/owl.carousel.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('js/libs/fontawesome/css/font-awesome.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('js/libs/fancybox/dist/jquery.fancybox.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_media.css') }}" />

    {{--<script src="{{ asset('js/libs/modernizr/modernizr.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/jquery/jquery-1.11.2.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/FormStyler/jquery.formstyler.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/JqueryMmenu/jquery.mmenu.all.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/OwlCarousel/owl.carousel.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/fancybox/dist/jquery.fancybox.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/maskedinput/jquery.maskedinput.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/tabs/tabs.jquery.js') }}"></script>--}}
    {{--<script src="{{ asset('js/libs/lazyload.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/common.js') }}"></script>--}}
</head>
<body>
<!-- Page container -->
<div class="page-wrapper">
    <header>
        <div class="h-top">
            <div class="container">
                <div class="row-flex">
                    <div class="logo-wp">
                        <div class="logo">
                            <a href="#">
                                <img src="{{ asset('images/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-bot">
            <div class="container">
                <div class="row-flex">
                    <div class="h-menu-wp">
                        <div class="h-menu">
                        </div>
                        <a href="#mob-menu-list">
                            <div class="nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main home">
        <div class="container">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
