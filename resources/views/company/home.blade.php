@extends('company.layout.company_layout')
@section('content')


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
                                    <i class="fa fa-plus-circle bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-600">Job Posted</span>
                                    <h4>{{ $total_add_job }}</h4>
                                    <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-blue f-16 fa fa-plus-circle m-r-10">
                                        </i>
                                        <a href="{{ url('company/my-post-job-list') }}">
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
                                    <span class="text-c-pink f-w-600">Applied Candidate</span>
                                    <h4>{{ $total_candidate}}</h4>
                                    <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-pink f-16 fa fa-tags m-r-10"></i>
                                            View Candidate
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

                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <h5>Interview Scheduling</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li>
                                            <i class="feather icon-maximize full-card"></i>
                                        </li>
                                        <li>
                                            <i class="feather icon-minus minimize-card"></i>
                                        </li>
                                        <li>
                                            <i class="feather icon-trash-2 close-card"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    
                                    <div class="col-xl-12 col-md-12">
                                        <div id="calendar"></div>
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
<script type="text/javascript" src="{{ asset('company/bower_components/fullcalendar/js/fullcalendar.min.js')}}"></script>


    <script type="text/javascript">

        var url = "{{ url('/') }}";
        $(document).ready(function() {
           
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    // center: 'month'
                },
                defaultDate: moment(),
                navLinks: true,
                businessHours: true,
                editable: true,
                droppable: false,
                drop: function() {
                    if ($('#checkbox2').is(':checked')) {
                        $(this).remove();
                    }
                },
                events: [
                    @foreach($all_candidate as $candidate)
                        {
                            id: '{{$candidate->user_id}}',
                            title : '{{ $candidate->job->title }}',
                            start : '{{$candidate->date . "T" . $candidate->time}}',
                            constraint: 'businessHours',
                            borderColor: '#404e67',
                            backgroundColor: '#404e67',
                            textColor: '#fff',
                            // rendering: 'background'
                        },
                    @endforeach
                ],
                eventClick: function(data, event, view) {
                    console.log(data, event, view);
                    eventDetails(data.id);
                },
                eventRender: function(event, element, view) {
                    console.log(event, element, view);
                    element.attr('title', event.tip);
                },
            });

        });

        function eventDetails(id){
            window.location.href = "{{url('company/user-profile')}}/" + id;
        }
    </script>




@endpush
