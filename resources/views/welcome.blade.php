<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>
        register page
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
                                <h4>I’m an EMPLOYER</h4>
                                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                <ul>
                                    <li><a href="{{url('/user/login')}}"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS USER</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_regis_right_side_box_wrapper">
                            <div class="jp_regis_right_img_overlay"></div>
                            <div class="jp_regis_right_side_box">
                                <img src="{{asset('landing_page/img/regis_icon2.png')}}" alt="icon">
                                <h4>COMPANY</h4>
                                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
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