<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Mar 21 2018 11:43:04 GMT+0000 (UTC)  -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $seo['title'] }}</title>
    @foreach($metas as $meta => $params)
        @if ($seo[$meta])
            <meta {{ $params['name'] ? 'name='.$params['name'] : 'property='.$params['property'] }} content="{{ $seo[$meta] }}">
        @endif
    @endforeach

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{ asset('css/font/fonts/Raleway/Raleway.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font/fonts/OpenSans/OpenSans.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font/fonts/MaterialIcons/MaterialIcons.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/libs/bootstrap/css/bootstrap-grid.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('js/libs/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/FormStyler/jquery.formstyler.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/JqueryMmenu/jquery.mmenu.all.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/fancybox/dist/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_media.css') }}" />

    <script src="{{ asset('js/libs/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/libs/FormStyler/jquery.formstyler.min.js') }}"></script>
    <script src="{{ asset('js/libs/JqueryMmenu/jquery.mmenu.all.min.js') }}"></script>
    <script src="{{ asset('js/libs/OwlCarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/libs/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/libs/maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/libs/tabs/tabs.jquery.js') }}"></script>
    <script src="{{ asset('js/libs/lazyload.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>

    <script src="{{ asset('js/feedback.js') }}"></script>
</head>
<body>
<!-- Page container -->
<div class="page-wrapper">
    <div id="mob-menu-list">
        @include('layouts._main_menu_block')
    </div>
    <div class="mobile-info-block">
        <div class="container">
            <div class="h-adress">{{ $settings['address_'.App::getLocale()] }}</div>
            @include('layouts._phone_block')
            @include('layouts._button_feedback_block',[
                'btnHref' => '#consl_popup',
                'btnText' => trans('content.feedback')
            ])
        </div>
        <div class="toggle-btn"><i class="material-icons">keyboard_arrow_down</i></div>
    </div>
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
                    <div class="h-contact-wp">
                        <div class="row-flex">
                            <div class="btn-wp">
                                @include('layouts._phone_block', ['className' => 'phone-header'])
                                <div class="chahge-lang">
                                    <span class="lang-btn"><img src="{{ asset('images/'.(App::getLocale() == 'ru' ? 'flag.png' : 'flag-amer.png')) }}" alt="flag"><i>{{ ucfirst(App::getLocale()) }}</i></span>
                                    <ul class="lan-list">
                                        <li data-flag-ico="{{ asset('images/flag.png') }}"><a href="{{ url('/change-lang?lang=ru') }}"><img src="{{ asset('images/flag.png') }}" alt="flag"><i>RU</i></a></li>
                                        <li data-flag-ico="{{ asset('images/flag-amer.png') }}"><a href="{{ url('/change-lang?lang=en') }}"><img src="{{ asset('images/flag-amer.png') }}" alt="flag"><i>EN</i></a></li>
                                    </ul>
                                </div>
                                @include('layouts._button_feedback_block')
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
            </div>
        </div>
        <div class="h-bot">
            <div class="container">
                <div class="row-flex">
                    <div class="h-menu-wp">
                        <div class="h-menu">
                            @include('layouts._main_menu_block')
                        </div>
                        <a href="#mob-menu-list">
                            <div class="nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div class="header-search-wp">
                        <div class="search-inp">
                            <form action="#">
                                <input type="text" placeholder="Поиск" title="Поиск" id="form-top-search">
                                <button type="submit" class="search-btn"><i class="material-icons">search</i></button>
                            </form>
                        </div>
                        <div class="phone-wp">
                            @include('layouts._phone_block')
                        </div>
                        <a class="search-btn-trigger"><i class="material-icons">search</i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-fix">
        <div class="h-bot">
            <div class="container">
                <div class="row-flex">
                    <div class="h-menu-wp">
                        <div class="h-menu">
                            @include('layouts._main_menu_block')
                        </div>
                        <a href="#mob-menu-list">
                            <div class="nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div class="header-search-wp">
                        <div class="search-inp">
                            <form action="#">
                                <input type="text" placeholder="{{ trans('content.search') }}" title="{{ trans('content.search') }}" id="form-top-search">
                                <button type="submit" class="search-btn"><i class="material-icons">search</i></button>
                            </form>
                        </div>
                        <div class="phone-wp">
                            @include('layouts._phone_block')
                        </div>
                        <a class="search-btn-trigger"><i class="material-icons">search</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="row row-flex">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 col-xxs">
                        <div class="logo-foot-wp">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{ asset('images/logo-footer.png') }}" alt="logo">
                                </a>
                            </div>
                            <div class="footer-info">
                                <div class="rights">{{ trans('content.company_name') }}</div>
                                <div class="footer-adress">{{ $settings['address_'.App::getLocale()] }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                        <div class="f-menu-wp">
                            <ul class="f-menu">
                                <li><a href="#">{{ trans('footer.grace_partner') }}</a></li>
                                <li><a href="#">{{ trans('footer.how_to_become_a_dealer') }}</a></li>
                                <li><a href="#">{{ trans('footer.industry_solutions') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                        <div class="f-menu-wp">
                            <ul class="f-menu">
                                <li><a href="#">{{ trans('footer.site_map') }}</a></li>
                                <li><a href="{{ url('/polzovatelskoe-soglashenie') }}">{{ trans('footer.user_agreement') }}</a></li>
                                <li><a href="#">{{ trans('footer.vacancies') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs hidden-xxs">
                        <div class="f-btn-wp">
                            <div class="foot-phone">
                                @include('layouts._phone_block')
                                @include('layouts._button_feedback_block')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    <!-- Popups -->
    <?php ob_start(); ?>
    @include('layouts._input_block',[
        'inputName' => 'name',
        'inputId' => 'firstName',
        'inputLabel' => trans('content.name').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])
    @include('layouts._textarea_block',[
        'taName' => 'question',
        'taId' => 'question',
        'taLabel' => trans('content.your_question'),
        'useAjax' => true,
    ])

    @include('layouts._popup_block',[
        'popupId' => 'consl_popup',
        'popupUri' => 'feedback',
        'popupHead' => trans('content.feedback'),
        'popupContent' => ob_get_clean()
    ])

    <div class="hidden">
        <div id="thanx_popup" class="popup">
            <h1>{{ Session::has('message') ? Session::get('message') : '' }}</h1>
        </div>
        @if (Session::has('message'))
            <script>
                $(document).ready(function ($) {
                    $.fancybox.open({
                        src: '#thanx_popup',
                        type: 'inline'
                    });
                });
            </script>
        @endif
    </div>
    <!-- /popups -->

    <div class="loader">
        <div class="loader_inner"></div>
    </div>
</div>
<!-- /page container -->
</body>
</html>
