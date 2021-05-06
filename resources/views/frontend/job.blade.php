@include('frontend.layout.header')
<!-- Banner start -->
<section class="breadcrumb">
    <div class="banner-img"><img class="d-block w-100 h-100" src="{{asset('front_end/images/job_banner.jpg')}}" alt="banner"></div>
    <div class="container inner-banner">
        <h2>Job</h2>
        <ul>
            <li><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
            <li>Job</li>
        </ul>
    </div>
</section>
<!-- banner end -->

<!-- Candidate listing section start -->
<div class="candidate-listing-section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="advanced-search">
                        <form method="GET" class="informeson">
                            <div class="form-group">
                                <label class="sr-only" for="textsearch2">Enter Keywords</label>
                                <input type="text" class="form-control" id="textsearch2" placeholder="Enter Keywords">
                            </div>
                            <h3>Location</h3>
                            <div class="form-group">
                                <select class="search-fields" name="Choose Categories">
                                    <option>Choose Location</option>
                                    <option>Choose Location1</option>
                                    <option>Choose Location2</option>
                                </select>
                            </div>
                            <div class="sider_box">
                                <a class="show-more-options" data-toggle="collapse" data-target="#options-content4"><i class="fa fa-plus-circle"></i> Experience</a>
                                <div id="options-content4" class="collapse">
                                    <div class="checkbox">
                                        <input id="experience1" type="checkbox">
                                        <label for="experience1">0 - 1 Yrs</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="experience2" type="checkbox">
                                        <label for="experience2">2 - 3 Yrs</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="experience3" type="checkbox">
                                        <label for="experience3">4 - 5 Yrs</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="experience4" type="checkbox">
                                        <label for="experience4">6 - 7 Yrs</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="experience5" type="checkbox">
                                        <label for="experience5">8 Yrs and above</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sider_box">
                                <a class="show-more-options" data-toggle="collapse" data-target="#options-content4"><i class="fa fa-plus-circle"></i> Job Type</a>
                                <div id="options-content4" class="collapse">
                                    <div class="checkbox">
                                        <input id="job_type1" type="checkbox">
                                        <label for="job_type1">Freelance</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="job_type2" type="checkbox">
                                        <label for="job_type2">Full Time</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="job_type3" type="checkbox">
                                        <label for="job_type3">Internship</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="job_type4" type="checkbox">
                                        <label for="job_type4">Part Time</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="job_type5" type="checkbox">
                                        <label for="job_type5">Temporary</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-7 d-flex align-items-center">
                            <p>Showing 1 to 7 of 13 entries</p>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-5 d-flex justify-content-end">
                            <div class="sorting-options2">
                                <select class="search-fields" name="default-order">
                                    <option>Relevance</option>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                    <option>Random</option>
                                </select>
                            </div>
                            <div class="sorting-options">
                                <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="#" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candidate box start -->
                <div class="candidate-item media">
                    <a class="icon" href="#">
                        <div class="user-logo">
                            <img src="{{asset('front_end/images/job-logo1.png')}}" alt="avatar">
                        </div>
                    </a>
                    <div class="media-body align-self-center">
                        <h4><a href="#">John Pitarshon</a></h4>
                        <div class="candidate-listing">
                            <ul>
                                <li><i class="flaticon-work"></i> Web Developer</li>
                                <li><i class="flaticon-pin"></i> New York City</li>
                                <li><i class="flaticon-mail"></i> info@themevessel.com</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button">Shortlist</a>
                        </div>
                    </div>
                </div>
                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Candidate listing section start -->

@include('frontend.layout.footer')