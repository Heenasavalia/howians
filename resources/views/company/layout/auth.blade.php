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
    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('user/css/user_registration.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
{{--    <nav class="navbar navbar-default navbar-static-top">--}}
{{--        <div class="container">--}}
{{--            <div class="navbar-header">--}}

{{--                <!-- Collapsed Hamburger -->--}}
{{--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--                    <span class="sr-only">Toggle Navigation</span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                </button>--}}

{{--                <!-- Branding Image -->--}}
{{--                <a class="navbar-brand" href="{{ url('/superadmin') }}">--}}
{{--                    {{ config('app.name', 'Laravel Multi Auth Guard') }}: Superadmin--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="nav navbar-nav">--}}
{{--                    &nbsp;--}}
{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="nav navbar-nav navbar-right">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @if (Auth::guest())--}}
{{--                        <li><a href="{{ url('/superadmin/login') }}">Login</a></li>--}}
{{--                        <li><a href="{{ url('/superadmin/register') }}">Register</a></li>--}}
{{--                    @else--}}
{{--                        <li class="dropdown">--}}
{{--                            <a href="JavaScript:Void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <ul class="dropdown-menu" role="menu">--}}
{{--                                <li>--}}
{{--                                    <a href="{{ url('/superadmin/logout') }}"--}}
{{--                                        onclick="event.preventDefault();--}}
{{--                                                 document.getElementById('logout-form').submit();">--}}
{{--                                        Logout--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ url('/superadmin/logout') }}" method="POST" style="display: none;">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                    </form>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

@yield('content')
<script type="text/javascript" src="{{ asset('company/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('company/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

<script type="text/javascript" src="{{ asset('company/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<script type="text/javascript" src="{{ asset('company/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/assets/js/common-pages.js')}}"></script>
<!-- Scripts -->
{{--    <script src="/js/app.js"></script>--}}
</body>
</html>
