@extends('company.layout.company_layout')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('company/bower_components/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('company/bower_components/cropper/css/cropper.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timepicker_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <style>
        #map {
            display:none;
        }
        textarea#cropped_image {
            display: none;
        }

        input[type="radio"]:focus {
            width: auto !important;
        }

        .btn.focus, .btn:focus {
            width: auto !important;
        }

        #send {
            width: 100% !important;
        }

        input[type="checkbox"] {
            width: auto !important;
        }

        @media (max-width: 450px) {
            .col-xs-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-xs-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            form#business_update .time_zone button.btn.btn-primary.clone-btn-right.clone, form#business_update .time_zone button.btn.btn-default.clone-btn-right.delete.m-l-5 {
                padding: 4px 9px;
                text-align: center;
            }

            .btn i {
                margin: 0;
            }
            .col-4.unit{
                padding: 0 2px;
            }

        }
        .time div#set_24_hour {
            background-color: #eaeaea !important;
            padding: 5px 10px;
            margin-bottom: 10px;
        }
    </style>
    <div class="pcoded-content client_business_add">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Job Add Details</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div id="map"></div>
                        <div class="card-block">

                            {{ Form:: open(array('url'=>"/company/job-requirement/",'method'=>'post', 'id' => 'job_add_frm','files' => true, 'enctype' => 'multipart/form-data')) }}
                            {{--<input type="hidden" name="latitude" id="lat"/>
                            <input type="hidden" name="longitude" id="long"/>--}}
                            <meta id="token" name="token" content="{{ csrf_token() }}">
                            <hr/>
                            <h5 class="cls_heading_business"><i class="icofont icofont-camera-alt"></i> Company profile image
                            </h5>
                            <hr/>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="business_label" for ="profile_image">Choose Company profile image</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="img-container">
                                                <textarea id="cropped_image" name="profile_image" class="cropped_image"></textarea>
                                                <img id="image" src="{{ asset('front_end/img/error_image.png') }}" alt="Select Image for Company profile">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="docs-preview clearfix">
                                                <div class="img-preview preview-lg"></div>
                                                <div class="img-preview preview-md"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 docs-buttons button-page">

                                            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                                        </div>
                                                        <div class="modal-body"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.html">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-upload-image save_croped_image" data-method="submitTo" style="display: none">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper('SUBMIT')">
                                            Save Cropped Image
                                        </span>
                                            </button>
                                            <div class="btn-group">

                                                <label class="btn btn-primary btn-upload btn-upload-image fa_upload" for="inputImage" title="Upload image file">
                                                    <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Upload image file">
                                                <span class="fa fa-upload"></span>
                                            </span>
                                                </label>

                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Zoom In">
                                                <span class="fa fa-search-plus"></span>
                                            </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Zoom Out">
                                                <span class="fa fa-search-minus"></span>
                                            </span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Move Left">
                                                <span class="fa fa-arrow-left"></span>
                                            </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Move Right">
                                                <span class="fa fa-arrow-right"></span>
                                            </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Move Up">
                                                <span class="fa fa-arrow-up"></span>
                                            </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Move Down">
                                                <span class="fa fa-arrow-down"></span>
                                            </span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Rotate Left">
                                                <span class="fa fa-rotate-left"></span>
                                            </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Rotate Right">
                                                <span class="fa fa-rotate-right"></span>
                                            </span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Flip Horizontal">
                                                <span class="fa fa-arrows-h"></span>
                                            </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Flip Vertical">
                                                <span class="fa fa-arrows-v"></span>
                                            </span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Disable">
                                                <span class="fa fa-lock"></span>
                                            </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="Enable">
                                                <span class="fa fa-unlock"></span>
                                            </span>
                                                </button>
                                            </div>
                                            <button type="button" class="btn btn-primary hidden" data-method="getData" data-option data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper('getData')">
                                            Get Data
                                        </span>
                                            </button>
                                            <button type="button" class="btn btn-primary hidden" data-method="setData" data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper('setData', data)">
                                            Set Data
                                        </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <hr/>
                            <h5 class="cls_heading_business"><i class="icofont icofont-user"></i> Job Info</h5>
                            <hr/>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label class="business_label" for="name">Job Title <span class="text-danger">*</span></label>
                                        {{ Form:: text('title', '', array("class" => "form-control", 'placeholder' => 'Enter title', 'id' => 'title')) }}
                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Mail Address <span class="text-danger">*</span></label>
                                        <input id="email" placeholder="E-Mail Address" name="email" type="email" class="required form-control">
                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="business_name" for="job_category">Job category <span class="text-danger">*</span></label>
                                    <div class="form-group{{ $errors->has('job_category') ? ' has-error' : '' }}">
                                        {{ Form:: text('job_category', '', array("class" => "form-control", 'placeholder' => 'Enter job category', 'id' => 'job_category')) }}
                                        <small class="text-danger">{{ $errors->first('job_category') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                                        <label for="education" class="block">Education <span class="text-danger">*</span></label>
                                        {{ Form:: text('education', '', array("class" => "form-control", 'placeholder' => 'Enter education', 'id' => 'education')) }}
                                        <small class="text-danger">{{ $errors->first('education') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                        <label for="designation" class="block">Designation
                                            <span class="text-danger">*</span></label>
                                        {{ Form:: text('designation', '', array("class" => "form-control", 'placeholder' => 'Designation', 'id' => 'designation')) }}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('discription') ? ' has-error' : '' }}">
                                        <label for="discription" class="block">Job Discription <span
                                                class="text-danger">*</span></label>
                                        {{ Form::textarea('discription', '', array("class" => "form-control", 'rows'=> '11', 'placeholder' => 'Enter job discription', 'id' => 'discription')) }}
                                        <small class="text-danger">{{ $errors->first('discription') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('minimum_salary') ? ' has-error' : '' }}">
                                        <label class="minimum_salary" for="name">Minimum Salary <span class="text-danger">*</span></label>
                                        {{ Form:: text('title', '', array("class" => "form-control", 'placeholder' => 'Enter minimum salary', 'id' => 'minimum_salary')) }}
                                        <small class="text-danger">{{ $errors->first('minimum_salary') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('maximum_salary') ? ' has-error' : '' }}">
                                            <label for="maximum_salary">Maximum Salary <span class="text-danger">*</span></label>
                                        <input id="maximum_salary" placeholder="Enter maximum salary" name="maximum_salary" type="maximum_salary" class="required form-control">
                                        <small class="text-danger">{{ $errors->first('maximum_salary') }}</small>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="business_label">Select gender?</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('gender[]') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="geneder">
                                            <input name="gender[]" type="checkbox" class="minimal" checked value="Male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="geneder">
                                            <input name="gender[]" type="checkbox" class="minimal" value="Female">
                                            Female
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="geneder">
                                            <input name="gender[]" type="checkbox" class="minimal" value="Other">
                                            Other
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="geneder">
                                            <input name="gender[]" type="checkbox" class="minimal" value="All">
                                            All
                                        </label>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('gender[]') }}</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                                        <label class="start_time" for="name">Start time <span class="text-danger">*</span></label>
                                        {{ Form:: text('start_time', '', array("class" => "form-control", 'placeholder' => 'Enter start time', 'id' => 'start_time')) }}
                                        <small class="text-danger">{{ $errors->first('start_time') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                                        <label class="end_time" for="name">End time <span class="text-danger">*</span></label>
                                        {{ Form:: text('end_time', '', array("class" => "form-control", 'placeholder' => 'Enter end time', 'id' => 'end_time')) }}
                                        <small class="text-danger">{{ $errors->first('end_time') }}</small>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="business_label">Select job type</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('job_type[]') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="job_type">
                                            <input name="job_type[]" type="checkbox" class="minimal" checked value="part_time">
                                            Part time
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="job_type">
                                            <input name="job_type[]" type="checkbox" class="minimal" value="full_time">
                                            Full time
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="job_type">
                                            <input name="job_type[]" type="checkbox" class="minimal" value="freelacer">
                                            Freelacer
                                        </label>
                                    </div>

                                    <small class="text-danger">{{ $errors->first('job_type[]') }}</small>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('work_experiance_type') ? ' has-error' : '' }}">
                                        <label class="col-form-label" for="work_experiance_type">work_experiance_type</label>
                                        <select id="work_experiance_type" name="work_experiance_type"  class="form-control" required="required">
                                            <option  selected="selected" value="1">Fresher</option>
                                            <option value="0">Experience</option>
                                        </select>
                                        @if ($errors->has('work_experiance_type'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('work_experiance_type') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group sell_price {{ $errors->has('work_experience') ? ' has-error' : '' }}">
                                        <label class="col-form-label " for="work_experience">Work experience <span class="text-danger">*</span></label>
                                        {{ Form:: text('work_experience', '', array("class" => "form-control", 'placeholder' => 'Work experience', 'id' => 'work_experience')) }}
                                        <small class="text-danger">{{ $errors->first('work_experience') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('work_type') ? ' has-error' : '' }}">
                                        <label class="col-form-label" for="work_type">Work type</label>
                                        <select id="work_type" name="work_type"  class="form-control" required="required">
                                            <option  selected="selected" value="online">Online</option>
                                            <option value="offline">Offline</option>
                                        </select>
                                        @if ($errors->has('work_type'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('work_type') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group sell_price {{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label class="col-form-label " for="address">Address <span class="text-danger">*</span></label>
                                        {{ Form:: text('address', '', array("class" => "form-control", 'placeholder' => 'Address', 'id' => 'address')) }}
                                        <small class="text-danger">{{ $errors->first('address') }}</small>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                                        <label class="business_label">Pincode <span class="text-danger">*</span></label>
                                        {{ Form:: text('pincode', '', array("class" => "form-control", 'placeholder' => 'Pincode', 'id' => 'pincode')) }}
                                        <small class="text-danger">{{ $errors->first('pincode') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                        <label class="business_label">Country</label>
                                        <select id="country" data-placement="Select Country *" name="country"  class="form-control js-example-basic-single" required="required">

                                        </select>
                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('country') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                        <label class="business_label">State</label>
                                        <select id="state" name="state"  class="form-control js-example-basic-single" required="required">
                                            {{--                                                    <option  selected="selected">Select State *</option>--}}
                                        </select>
                                        @if ($errors->has('state'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('state') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                        <label class="business_label">City</label>
                                        <select id="city" name="city"  class="form-control js-example-basic-single" required="required">
                                            {{--                                                    <option  selected="selected">Select City *</option>--}}
                                        </select>
                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('city') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <hr/>
                            <h5 class="cls_heading_business"><i class="icofont icofont-ui-social-link"></i>
                                Social Info</h5>
                            <hr/>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group{{ $errors->has('website_url') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="icofont icofont-earth"></i></span>
                                            </div>
                                            {{ Form:: text('website_url', '' , array("class" => "form-control", 'placeholder' => 'Website Url', 'id' => 'website_url')) }}
                                        </div>
                                        <small class="text-danger">{{ $errors->first('website_url') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group{{ $errors->has('instagram_url') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="icofont icofont-social-instagram"></i></span>
                                            </div>
                                            {{ Form:: text('instagram_url', '' , array("class" => "form-control ", 'placeholder' => 'Instagram Url', 'id' => 'instagram_url')) }}
                                        </div>
                                        <small class="text-danger">{{ $errors->first('instagram_url') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group{{ $errors->has('twitter_url') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="icofont icofont-social-twitter"></i></span>
                                            </div>
                                            {{ Form:: text('twitter_url', '', array("class" => "form-control", 'placeholder' => 'Twitter Url', 'id' => 'twitter_url')) }}
                                        </div>
                                        <small class="text-danger">{{ $errors->first('twitter_url') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div
                                        class="form-group{{ $errors->has('facebook_url') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="icofont icofont-social-facebook"></i></span>
                                            </div>
                                            {{ Form:: text('facebook_url','', array("class" => "form-control", 'placeholder' => 'Facebook Url', 'id' => 'facebook_url')) }}
                                        </div>
                                        <small class="text-danger">{{ $errors->first('facebook_url') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            {{ Form::submit('Submit',array("class" => "btn btn-primary btn-block text-white", 'id' => 'send')) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="loder_image_submit" style="display: none;">
                                    <img src="{{asset('imges/form_submit.gif')}}" alt="" class="loder_image">
                                </div>
                            </div>

                            {{ Form:: close() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

    <script type="text/javascript">

        var url = '{{ url("/") }}';

        $(document).ready(function () {
            $("#job_add_frm").validate({
                errorElement: 'div',
                errorClass: 'text-danger',
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass("has-error");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass("has-error");
                },
                errorPlacement: function (error, element) {
                    $(element).closest('.form-group').append(error);
                    //error.appendTo();
                },
                rules: {
                    website_url: {
                        Checkurl: true,
                    },
                    instagram_url: {
                        checkInsta: true
                    },
                    twitter_url: {
                        checkTwitter: true,
                    },
                    facebook_url: {
                        checkFacebook: true
                    },
                    discription : {
                        required: true,
                        maxLenght:true,
                    },
                    pincode :{
                        required: true
                    },
                    email: {
                        required: true,
                        email: true,
                        checkEmail: true,
                    },

                },
                messages: {
                    website_url: "Sorry, please Enter URL in Proper Formate",
                },
                submitHandler: function (form) {
                    $(".loder_image_submit").show();
                    $(".save_croped_image").click();
                    form.submit();
                }
            });


            $.validator.addMethod('maxLenght', function (value, element, attribute) {
                var maxLength = 15;
                var total_word = ($.trim(value.replace(/\n/g, " ").replace(/  +/g, ' ')).split(" ")).length;
                if(total_word >= maxLength){
                    return true;
                }
                else{
                    return false;
                }

            }, 'Sorry, You Must Enter Minimum 15 Words in Job Detail');
            $.validator.addMethod('checkFacebook', function (facebook_url) {
                var resulat = true;
//                            console.log(facebook_url);
                if (facebook_url != "") {
                    var str = facebook_url;
                    var patt = new RegExp("(?:(?:http|https):\/\/)(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?");
                    var res = patt.test(str);
                    if (patt.test(str)) {
                        resulat = true;
                    } else {
                        resulat = false;
                    }
                }
                return resulat;
            }, 'Sorry, please Enter Facebook URL in Proper Formate');

            $.validator.addMethod('alphabates', function (name) {
                var str = name;
                var patt = new RegExp("^[a-zA-Z .]*$");
                var res = patt.test(str);
                if (patt.test(str)) {
                    return true;
                } else {
                    return false;
                }
            }, 'please Enter Only Alphabates');
            $.validator.addMethod('Checkurl', function (website_url) {
                var resulat = true;
                if (website_url != "") {
                    var str = website_url;
                    var patt = new RegExp("^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}");
                    var res = patt.test(str);
                    if (patt.test(str)) {
                        resulat = true;
                    } else {
                        resulat = false;
                    }
                }
                return resulat;
            }, 'Sorry, please Enter URL in Proper Formate');
            $.validator.addMethod('checkInsta', function (instagram_url) {
                var resulat = true;
                if (instagram_url != "") {
                    var str = instagram_url;
                    var patt = new RegExp("(?:(?:http|https):\\/\\/)?(?:www.)?(?:instagram.com|instagr.am)\\/([A-Za-z0-9-_\\.]+)");
                    var res = patt.test(str);
                    if (patt.test(str)) {
                        resulat = true;
                    } else {
                        resulat = false;
                    }
                }
                return resulat;
            }, 'Sorry, please Enter Instagram URL in Proper Formate');
            $.validator.addMethod('checkTwitter', function (twitter_url) {
                var resulat = true;
                if (twitter_url != "") {
                    var str = twitter_url;
                    var patt = new RegExp("http(?:s)?:\\/\\/(?:www\\.)?twitter\\.com\\/([a-zA-Z0-9_]+)");
                    var res = patt.test(str);
                    if (patt.test(str)) {
                        resulat = true;
                    } else {
                        resulat = false;
                    }
                }
                return resulat;
            }, 'Sorry, please Enter Twitter URL in Proper Formate');

        });

    </script>
    <script type="text/javascript"
            src="{{ asset('company/assets/pages/j-pro/js/jquery.maskedinput.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('company/assets/pages/j-pro/js/jquery-cloneya.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('company/assets/pages/j-pro/js/custom/cloned-form.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function () {

            var cntry = "";
            var st = "";
            var cty = "";
            var zip = "";

            $('#country').select2({
                width: '100%'
            });
            $('#state').select2({
                width: '100%'
            });
            $('#city').select2({
                width: '100%'
            });
            $.ajax({
                type: "GET",
                url: url + "/api/countries",
                success: function (res) {
                    if (res) {
                        $("#country").empty();
                        $.each(res, function (key, value) {
                            if (value == cntry) {
                                $("#country").append('<option selected value="' + value + '">' + value + '</option>');
                            } else {
                                $("#country").append('<option value="' + value + '">' + value + '</option>');
                            }
                        });

                    } else {
                        $("#country").empty();
                    }
                }
            });
            var data_state = {
                "country": cntry
            };
            $.ajax({
                type: "POST",
                url: url + "/api/states",
                data: data_state,
                success: function (res) {
                    if (res) {
                        $("#state").empty();
                        $.each(res, function (key1, value1) {
                            if (value1 == st) {
                                $("#state").append('<option selected value="' + value1 + '">' + value1 + '</option>');
                            } else {
                                $("#state").append('<option value="' + value1 + '">' + value1 + '</option>');
                            }
                        });
                    } else {
                        $("#state").empty();
                    }
                }
            });
            var data_city = {
                "state": st
            };
            $.ajax({
                type: "POST",
                data: data_city,
                url: url + "/api/cities",
                success: function (res) {
                    if (res) {
                        $("#city").empty();
                        $.each(res, function (key2, value2) {
                            if (value2 == cty) {
                                $("#city").append('<option selected value="' + value2 + '">' + value2 + '</option>');
                            } else {
                                $("#city").append('<option value="' + value2 + '">' + value2 + '</option>');
                            }

                        });
                    } else {
                        $("#city").empty();
                    }
                }
            });
        });
    </script>




    <script src="{{ asset('company/bower_components/cropper/js/cropper.min.js')}}"
            type="text/javascript"></script>
    <script type="text/javascript">
        var url = "{{ url('/') }}";
        $(function () {
            var console = window.console || {
                log: function () {
                }
            };
            var URL = window.URL || window.webkitURL;
            var $image = $('#image');
            var business_id = $("#business_id").val();
            // console.log(business_id);
            var $download = $('#download');
            var $dataX = $('#dataX');
            var $dataY = $('#dataY');
            var $dataHeight = $('#dataHeight');
            var $dataWidth = $('#dataWidth');
            var $dataRotate = $('#dataRotate');
            var $dataScaleX = $('#dataScaleX');
            var $dataScaleY = $('#dataScaleY');
            var file_type = "";
            var options = {
                aspectRatio: 1.9 / 1,
                preview: '.img-preview',
                zoomable: true,
                zoomOnTouch: false,
                minCropBoxWidth: 450,
                minCropBoxHeight: 450,
                crop: function (e) {
                    $dataX.val(Math.round(e.x));
                    $dataY.val(Math.round(e.y));
                    $dataHeight.val(Math.round(e.height));
                    $dataWidth.val(Math.round(e.width));
                    $dataRotate.val(e.rotate);
                    $dataScaleX.val(e.scaleX);
                    $dataScaleY.val(e.scaleY);
                },
                ondragend: function (data) {
                    var originalData = $image.cropper("getCroppedCanvas");
                    //console.log(originalData.toDataURL());
                    //$('.data-url').text(originalData.toDataURL());
                }
            };
            var originalImageURL = $image.attr('src');
            var uploadedImageURL;
            var update_cropped_link;
            var originalData;
            // Cropper
            $image.on({
                'build.cropper': function (e) {
                    /* console.log(e.type);*/
                },
                'built.cropper': function (e) {
                    /*   console.log(e.type);*/
                },
                'cropstart.cropper': function (e) {
                    /*   console.log(e.type, e.action);*/
                },
                'cropmove.cropper': function (e) {
                    /* console.log(e.type, e.action);*/
                },
                'cropend.cropper': function (e) {
                    /*console.log(e.type, e.action);*/
                },
                'crop.cropper': function (e) {
                    /* console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);*/
                },
                'zoom.cropper': function (e) {
                    /*  console.log(e.type, e.ratio);*/
                }
            }).cropper(options);
            // Buttons
            if (!$.isFunction(document.createElement('canvas').getContext)) {
                $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
            }
            if (typeof document.createElement('cropper').style.transition === 'undefined') {
                $('button[data-method="rotate"]').prop('disabled', true);
                $('button[data-method="scale"]').prop('disabled', true);
            }
            // Download
            if (typeof $download[0].download === 'undefined') {
                $download.addClass('disabled');
            }
            // Options
            $('.docs-toggles').on('change', 'input', function () {
                var $this = $(this);
                var name = $this.attr('name');
                var type = $this.prop('type');
                var cropBoxData;
                var canvasData;
                if (!$image.data('cropper')) {
                    return;
                }
                if (type === 'checkbox') {
                    options[name] = $this.prop('checked');
                    cropBoxData = $image.cropper('getCropBoxData');
                    canvasData = $image.cropper('getCanvasData');

                    options.built = function () {
                        $image.cropper('setCropBoxData', cropBoxData);
                        $image.cropper('setCanvasData', canvasData);
                    };
                } else if (type === 'radio') {
                    options[name] = $this.val();
                }

                $image.cropper('destroy').cropper(options);
            });
            // Methods
            $('.docs-buttons').on('click', '[data-method]', function () {

                var $this = $(this);
                var data = $this.data();
                var $target;
                var result;
                if (data.method === "submitTo") {
                    // originalData = $image.cropper("getCroppedCanvas");
                    if(file_type == 'image/jpeg' || file_type == 'image/jpg'){
                        originalData = $image.cropper('getCroppedCanvas', {
                            fillColor: '#fff',
                            imageSmoothingEnabled: false,
                        });
                    }
                    else{
                        originalData = $image.cropper('getCroppedCanvas', {
                            imageSmoothingEnabled: false,
                        });
                    }
                    $("#cropped_image").val(originalData.toDataURL(file_type, 0.5));

                }
                if ($this.prop('disabled') || $this.hasClass('disabled')) {
                    return;
                }
                if ($image.data('cropper') && data.method) {
                    data = $.extend({}, data); // Clone a new one

                    if (typeof data.target !== 'undefined') {
                        $target = $(data.target);

                        if (typeof data.option === 'undefined') {
                            try {
                                data.option = JSON.parse($target.val());
                            } catch (e) {
                                console.log(e.message);
                            }
                        }
                    }
                    if (data.method === 'rotate') {
                        $image.cropper('clear');
                    }
                    result = $image.cropper(data.method, data.option, data.secondOption);

                    if (data.method === 'rotate') {
                        $image.cropper('crop');
                    }
                    switch (data.method) {
                        case 'scaleX':
                        case 'scaleY':
                            $(this).data('option', -data.option);
                            break;

                        case 'getCroppedCanvas':
                            if (result) {

                                // Bootstrap's Modal
                                $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                                if (!$download.hasClass('disabled')) {
                                    $download.attr('href', result.toDataURL('image/jpeg'));
                                }
                            }

                            break;

                        case 'destroy':
                            if (uploadedImageURL) {
                                URL.revokeObjectURL(uploadedImageURL);
                                uploadedImageURL = '';
                                $image.attr('src', originalImageURL);
                            }

                            break;
                    }

                    if ($.isPlainObject(result) && $target) {
                        try {
                            $target.val(JSON.stringify(result));
                        } catch (e) {
                            console.log(e.message);
                        }
                    }
                }
            });
            // Import image
            var $inputImage = $('#inputImage');

            if (URL) {
                $inputImage.change(function () {
                    var files = this.files;
                    var file;
                    $("#business_image_pre").val("true");
                    if (!$image.data('cropper')) {
                        return;
                    }
                    if (files && files.length) {
                        file = files[0];
                        file_type = file.type;
                        if (/^image\/\w+$/.test(file.type)) {
                            if (uploadedImageURL) {
                                URL.revokeObjectURL(uploadedImageURL);
                            }
                            uploadedImageURL = URL.createObjectURL(file);
                            $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                            $inputImage.val('');
                        } else {
                            window.alert('Please choose an image file.');
                        }
                    }
                });
            } else {
                $inputImage.prop('disabled', true).parent().addClass('disabled');
            }
        });

    </script>
    <script type="text/javascript" src="{{ asset('company/bower_components/lightbox2/js/lightbox.min.js')}}"></script>

@endpush('scripts')

