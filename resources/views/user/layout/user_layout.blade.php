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
    <div class="page_loader"></div>

<!-- Main header start -->
@include('user.layout.header')

@yield('content')

@include('user.layout.footer')
<!-- Footer end -->

<!-- <script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/moment.min.js"></script>
<script  src="js/daterangepicker.min.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<script  src="js/ie10-viewport-bug-workaround.js"></script> -->
@stack('scripts')
</body>

</html>
