@include('frontend.layout.header')
<!-- Banner start -->
<section class="breadcrumb">
    <div class="banner-img"><img class="d-block w-100 h-100" src="{{asset('front_end/images/job_detail_banner.jpg')}}" alt="banner"></div>
    <div class="container inner-banner">
        <h2>UI / UX Designer</h2>
    </div>
</section>
<!-- banner end -->

<!-- Candidate section start -->
<div class="candidate-section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Main item start -->
                <div class="main-item mb-4 white_box">
                    <div class="company-logo">
                        <img src="{{asset('front_end/images/job-detail-logo.png')}}" alt="avatar">
                    </div>
                    <div class="description">
                        <h4 class="title"><a href="#">UI/UX Designer</a> <span class="label">Full Time</span></h4>
                        <div class="candidate-listing-footer">
                            <ul>
                                <li>IT Company</li>
                                <li><i class="fa fa-map-marker"></i> Varachha, Surat</li>
                                <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- about me start -->
                <div class="about-me mb-4 white_box">
                    <h3>Job Description</h3>
                    <p>It is a long established fact that a reader will beff distracted by vbthe creadable content of a page when looking at its layout. The pointf of using Lorem Ipsum is that it has ahf mcore or-lgess normal distribution of letters, as opposed to using, Content here content here making it look like readable.</p>
                    <h3>Required Knowledge, Skills, and Abilities</h3>
                    <ul>
                        <li>System Software Development</li>
                        <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                        <li>Research and code , libraries, APIs and frameworks</li>
                        <li>Strong knowledge on software development life cycle</li>
                        <li>Strong problem solving and debugging skills</li>
                    </ul>
                    <h3>Education + Experience</h3>
                    <ul>
                        <li>3 or more years of professional design experience</li>
                        <li>Direct response email experience</li>
                        <li>Ecommerce website design experience</li>
                        <li>Familiarity with mobile and web apps preferred</li>
                        <li>Experience using Invision a plus</li>
                    </ul>
                </div>
                <div class="job_map white_box">
                    <h3>Job Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14878.299962924151!2d72.84949003600268!3d21.209036078766346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f02397941bd%3A0xf103a23101102563!2sVarachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1620581104542!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right-2">
                    <div class="apply_sec mb-4">
                        <form method="GET">
                            <div class="form-group mb-0">
                                <button class="btn button-theme btn-lg">Apply Now!</button>
                            </div>
                        </form>
                    </div>
                    <!-- Job overview start -->
                    <div class="job-overview white_box mb-4">
                        <h3 class="sidebar-title">Job Overview</h3>
                        <ul>
                            <li>Posted date :<span>12 Aug 2019</span></li>
                            <li>Location :<span>New York</span></li>
                            <li>Vacancy :<span>02</span></li>
                            <li>Salary :<span>20,000 - 30,000</span></li>
                            <li>Application date :<span>12 Aug 2019</span></li>
                            <li>Posted date :<span>12 Sep 2020</span></li>
                        </ul>
                    </div>
                    <!-- Quick contact start -->
                    <div class="keywords_sec white_box mb-4">
                        <h3 class="sidebar-title"><i class="fa fa-tags"></i> Trending Keywords</h3>
                        <ul>
                            <li>Developer</li>
                            <li>Designer</li>
                            <li>Software</li>
                            <li>Manager</li>
                            <li>UI / UX</li>
                            <li>Marketing</li>
                            <li>Career</li>
                            <li>Business</li>
                        </ul>
                    </div>
                    <!-- Quick contact start -->
                    <div class="information_sec">
                        <h3 class="sidebar-title">Company Information</h3>
                        <ul>
                            <li><strong>Name :</strong> Trion Technology</li>
                            <li><strong> Web :</strong> <a href="#">www.trionTechnology.com</a></li>
                            <li><strong>Email  :</strong> <a href="#">triontechnology@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Candidate section end -->

@include('frontend.layout.footer')