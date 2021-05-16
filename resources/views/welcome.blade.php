<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="shortcut icon" href="{{ url('/images/favicon.png') }}" type="image/png" />
    <title>Register | Howains</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="{{asset('landing_page/css/bootstrap.min.css')}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('landing_page/css/regi.css')}}">
    <script src="{{asset('landing_page/js/jquery.min.js')}}"></script>
    <script src="{{asset('landing_page/js/popper.min.js')}}"></script>
    <script src="{{asset('landing_page/js/bootstrap.min.js')}}"></script>
    <script src='regi.js'></script>
</head>
<body>
    <section class="register_beg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_register_section_main_wrapper">
                        <div class="jp_regis_left_side_box_wrapper">
                            <div class="jp_regis_left_side_box">
                                <img src="{{asset('landing_page/img/regis_icon.png')}}" alt="icon">
                                <h4>I’m Candidate</h4>
                                <p>Easiest Way To Find Your Dream Job<br> job offers, searching for best Companies...</p>
                                <ul>
                                    <li><a href="{{url('/user/login')}}"><i class="fa fa-plus-circle"></i> &nbsp;FIND A JOB</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_regis_right_side_box_wrapper">
                            <div class="jp_regis_right_img_overlay"></div>
                            <div class="jp_regis_right_side_box">
                                <img src="{{asset('landing_page/img/regis_icon2.png')}}" alt="icon">
                                <h4>COMPANY</h4>
                                <p>Hire Skilled People, best of them<br> job offers, searching for candidate...</p>
                                <ul>
                                    <li><a href="{{url('company/login')}}"><i class="fa fa-plus-circle"></i> &nbsp;POST A JOB</a></li>
                                </ul>
                            </div>
                            <div class="jp_regis_center_tag_wrapper">
                                    <p>OR</p>
                                </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>