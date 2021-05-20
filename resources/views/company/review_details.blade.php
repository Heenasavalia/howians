@extends('company.layout.company_layout')
@section('content')
    <style>
        .user-face {
            width: 80px !important;
        }
        .grey_color {
            color: #c9c9c9!important;
        }
        i.fa.fa-star {
            color: #f2ce0e;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Review Details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('company/dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Job list</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <!-- Email-card start -->
                            <div class="card-block email-card">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="user-head row">
                                            <div class="user-face">
                                                @if($review_details->user->profile_image !== null)
                                                    <img class="img-fluid width-50" src="{{ config('constants.profile_img') . $review_details->user->profile_image }}">
                                                @else
                                                    @if($review_details->user->gender == 'male')
                                                        <img class="img-fluid width-50" src="{{ asset('images/male.png') }}">
                                                    @elseif($review_details->user->gender == 'female')
                                                        <img class="img-fluid width-50" src="{{ asset('images/fmale.png') }}">
                                                    @else
                                                        <img class="img-fluid width-50" src="{{ asset('images/fmale.png') }}">
                                                    @endif
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="user-body">
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">About Rating</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="view-info" class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <form>
                                                            <table class="table table-responsive m-b-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="social-label b-none p-t-0">Created Date
                                                                        </th>
                                                                        <td class="social-user-name b-none p-t-0 text-muted">
                                                                            {{ date('d M Y h:i a', strtotime($review_details->created_at)) }}
                                                                        </td>
                                                                    </tr>

                                                                    <tr>

                                                                    </tr>
                                                                    <tr>
                                                                        <th class="social-label b-none p-t-0">Total rate
                                                                        </th>
                                                                        <td class="social-user-name b-none p-t-0 text-muted">
                                                                            <!-- {{ ucfirst($review_details->rate)}} -->
                                                                            <?php
                                                                                $r = (int) $review_details->rate;
                                                                                
                                                                                for ($i = 1; $i <= $r; $i++) {
                                                                                ?>
                                                                                <i class="fa fa-star"></i>
                                                                                <?php
                                                                                }
                                                                                if ($r == 4) {
                                                                                ?>
                                                                                <i class="fa fa-star grey_color"></i>
                                                                                <?php } else if ($r == 3) { ?>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                <?php } else if ($r == 2) { ?>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                <?php } else if ($r == 1) { ?>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                <?php } else if ($r == 0) { ?>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                    <i class="fa fa-star grey_color"></i>
                                                                                <?php }
                                                                            ?>

                                                                            <b>
                                                                                <span class="m-l-10">
                                                                                    {{ number_format($review_details->rate, 2) }}
                                                                                    <span> / 5</span>
                                                                                </span>
                                                                            </b>

                                                                        </td>
                                                                       
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="social-label b-none">Description</th>
                                                                        <td class="social-user-name b-none text-muted">
                                                                            {{ ucfirst($review_details->description)}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Basic Information</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="view-info" class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <form>
                                                            <table class="table table-responsive m-b-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="social-label b-none p-t-0">Full Name
                                                                        </th>
                                                                        <td class="social-user-name b-none p-t-0 text-muted">
                                                                            {{ ucfirst($review_details->user->first_name) . ' ' . ucfirst($review_details->user->last_name)}}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="social-label b-none">Gender</th>
                                                                        <td class="social-user-name b-none text-muted">{{ ucfirst($review_details->user->gender)}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th class="social-label b-none p-b-0">Location</th>
                                                                        <td class="social-user-name b-none p-b-0 text-muted">
                                                                            {{ ucfirst($review_details->user->city) . ', ' . ucfirst($review_details->user->state) . ', ' . ucfirst($review_details->user->country)}}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Contact Information</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="view-info" class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <form>
                                                            <table class="table table-responsive m-b-0">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="social-label b-none p-t-0">Mobile Number</th>
                                                                    <td>
                                                                        <a href="tel:{{$review_details->user->mobile}}" style="color: #8ebf42">
                                                                            {{$review_details->user->mobile}}
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="social-label b-none">Email Address</th>
                                                                    <td>
                                                                        <a href="mailto:{{$review_details->user->email}}" style="color: #8ebf42">
                                                                            {{$review_details->user->email}}
                                                                        </a>
                                                                    </td>

                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </form>
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

@endpush('scripts')
