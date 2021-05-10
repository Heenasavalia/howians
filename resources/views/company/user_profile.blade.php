@extends('company.layout.company_layout')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('company/assets/pages/social-timeline/timeline.css')}}">
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Candidate Profile</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <div class="content social-timeline">
                                    <div class="">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="social-wallpaper">
                                                    <img src="{{asset('company/assets/images/social/cover.jpg')}}" class="img-fluid width-100" alt="">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-xs-12">

                                                <div class="social-timeline-left">

                                                    <div class="card">
                                                        <div class="social-profile">
                                                            @if($user->profile_image !== null)
                                                                <img class="img-fluid width-100" src="{{ config('constants.profile_img') . $user->profile_image }}">
                                                            @else
                                                                @if($user->gender == 'male')
                                                                    <img class="img-fluid width-100" src="{{ asset('images/male.png') }}">
                                                                @elseif($user->gender == 'female')
                                                                    <img class="img-fluid width-100" src="{{ asset('images/fmale.png') }}">
                                                                @else
                                                                    <img class="img-fluid width-100" src="{{ asset('images/fmale.png') }}">
                                                                @endif
                                                            @endif
                                                        </div>
                                                        <div class="card-block social-follower">
                                                            <h4>{{ ucfirst($user->first_name) . ' ' . ucfirst($user->last_name)}}</h4>
                                                            <h5 class="text-capitalize">{{ $user->education->field }}</h5>
                                                            <div class="row follower-counter">
                                                                <div class="col-6">
                                                                    <a class="btn btn-primary btn-icon" href="mailto:{{$user->email}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Contact with Mail">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="tel:{{$user->mobile}}" class="btn btn-danger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Call this person">
                                                                        <i class="fa fa-phone"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-xl-9 col-lg-8 col-md-8 col-xs-12 ">
                                                <div class="card social-tabs">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#about" role="tab">Personal details</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#work" role="tab">Work details </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#resume" role="tab">Resume</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="about">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-header-text">Basic Information</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div id="view-info" class="row">
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <form>
                                                                                    <table class="table table-responsive m-b-0">
                                                                                        <tbody><tr>
                                                                                            <th class="social-label b-none p-t-0">Full Name
                                                                                            </th>
                                                                                            <td class="social-user-name b-none p-t-0 text-muted">{{ ucfirst($user->first_name) . ' ' . ucfirst($user->last_name)}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Gender</th>
                                                                                            <td class="social-user-name b-none text-muted">{{ ucfirst($user->gender)}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Birth Date</th>
                                                                                            <td class="social-user-name b-none text-muted">Birth Date</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Martail Status</th>
                                                                                            <td class="social-user-name b-none text-muted">Single</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none p-b-0">Location</th>
                                                                                            <td class="social-user-name b-none p-b-0 text-muted">
                                                                                                {{ ucfirst($user->city) . ', ' . ucfirst($user->state) . ', ' . ucfirst($user->country)}}
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody></table>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-header-text">Contact Information</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div id="contact-info" class="row">
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <table class="table table-responsive m-b-0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th class="social-label b-none p-t-0">Mobile Number</th>
                                                                                            <td class="social-user-name b-none p-t-0 text-muted">
                                                                                                {{$user->mobile}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Email Address</th>
                                                                                            <td class="social-user-name b-none text-muted">
                                                                                                {{$user->email}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="tab-pane" id="work">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-header-text">Work</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div id="work-info" class="row">
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <table class="table table-responsive m-b-0">
                                                                                    <tbody><tr>
                                                                                        <th class="social-label b-none p-t-0">Designation &nbsp; &nbsp; &nbsp;
                                                                                        </th>
                                                                                        <td class="social-user-name b-none p-t-0 text-muted">
                                                                                            {{ucfirst($user->designation)}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">Skills</th>
                                                                                        <td class="social-user-name b-none text-muted">C#, Javascript, Anguler</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">Apply for</th>
                                                                                        <td class="social-user-name b-none p-b-0 text-muted">
                                                                                            {{ ucfirst($user->education->field)}}</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="tab-pane" id="resume">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    @if($user->resume != null)
                                                                        <div class="card-header">
                                                                                <h5 class="card-header-text">Resume Data</h5>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <div id="work-info" class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <table class="table table-responsive m-b-0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <a href="{{ url('company/download-resume/'. $user->resume) }}" class="btn btn-success btn-round" data-toggle="tooltip" data-placement="top" title="" data-original-title="Call this person">
                                                                                                Resume download here
                                                                                            </a>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div class="card-block">
                                                                            <div id="work-info" class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <table class="table table-responsive m-b-0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <h5 style="color: #FF0000;">Resume not uploaded.,</h5>
                                                                                            <br>
                                                                                            <p>You can contact this candidate using Mail or Contact number.</p>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('company/assets/pages/social-timeline/social.js')}}"></script>
@endpush
