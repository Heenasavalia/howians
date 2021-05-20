@extends('company.layout.company_layout')
@section('content')
    <style>
        .user_profile {
            height: 162px !important;
            width: 161px !important;
        }
        .center {
            margin: auto;
            width: 60%;
            border: 3px solid #73AD21;
            padding: 10px;
        }
    </style>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>All Candidate who apply for job</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(!$get_users->isEmpty())
{{--                @if($get_users)--}}
                    <div class="row simple-cards users-card">
                        @foreach($get_users as $user)
                            <div class="col-md-12 col-xl-3">
                                <div class="card user-card">
                                    <div class="card-header-img">
                                        @if($user->user->profile_image !== null)
                                            <img class="img-fluid img-radius user_profile" src="{{ config('constants.profile_img') . $user->user->profile_image }}">
                                        @else
                                            @if($user->user->gender == 'male')
                                                <img class="img-fluid img-radius user_profile" src="{{ asset('images/male.png') }}">
                                            @elseif($user->user->gender == 'female')
                                                <img class="img-fluid img-radius user_profile" src="{{ asset('images/fmale.png') }}">
                                            @else
                                                <img class="img-fluid img-radius user_profile" src="{{ asset('images/fmale.png') }}">
                                            @endif
                                        @endif
                                        <h4>{{ ucfirst($user->user->first_name) . ' ' . ucfirst($user->user->last_name)}}</h4>
                                        <h3><a href="mailto:{{$user->user->email}}">{{ $user->user->email }}</a></h3>

                                    </div>
                                    <p>{{ str_limit(strip_tags($user->description), $limit = 135, $end = '...') }}</p>
                                    <div>
                                        <a href="{{ url('company/user-profile/'. $user->user->id) }}" class="btn btn-success waves-effect waves-light" style="color:#FFFFFF;">
                                            <i class="icofont icofont-user m-r-5"></i>
                                            View candidate profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row center">
                        <div class="col-sm-12">
                            <div class="auth-body">
                                <h1>Oops</h1>
                                <h2>No candidate yet applied for this job</h2>
                                <p>
                                    <a href="{{ url('company/my-post-job-list') }}" style="color:#FF0000;" class="m-t-30">
                                        Back to Job list page
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush
