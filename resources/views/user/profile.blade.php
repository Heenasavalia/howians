@include('frontend.layout.header')
<div class="profile_section content-area-box">
    <div class="container">
        <div class="profile_sec">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile_img">
                        <img class="d-block w-100 h-100" src="{{asset('/images/profile_img.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile_data mb-4">
                        <h2>Helen Gamez <span>Graphic Designer</span></h2>
                        <p><i class="fa fa-map-marker"></i> Minibazar, Surat</p>
                        <div class="bookmart_link"><a href="#"><i class="fa fa-bookmark"></i> Bookmark</a> <a class="edit_btn" href="#"><i class="fa fa-pencil"></i> Edit</a></div>
                    </div>
                    <div class="rank_div mb-5">
                        <h3>Rankings</h3>
                        <p>4.5 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                    </div>
                    <ul class="profile_link">
                        <li><a href="#"><i class="fa fa-comment"></i> Send Message</a></li>
                        <li><a href="#"><i class="fa fa-file-text"></i> Report User</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="info_sec mb-5">
                        <h2 class="info_title">WORK</h2>
                        <div class="work_detail">
                            <h3>Adbiz Directory Services Pvt. Ltd.</h3>
                            <p class="blue_color">2 Years Experience | 2019 - 2021</p>
                            <p>4626 Hickory Heights Drive Baltimore, MD 21202</p>
                        </div>
                        <div class="work_detail">
                            <h3>ANP Infotech</h3>
                            <p class="blue_color">3 Years Experience | 2016 - 2019</p>
                            <p>1925 Franklin Avenue Daytona Beach, FL 32114</p>
                        </div>
                    </div>
                    <div class="info_sec mb-4">
                        <h2 class="info_title">Skill</h2>
                        <div class="skill_detail">
                            <ul>
                                <li>Adobe Photoshop</li>
                                <li>Adobe Illustrator</li>
                                <li>Adobe XD</li>
                                <li>Adobe After Effect</li>
                                <li>Corel Draw</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile_tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><i class="fa fa-user"></i> About</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="false"><i class="fa fa-eye"></i> Portfolio</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="personal_details">
                                    <h4>Contact Information</h4>
                                    <ul class="mb-5">
                                        <li><span>Phone : </span><a href="#">+91 12345 67890</a></li>
                                        <li><span>Address : </span>2205 Hill Croft Farm Road Sacramento, CA 95814</li>
                                        <li><span>Email : </span><a href="#">ktadbizthakkar@gmail.com</a></li>
                                        <li><span>Language : </span>English, Hindi, Gujarati</li>
                                    </ul>
                                    <h4>Basic Information</h4>
                                    <ul>
                                        <li><span>Birthday : </span>23 July, 1998</li>
                                        <li><span>Gender : </span>Male</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                                <div class="portfolio_sec">
                                    <ul>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img01.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img02.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img03.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img04.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img05.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img06.jpg')}}" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.layout.footer')
<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');
    });
</script>