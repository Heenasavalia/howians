<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .pac-container:after {
            /* Disclaimer: not needed to show 'powered by Google' if also a Google Map is shown */
            background-image: none !important;
            height: 0px;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ url('/images/favicon.png') }}" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin">
    <meta name="author" content="#">
    <!-- Favicon -->

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Howians - Company</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/main-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/user_registration.css') }}">


    <!-- Scripts -->
    <script src="{{asset('front_end/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap-submenu.js')}}"></script>
    <script src="{{asset('front_end/js/daterangepicker.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('company/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('company/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{ asset('company/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{ asset('company/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/assets/js/common-pages.js')}}"></script>
    <script src="{{asset('front_end/js/app.js')}}"></script>

    <script>
        window.Laravel = <?php echo json_encode([
                                'csrfToken' => csrf_token(),
                            ]); ?>
    </script>
</head>

<body class="inner-page-section">
    @include('frontend.layout.header')

    @yield('content')

    @include('frontend.layout.footer')
</body>

</html>