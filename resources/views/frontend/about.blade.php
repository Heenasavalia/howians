@extends('frontend.layout.front_layout')
@section('content')
<!-- Banner start -->
<section class="breadcrumb">
    <div class="banner-img"><img class="d-block w-100 h-100" src="{{asset('front_end/images/home_about_img.jpg')}}" alt="banner"></div>
    <div class="container inner-banner">
        <h2>About Us</h2>
        <ul>
            <li><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
            <li>About us</li>
        </ul>
    </div>
</section>
<!-- banner end -->

<!-- About content start -->
<section class="about_content content-area-box">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>About Us</h2>
                <h5>It is a long established fact that a reade.</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been the industry's standard dummy text ever 1500s, when an unknown printer took a galley of type and to make a type specimen book.</p>
                <p>It has survived not only five centuries, but also the leap into typesetting, remaining essentially unchanged. There are of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour, or randomised don't look even slightly believable. If you are going to use a Ipsum, you need to be sure there isn't anything embarrassing in the middle of text.</p>
                <a href="{{url('/contact')}}" class="btn button-theme btn-lg">Contact Us</a>
            </div>
            <div class="col-md-6">
                <div class="about-img"><img src="{{asset('front_end/images/abouyt-right-img.png')}}" alt=""></div>
            </div>
        </div>
    </div>
</section>
<!-- About content end -->

<!-- How Work start -->
<section class="how_works content-area-box" style="background-color: #eef2f8;">
    <div class="container">
        <div class="main-title">
            <h2>Our Advantages</h2>
        </div>
        <div class="slick-slider-area">
            <div class="row">
                <div class="col-md-4">
                    <div class="how_inner">
                        <div class="media mb-3">
                            <img src="{{asset('front_end/images/icon04.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content-box text-center">
                            <h3><a href="#">Extensive Database</a></h3>
                            <p>Create an account and access your saved settings on any device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_inner">
                        <div class="media mb-3">
                            <img src="{{asset('front_end/images/icon05.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content-box text-center">
                            <h3><a href="#">Dedicated Team</a></h3>
                            <p>Don't just find. Be found. Put your CV in front of great employers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_inner">
                        <div class="media mb-3">
                            <img src="{{asset('front_end/images/icon06.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content-box text-center">
                            <h3><a href="#">Additional Support</a></h3>
                            <p>Your next career move starts here. Choose Job from thousands of companies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How Work end -->

<!-- Job Vacancies start -->
<section class="job_vacancies_sec content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="job_icon mb-3"><img src="{{asset('front_end/images/icon1.png')}}" alt=""></div>
                <h2 class="counter">58249</h2>
                <p>JOB VACANCIES</p>
            </div>
            <div class="col-md-3">
                <div class="job_icon mb-3"><img src="{{asset('front_end/images/icon2.png')}}" alt=""></div>
                <h2 class="counter">246K</h2>
                <p>HAPPY CLIENTS</p>
            </div>
            <div class="col-md-3">
                <div class="job_icon mb-3"><img src="{{asset('front_end/images/icon3.png')}}" alt=""></div>
                <h2 class="counter">1200</h2>
                <p>EMPLOYERS</p>
            </div>
            <div class="col-md-3">
                <div class="job_icon mb-3"><img src="{{asset('front_end/images/icon4.png')}}" alt=""></div>
                <h2 class="counter">320K</h2>
                <p>RESUMES</p>
            </div>
        </div>
    </div>
</section>
<!-- Job Vacancies end -->

<!-- Our Recent News start -->
<section class="our_recent_news_sec content-area-box">
    <div class="container">
        <div class="main-title">
            <h2>Our Recent News</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about_news_box">
                    <div class="news_img">
                        <img src="{{asset('front_end/images/about_half_img1.jpg')}}" alt="">
                        <div class="news_date">01<span>May</span></div>
                    </div>
                    <div class="news_details">
                        <div class="our_recent_title">| Properties</div>
                        <h3 class="news_title">Footprints in Time is perfect House in Kurashiki</h3>
                        <a href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_news_box">
                    <div class="news_img">
                        <img src="{{asset('front_end/images/about_half_img2.jpg')}}" alt="">
                        <div class="news_date">01<span>May</span></div>
                    </div>
                    <div class="news_details">
                        <div class="our_recent_title">| Properties</div>
                        <h3 class="news_title">Footprints in Time is perfect House in Kurashiki</h3>
                        <a href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Recent News end -->
@endsection