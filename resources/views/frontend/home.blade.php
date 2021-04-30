@include('frontend.layout.header')

<!-- Banner start -->
<section class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <div class="banner-img"><img class="d-block w-100 h-100" src="{{asset('front_end/images/banner.jpg')}}" alt="banner"></div>
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container">
                        <div class="banner-inner mt-60">
                            <div class="text-center">
                                <h3 class="b-text">Find The Career You Deserve</h3>
                                <p class="p-text">We Help You Get: New Job</p>
                                <div class="inline-search-area ml-auto mr-auto isa-3">
                                    <div class="search-boxs">
                                        <div class="search-col">
                                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="Job title or Keywords">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="search-col">
                                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="location">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="search-col">
                                            <select class="selectpicker search-fields" name="Choose Categories">
                                                <option>Choose Categories</option>
                                                <option>Choose Categories1</option>
                                                <option>Choose Categories2</option>
                                            </select>
                                        </div>
                                        <div class="find">
                                            <button class="btn btn-md button-theme btn-search btn-block b-radius">SEARCH</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- Popular categories strat -->
<section class="popular-categories content-area-box">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h2>Popular Categories</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-code"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Web Developer</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-bullhorn"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Digital Marketing</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-graduation-cap"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Education Training</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-line-chart"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Accounting / Finance</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-user"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Human Resource</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-paint-brush"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Design & Graphics</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Writing / Translations</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-heartbeat"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Health Care</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="fa fa-car"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Automotive Jobs</h5>
                        <span>(656 Jobs)</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center mt-4">
                <a href="#" class="btn button-theme btn-lg">Browse all category</a>
            </div>
        </div>
    </div>
</section>
<!-- Popular categories end -->

<!-- About US strat -->
<div class="about_section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2 class="about-tile">We Can Help With Your Online Resume Today...</h2>
                <p class="mb-4">Huge community of designers, developers and creatives ready for your project. Bring to the table win-win survival strategies to ensure proactive domination going forward.</p>
                <a href="#" class="btn button-theme btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</div>
<!-- About US end -->

<!-- Job section strat -->
<section class="job-section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-2">
                    <h2>Recent Jobs</h2>
                    <a href="#" class="float-right">Browse All Jobs &nbsp; <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="{{asset('front_end/images/recent_logo1.png')}}" alt="logo">
                        </div>
                    </a>
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">Web Developer</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, Surat</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="{{asset('front_end/images/recent_logo2.png')}}" alt="logo">
                        </div>
                    </a>
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">Graphics Designer</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, Surat</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="{{asset('front_end/images/recent_logo3.png')}}" alt="logo">
                        </div>
                    </a>
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">.Net Developer</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, Surat</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="{{asset('front_end/images/recent_logo4.png')}}" alt="logo">
                        </div>
                    </a>
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">React and Native Developer</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, Surat</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media mb-0">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="{{asset('front_end/images/recent_logo5.png')}}" alt="logo">
                        </div>
                    </a>
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">Accountant</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, Surat</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media mb-0">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="{{asset('front_end/images/recent_logo6.png')}}" alt="logo">
                        </div>
                    </a>
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">iOS developer</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, Surat</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Job section end -->

<!-- How Work start -->
<section class="how_works content-area-box">
    <div class="container">
        <div class="main-title">
            <h2>How It Works?</h2>
        </div>
        <div class="slick-slider-area">
            <div class="row">
                <div class="col-md-4">
                    <div class="how_inner">
                        <div class="media mb-3">
                            <img src="{{asset('front_end/images/icon01.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content-box text-center">
                            <h3><a href="#">Create Account</a></h3>
                            <p>Create an account and access your saved settings on any device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_inner">
                        <div class="media mb-3">
                            <img src="{{asset('front_end/images/icon02.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content-box text-center">
                            <h3><a href="#">Find Your Vacancy</a></h3>
                            <p>Don't just find. Be found. Put your CV in front of great employers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_inner">
                        <div class="media mb-3">
                            <img src="{{asset('front_end/images/icon03.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content-box text-center">
                            <h3><a href="#">Get A Job</a></h3>
                            <p>Your next career move starts here. Choose Job from thousands of companies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How Work end -->

<!-- Reviews start -->
<section class="reviews_ratings content-area-box">
    <div class="container">
        <div class="main-title">
            <h2>Reviews & Ratings</h2>
        </div>
        <div class="slick-slider-area">
            <div class="row">
                <div class="reviews_box owl-carousel owl-theme">
                    <div class="reviews_inner">
                        <div class="content-box text-center">
                            <i class="fa fa-quote-left"></i>
                            <p>The release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="reviews_content text-center">
                            <div class="reviews_img">
                                <img src="{{asset('front_end/images/photo_img01.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <h2>Cristen R. Ridenhour</h2>
                            <p>Ui/UX designer</p>
                        </div>
                    </div>
                    <div class="reviews_inner">
                        <div class="content-box text-center">
                            <i class="fa fa-quote-left"></i>
                            <p>The release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="reviews_content text-center">
                            <div class="reviews_img">
                                <img src="{{asset('front_end/images/photo_img02.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <h2>William L. Dearman</h2>
                            <p>Marketing Manager</p>
                        </div>
                    </div>
                    <div class="reviews_inner">
                        <div class="content-box text-center">
                            <i class="fa fa-quote-left"></i>
                            <p>The release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="reviews_content text-center">
                            <div class="reviews_img">
                                <img src="{{asset('front_end/images/photo_img03.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <h2>Randolph M. Belli</h2>
                            <p>Accoutant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Reviews end -->

@include('frontend.layout.footer')