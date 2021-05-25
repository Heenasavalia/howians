@extends('user.layout.auth')

@section('content')

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>
<div class="container">
    <div class="row">
    @if($data != null)
    @foreach($data as $d)
        <div class="col-md-12">
            <div class="main_div">
                <div class="com_logo"></div>
                <div class="desc">
                    <div class="des_div">
                        <h3>{{$d->company->company_name}}</h3>
                        <p>{{$d->company->address}}</p>
                        <?php $com_id = $d->company->id; ?>
                        
                        <a href="{{url('user/apply-job/'.$com_id.'/'.$d->id)}}"><button>Apply</button></a>
                        <a href="{{url('user/review/'.$com_id.'/'.$d->id)}}"><button>Review</button></a>
                        <a href="{{url('user/company-profile/'.$com_id)}}"><button>Profile View</button></a>
                        <a href="{{url('user/msg-send-mail/'.$com_id)}}"><button>Message / Mail</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @else
    @endif
    </div>
</div>


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
            <div class="col-lg-3 col-md-12 left-listing">
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
            <div class="col-lg-9 col-md-12 right-listing">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 d-flex align-items-center">
                            <p>Showing 1 to 7 of 13 entries</p>
                        </div>
                        <div class="col-lg-6 col-md-5 d-flex justify-content-end align-items-center">
                            <div class="sorting-options2">
                                <select class="search-fields" name="default-order">
                                    <option>Relevance</option>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                    <option>Random</option>
                                </select>
                            </div>
                            <div class="sorting-options">
                                <a href="javascript:void(0);" class="change-view-btn active grid_btn"><i class="fa fa-th-large"></i></a>
                                <a href="javascript:void(0);" class="change-view-btn list_btn"><i class="fa fa-th-list"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candidate box start -->
                <div class="jobs_box">
                    <div class="candidate-item media">
                        <div class="candidate-listing d-flex flex-wrap">
                            <div class="user-logo">
                                <!-- <div class="wishlist-icon"><i class="fa fa-heart-o"></i></div> -->
                                <a class="icon" href="#"><img src="{{asset('front_end/images/job-logo1.png')}}" alt="avatar"></a>
                            </div>
                            <div class="candidate_right">
                                <h4 class="title"><a href="#">Trion Technology</a> <span class="sub_title">Graphic Designer</span> <span class="label">Full Time</span></h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> India <strong>Surat</strong> <i>30 min ago</i></li>
                                </ul>
                            </div>
                            <div class="candidate_label">
                                <ul>
                                    <li>Salary: <strong>$1,200 - $1,800</strong></li>
                                    <li>Position: <strong>12</strong></li>
                                    <li>Experience: <strong>2+ Year</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-right">
                            <p>Openings Postition</p>
                            <h3>Graphic Designer</h3>
                            <a href="#" class="btn button-theme btn-lg apply-button">Apply Now!</a>
                        </div>
                    </div>
                    <div class="candidate-item media">
                        <div class="candidate-listing d-flex flex-wrap">
                            <div class="user-logo">
                                <div class="wishlist-icon"><i class="fa fa-heart-o"></i></div>
                                <a class="icon" href="#"><img src="{{asset('front_end/images/job-logo2.png')}}" alt="avatar"></a>
                            </div>
                            <div class="candidate_right">
                                <h4 class="title"><a href="#">Trion Technology</a> <span class="sub_title">Graphic Designer</span> <span class="label">Full Time</span></h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> India <strong>Surat</strong> <i>30 min ago</i></li>
                                </ul>
                            </div>
                            <div class="candidate_label">
                                <ul>
                                    <li>Salary: <strong>$1,200 - $1,800</strong></li>
                                    <li>Position: <strong>12</strong></li>
                                    <li>Experience: <strong>2+ Year</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-right">
                            <p>Openings Postition</p>
                            <h3>Graphic Designer</h3>
                            <a href="#" class="btn button-theme btn-lg apply-button">Apply Now!</a>
                        </div>
                    </div>
                    <div class="candidate-item media">
                        <div class="candidate-listing d-flex flex-wrap">
                            <div class="user-logo">
                                <!-- <div class="wishlist-icon"><i class="fa fa-heart-o"></i></div> -->
                                <a class="icon" href="#"><img src="{{asset('front_end/images/job-logo3.png')}}" alt="avatar"></a>
                            </div>
                            <div class="candidate_right">
                                <h4><a href="#">Trion Technology</a> <span class="sub_title">Graphic Designer</span> <span class="label">Full Time</span></h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> India <strong>Surat</strong> <i>30 min ago</i></li>
                                </ul>
                            </div>
                            <div class="candidate_label">
                                <ul>
                                    <li>Salary: <strong>$1,200 - $1,800</strong></li>
                                    <li>Position: <strong>12</strong></li>
                                    <li>Experience: <strong>2+ Year</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-right">
                            <p>Openings Postition</p>
                            <h3>Graphic Designer</h3>
                            <a href="#" class="btn button-theme btn-lg apply-button">Apply Now!</a>
                        </div>
                    </div>
                    <div class="candidate-item media">
                        <div class="candidate-listing d-flex flex-wrap">
                            <div class="user-logo">
                                <div class="wishlist-icon"><i class="fa fa-heart-o"></i></div>
                                <a class="icon" href="#"><img src="{{asset('front_end/images/job-logo4.png')}}" alt="avatar"></a>
                            </div>
                            <div class="candidate_right">
                                <h4 class="title"><a href="#">Trion Technology</a> <span class="sub_title">Graphic Designer</span> <span class="label">Full Time</span></h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> India <strong>Surat</strong> <i>30 min ago</i></li>
                                </ul>
                            </div>
                            <div class="candidate_label">
                                <ul>
                                    <li>Salary: <strong>$1,200 - $1,800</strong></li>
                                    <li>Position: <strong>12</strong></li>
                                    <li>Experience: <strong>2+ Year</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-right">
                            <p>Openings Postition</p>
                            <h3>Graphic Designer</h3>
                            <a href="#" class="btn button-theme btn-lg apply-button">Apply Now!</a>
                        </div>
                    </div>
                    <div class="candidate-item media">
                        <div class="candidate-listing d-flex flex-wrap">
                            <div class="user-logo">
                                <div class="wishlist-icon"><i class="fa fa-heart-o"></i></div>
                                <a class="icon" href="#"><img src="{{asset('front_end/images/job-logo5.png')}}" alt="avatar"></a>
                            </div>
                            <div class="candidate_right">
                                <h4 class="title"><a href="#">Trion Technology</a> <span class="sub_title">Graphic Designer</span> <span class="label">Full Time</span></h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> India <strong>Surat</strong> <i>30 min ago</i></li>
                                </ul>
                            </div>
                            <div class="candidate_label">
                                <ul>
                                    <li>Salary: <strong>$1,200 - $1,800</strong></li>
                                    <li>Position: <strong>12</strong></li>
                                    <li>Experience: <strong>2+ Year</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-right">
                            <p>Openings Postition</p>
                            <h3>Graphic Designer</h3>
                            <a href="#" class="btn button-theme btn-lg apply-button">Apply Now!</a>
                        </div>
                    </div>
                </div>
                <!-- Page navigation start -->
                <div class="pagination-box">
                    <nav aria-label="Page navigation">
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
@endsection
@push('scripts')
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

</script>
@endpush('scripts')
