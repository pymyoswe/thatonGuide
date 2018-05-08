<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('himu/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('himu/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('himu/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('himu/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('himu/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('himu/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('himu/images/ico/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('himu/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('himu/')}}images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('himu/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('himu/images/ico/apple-touch-icon-57-precomposed.png')}}">

    @yield('style')
</head>
<body>

    @include('layouts.preLoder')

    @include('layouts.navBar')

    @yield('content')

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{asset('himu/js/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{asset('himu/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('himu/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('himu/js/smoothscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('himu/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('himu/js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('himu/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('himu/js/main.js')}}"></script>

    @yield('script')
</body>
</html>
