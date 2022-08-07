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

    {{--<link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{ asset('css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">--}}

    <!-- Core JS files -->
    {{--<script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>--}}
</head>
<body>
<!-- Page container -->
@yield('content')
<!-- /page container -->

<!-- Footer -->
<!-- /footer -->

</body>
</html>
