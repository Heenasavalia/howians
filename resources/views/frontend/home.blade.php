@extends('frontend.layout.front_layout')
@section('content')
<section class="banner" id="banner">
    <div class="text-center">
        <h3 class="b-text">Find The Career You Deserve</h3>
        <p class="p-text">We Help You Get: New Job</p>
        <div class="inline-search-area ml-auto mr-auto isa-3">
            {{ Form:: open(array('url' => ['user-search'],'method'=>'post', 'id' => 'user-search-form', 'class' => 'user-search-form')) }}
            {{ csrf_field() }}
            <div class="search-boxs">
                <div class="search-col">
                    <input type="text" id="keyword_search" name="keyword" class="form-control has-icon b-radius" placeholder="Job title or Keywords">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="search-col">
                    <input type="text" id="location_search" name="location" class="form-control has-icon b-radius" placeholder="Location">
                    <div class="ui-widget">
                        <div id="log" style="height: auto; overflow: auto;" class="ui-widget-content"></div>
                    </div>
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="search-col">
                    <input type="text" id="category_search" name="category" class="form-control has-icon b-radius" placeholder="Category">
                    <div class="ui-widget">
                        <div id="log" style="height: auto; overflow: auto;" class="ui-widget-content"></div>
                    </div>
                </div>
                <div class="find">
                    <button class="btn btn-md button-theme btn-search btn-block b-radius">SEARCH</button>
                </div>
            </div>
            {{ Form:: close() }}
        </div>
    </div>
</section>
<section class="job-section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="main-title-2">
                    <h2>I am Company's</h2>
                    <a href="#" class="float-right">See all Jobs</a>
                </div>
                @foreach ($recent_posted_job as $jobs)

                <div class="job-item media">
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">{{ $jobs->title }}</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, {{ $jobs->city}}</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="{{ url('user/apply'. '/' . $jobs->unique_id) }}" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</section>

<section class="job-section employee_job_sec content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="main-title-2">
                    <h2>I am Employee</h2>
                    <a href="#" class="float-right">See all Jobs</a>
                </div>
                @foreach ($recent_posted_job as $jobs)
                <div class="job-item media">
                    <div class="media-box align-self-center">
                        <div class="div-left">
                            <h4><a href="#">{{ $jobs->title }}</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="fa fa-building-o"></i> Sahjanand</li>
                                    <li><i class="fa fa-map-o"></i> Piplod, {{ $jobs->city}}</li>
                                    <li><i class="fa fa-clock-o"></i> Full Time</li>
                                    <li><i class="fa fa-calendar"></i> 5 days ago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-center">
                            <a href="#" class="heart-button"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="div-right">
                            <a href="{{ url('user/apply'. '/' . $jobs->unique_id) }}" class="apply-button btn button-theme">Apply Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</section>
@endsection
@push('scripts')
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $("#category_search").keyup(function() {
        $("#category_search").autocomplete({
            source: function(request, response) {
                appendTo: "#category_search",
                $.ajax({
                    url: "{{url('api/search-categories')}}",
                    data: {
                        query: request.term,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        var resp = "";
                        if (data != null) {
                            resp = $.map(data, function(b) {
                                return b.name;
                            });
                        }
                        response(resp);
                    }
                });
            },
            minLength: 2,
            select: function(event, ui) {
                log(ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            },
            close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });
    });
    $("#location_search").keyup(function() {
        $("#location_search").autocomplete({
            source: function(request, response) {
                appendTo: "#category_search",
                $.ajax({
                    url: "{{url('api/search-location')}}",
                    data: {
                        query: request.term,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        var resp = "";
                        resp = $.map(data, function(b) {
                            return b;
                        });
                        response(resp);
                    }
                })
            },
            minLength: 2,
            select: function(event, ui) {
                log(ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            },
            close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });
    });
</script>
@endpush('scripts')