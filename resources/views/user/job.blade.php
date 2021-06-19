@extends('frontend.layout.front_layout')
@section('content')
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
                @if($data != null)
                @foreach($data as $d)
                    <div class="candidate-item media">
                        <div class="candidate-listing d-flex flex-wrap">
                            <div class="user-logo">
                                <!-- <div class="wishlist-icon"><i class="fa fa-heart-o"></i></div> -->
                                <a class="icon" href="#"><img src="{{asset('front_end/images/job-logo1.png')}}" alt="avatar"></a>
                            </div>
                            <div class="candidate_right">
                                <h4 class="title"><a href="#">{{$d->company->company_name}}</a> <span class="sub_title">{{$d->title}}</span> <span class="label">{{$d->job_type}}</span></h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> {{$d->country}} <strong>{{$d->city}}</strong> <i>30 min ago</i></li>
                                </ul>
                            </div>
                            <div class="candidate_label">
                                <ul>
                                    <li>Salary: <strong>$ {{$d->minimum_salary}} - $ {{$d->maximum_salary}}</strong></li>
                                    <li>Position: <strong>{{$d->number_of_vacancy}}</strong></li>
                                    <li>Experience: <strong>{{$d->work_experience}}+ Year</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-right">
                            <p>Openings Postition</p>
                            <h3>{{$d->title}}</h3>
                            <?php $com_id = $d->company->id; ?>
                            <a href="{{url('user/apply-job/'.$com_id.'/'.$d->id)}}" class="btn button-theme btn-lg apply-button">Apply Now!</a>
                        </div>
                    </div>
                @endforeach
                @else
                @endif
                </div>
                <!-- Page navigation start -->
                <div class="pagination-box">
                    <!-- <nav aria-label="Page navigation">
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
                    </nav> -->
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Candidate listing section start -->

@endsection
@push('scripts')

<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');
    });
</script>
@endpush('scripts')