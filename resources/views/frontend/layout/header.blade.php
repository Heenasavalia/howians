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
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/main-style.css') }}">


    <script src="{{asset('front_end/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap-submenu.js')}}"></script>
    <script src="{{asset('front_end/js/daterangepicker.min.js')}}"></script>
    <script src="{{asset('front_end/js/app.js')}}"></script>
</head>

<body>
    <div id="wrapper" class="wrapper">
        <div class="page_loader"></div>
        <!-- Main header start -->
        <header class="main-header header-transparent sticky-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand logo" href="{{url('/home')}}">
                        <img src="{{asset('front_end/images/logo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav header-ml">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">JOB</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PLAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ni-2">
                                <a class="nav-link btn btn-md button-theme" href="login.html">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item ni-2">
                                <a class="nav-link deffold" href="#">
                                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Main header end -->
    </div>
</body>

</html>