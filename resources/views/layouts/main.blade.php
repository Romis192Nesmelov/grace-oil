<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Mar 21 2018 11:43:04 GMT+0000 (UTC)  -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $seo['title'].(isset($title) ? ' '.$title : '') }}</title>
    @foreach($metas as $meta => $params)
        @if ($seo[$meta])
            <meta {{ $params['name'] ? 'name='.$params['name'] : 'property='.$params['property'] }} content="{{ $seo[$meta] }}">
        @endif
    @endforeach

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{ asset('js/libs/bootstrap/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/libs/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/FormStyler/jquery.formstyler.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/JqueryMmenu/jquery.mmenu.all.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('js/libs/fancybox/dist/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_media.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/paginator.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/partner_programs.css') }}" />

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
    <script src="{{ asset('js/custom.js') }}"></script>
</head>
<body>
<div class="loader"><div class="loader_inner"></div></div>
<!-- Yandex.Metrika counter -->
{{--<script type="text/javascript" >--}}
    {{--(function (d, w, c) {--}}
        {{--(w[c] = w[c] || []).push(function() {--}}
            {{--try {--}}
                {{--w.yaCounter46988226 = new Ya.Metrika({--}}
                    {{--id:46988226,--}}
                    {{--clickmap:true,--}}
                    {{--trackLinks:true,--}}
                    {{--accurateTrackBounce:true--}}
                {{--});--}}
            {{--} catch(e) { }--}}
        {{--});--}}

        {{--var n = d.getElementsByTagName("script")[0],--}}
                {{--s = d.createElement("script"),--}}
                {{--f = function () { n.parentNode.insertBefore(s, n); };--}}
        {{--s.type = "text/javascript";--}}
        {{--s.async = true;--}}
        {{--s.src = "https://mc.yandex.ru/metrika/watch.js";--}}

        {{--if (w.opera == "[object Opera]") {--}}
            {{--d.addEventListener("DOMContentLoaded", f, false);--}}
        {{--} else { f(); }--}}
    {{--})(document, window, "yandex_metrika_callbacks");--}}
{{--</script>--}}
{{--<noscript><div><img src="https://mc.yandex.ru/watch/46988226" style="position:absolute; left:-9999px;" alt="" /></div></noscript>--}}

<!-- Page container -->
<div class="page-wrapper">
    <div id="mob-menu-list">
        @include('blocks._main_menu_block')
    </div>
    <div class="mobile-info-block">
        <div class="container">
            <div class="h-adress">{{ $settings['address_'.app()->getLocale()] }}</div>
            @include('blocks._phone_block')
            @include('blocks._button_feedback_block',[
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
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="h-contact-wp">
                        <div class="row-flex">
                            <div class="btn-wp">
                                @include('blocks._phone_block', ['className' => 'phone-header'])
                                <div class="chahge-lang">
                                    <span class="lang-btn"><img src="{{ asset('images/'.(app()->getLocale() == 'ru' ? 'flag.png' : 'flag-amer.png')) }}" alt="flag"><i>{{ ucfirst(app()->getLocale()) }}</i></span>
                                    <ul class="lan-list">
                                        <li data-flag-ico="{{ asset('images/flag.png') }}"><a href="{{ route('change_lang',['lang' => 'ru']) }}"><img src="{{ asset('images/flag.png') }}" alt="flag"><i>RU</i></a></li>
                                        <li data-flag-ico="{{ asset('images/flag-amer.png') }}"><a href="{{ route('change_lang',['lang' => 'en']) }}"><img src="{{ asset('images/flag-amer.png') }}" alt="flag"><i>EN</i></a></li>
                                    </ul>
                                </div>
                                @include('blocks._button_feedback_block')
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
                            @include('blocks._main_menu_block')
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
                            <form id="search-form">
                                <input type="text" placeholder="{{ trans('content.search') }}" title="{{ trans('content.search') }}" id="form-top-search">
                                <button type="submit" class="search-btn"><i class="material-icons">search</i></button>
                            </form>
                        </div>
                        <div class="phone-wp">
                            @include('blocks._phone_block')
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
                            @include('blocks._main_menu_block')
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
                            @include('blocks._phone_block')
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
                                <div class="footer-adress">{{ $settings['address_'.app()->getLocale()] }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                        <div class="f-menu-wp">
                            <ul class="f-menu">
                                <li><a href="{{ route('cooperation1') }}">{{ trans('footer.cooperation') }}</a></li>
                                <li><a href="{{ url('/'.App\Models\SubMenu::find(6)->slug) }}">{{ App\Models\SubMenu::find(6)[app()->getLocale()] }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                        <div class="f-menu-wp">
                            <ul class="f-menu">
{{--                                <li><a href="#">{{ trans('footer.site_map') }}</a></li>--}}
                                <li><a href="{{ route('terms_of_use') }}">{{ trans('footer.user_agreement') }}</a></li>
                                <li><a href="{{ route('vacancies') }}">{{ trans('footer.vacancies') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs hidden-xxs">
                        <div class="f-btn-wp">
                            <div class="foot-phone">
                                @include('blocks._phone_block')
                                @include('blocks._button_feedback_block')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    <!-- Popup -->
    @php ob_start(); @endphp
    @include('blocks._input_block',[
        'inputName' => 'name',
        'inputId' => 'firstName',
        'inputLabel' => trans('content.name').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])
    @include('blocks._textarea_block',[
        'taName' => 'question',
        'taId' => 'question',
        'taLabel' => trans('content.your_question'),
        'useAjax' => true,
    ])

    @include('blocks._popup_block',[
        'popupContent' => ob_get_clean(),
        'popupId' => 'consl_popup',
        'popupRoute' => 'feedback',
        'popupHead' => trans('content.feedback'),
        'useAjax' => true
    ])

    <div class="hidden">
        <div id="thanx_popup" class="popup">
            <h3>{{ Session::has('message') ? Session::get('message') : '' }}</h3>
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
</div>
<!-- /page container -->
<div class="hidden">forVK5807</div>
</body>
</html>