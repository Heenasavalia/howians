<!DOCTYPE html>
<html lang="en">

<head>
    <title>Howains</title>
    <link rel="shortcut icon" href="{{ url('/images/favicon.png') }}" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/main-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/responsive.css') }}">


    <script src="{{asset('front_end/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap-submenu.js')}}"></script>
    <script src="{{asset('front_end/js/daterangepicker.min.js')}}"></script>
    <script src="{{asset('front_end/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_end/js/app.js')}}"></script>
</head>

<body>

@include('frontend.layout.header')

@yield('content')

@include('frontend.layout.footer')

@stack('scripts')
</body>
</html>
