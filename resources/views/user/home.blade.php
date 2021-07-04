@extends('user.layout.user_layout')

@section('content')
<!-- Banner start -->

<section class="banner" id="banner">
    <div class="text-center">
        <h3 class="b-text">Find The Career You Deserve</h3>
        <p class="p-text">We Help You Get: New Job</p>
        <div class="inline-search-area ml-auto mr-auto isa-3">
            {{ Form:: open(array('url' => ['user/user-search'],'method'=>'post', 'id' => 'user-search-form', 'class' => 'user-search-form')) }}
            {{ csrf_field() }}
            <div class="search-boxs">
                <div class="search-col">
                    <input type="text" id="keyword_search" name="keyword" class="form-control has-icon b-radius" placeholder="Job title or Keywords">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="search-col">
                    <input type="text" id="location_search" name="location" class="form-control has-icon b-radius" placeholder="Location">
                    <div class="ui-widget">
                        <div id="log" style="height: auto; overflow: auto;" class="ui-widget-content"></div>
                    </div>
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="search-col">
                    <input type="text" id="category_search" name="category" class="form-control has-icon b-radius" placeholder="Category">
                    <div class="ui-widget">
                        <div id="log" style="height: auto; overflow: auto;" class="ui-widget-content"></div>
                    </div>
                </div>
                <div class="find">
                    <button class="btn btn-md button-theme btn-search btn-block b-radius">SEARCH</button>
                </div>
            </div>
            {{ Form:: close() }}
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
            <div class="col-sm-12 text-center">
                <h2 class="about-tile">We Can Help With Your Online Resume Today...</h2>
                <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <a href="#" class="btn button-theme btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</div>
<!-- About US end -->

<!-- Job section strat -->
<section class="job-section content-area-box">
    <div class="container">
        <div class="main-title-2">
            <h2>Recent Jobs</h2>
            <a href="#" class="float-right">Browse All Jobs &nbsp; <i class="fa fa-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-12">

                @foreach ($recent_posted_job as $jobs)

                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">

                            @if($jobs->company->profile_image !== null)
                            <img src="{{ config('constants.company_profile') . $jobs->company->profile_image }}" alt="logo">
                            @else
                            <img src="{{asset('front_end/images/recent_logo2.png')}}" alt="logo">
                            @endif




                        </div>
                    </a>
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">{{ $jobs->title }}</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, {{ $jobs->city}}</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="{{ url('user/apply'. '/' . $jobs->unique_id) }}" class="apply-button btn button-theme">View Details</a>
                        </div>
                    </div>
                </div>

                @endforeach
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
</section>
<!-- Reviews end -->
@endsection
@push('scripts')
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        $('.reviews_box').owlCarousel({
            loop: true,
            margin: 0,
            center: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    });
    $("#category_search").keyup(function() {
        $("#category_search").autocomplete({
            source: function(request, response) {
                appendTo: "#category_search",
                $.ajax({
                    url: "{{url('api/search-categories')}}",
                    data: {
                        query: request.term,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        var resp = "";
                        if (data != null) {
                            resp = $.map(data, function(b) {
                                return b.name;
                            });
                        }
                        response(resp);
                    }
                });
            },
            minLength: 2,
            select: function(event, ui) {
                log(ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            },
            close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });
    });
    $("#location_search").keyup(function() {
        $("#location_search").autocomplete({
            source: function(request, response) {
                appendTo: "#category_search",
                $.ajax({
                    url: "{{url('api/search-location')}}",
                    data: {
                        query: request.term,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        var resp = "";
                        resp = $.map(data, function(b) {
                            return b;
                        });
                        response(resp);
                    }
                })
            },
            minLength: 2,
            select: function(event, ui) {
                log(ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            },
            close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });
    });
</script>
@endpush('scripts')