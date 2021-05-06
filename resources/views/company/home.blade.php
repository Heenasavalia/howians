@extends('company.layout.company_layout')
@section('content')
    <link href="{{ asset('plugins/fullcalendar/css/fullcalendar.min.css') }}" rel='stylesheet' />
    <link href="{{ asset('plugins/fullcalendar/css/fullcalendar.print.min.css') }}" rel='stylesheet' media='print' />

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('company/home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            @include('company.layout.flash')
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fa fa-handshake-o bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-600">Job Posted</span>
                                    <h4>5</h4>
                                    <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-blue f-16 fa fa-handshake-o m-r-10">
                                        </i>
                                        <a href="{{ url('client/business') }}">
                                            View Post Jobs
                                        </a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fa fa-tags bg-c-pink card1-icon"></i>
                                    <span class="text-c-pink f-w-600">Active Candidate</span>
                                    <h4>12</h4>
                                    <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-pink f-16 fa fa-tags m-r-10"></i>
                                        <a href="{{ url('client/offer') }}">
                                            View Candidate
                                        </a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fa fa-wikipedia-w bg-c-green card1-icon"></i>
                                    <span class="text-c-green f-w-600">Interview Scheduled</span>
                                    <h4>20</h4>
                                    <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-green f-16 fa fa-wikipedia-w m-r-10"></i>
                                        <a href="{{ url('client/wall') }}">
                                            View Interview
                                        </a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fa fa-podcast bg-c-yellow card1-icon"></i>
                                    <span class="text-c-yellow f-w-600">Profile Viewed</span>
                                    <h4>99</h4>
                                    <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-yellow f-16 fa fa-podcast m-r-10"></i>
                                        <a href="{{ url('client/product') }}">
                                            View all
                                        </a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>
    <script type="text/javascript">
        var url = "{{ url('/') }}";
        $(document).ready(function() {

            var d = new Date();
            var month = d.getMonth() + 1;
            var day = d.getDate();
            var output = d.getFullYear() + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;

            $('#calendar').fullCalendar({
                defaultDate: output,
                // defaultView: 'agendaWeek',
                events : [{
                    title: "aaaaa",
                    start: "2021-04-29",
                    end: "2021-04-29",
                }],
            });
        });


    </script>




@endpush
