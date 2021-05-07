@extends('company.layout.company_layout')
@section('content')
    <style>
        img.loder_image {
            top: 50%;
            position: relative;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('company/assets/css/jquery.datetimepicker.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
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

                        <div class="card-block">

                            {{ Form:: open(array('url'=>"/company/job-requirement/",'method'=>'post', 'id' => 'job_add_frm','files' => true, 'enctype' => 'multipart/form-data')) }}
                            {{--<input type="hidden" name="latitude" id="lat"/>
                            <input type="hidden" name="longitude" id="long"/>--}}
                            <meta id="token" name="token" content="{{ csrf_token() }}">


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
                                        {{ Form:: text('minimum_salary', '', array("class" => "form-control", 'placeholder' => 'Enter minimum salary', 'id' => 'minimum_salary')) }}
                                        <small class="text-danger">{{ $errors->first('minimum_salary') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('maximum_salary') ? ' has-error' : '' }}">
                                        <label for="maximum_salary">Maximum Salary <span class="text-danger">*</span></label>
                                        <input id="maximum_salary" placeholder="Enter maximum salary" name="maximum_salary" type="maximum_salary" class="form-control">
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
                                        <label class="start_time">Job start and end date <span class="text-danger">*</span></label>
                                        {{--                                        <div class="col-sm-10 col-xl-10">--}}
                                        <div class="input-daterange input-group" id="datepicker">
                                            <input type="datetime-local" class="input-sm form-control" name="start_time" placeholder="start date"/>
                                            <span class="input-group-addon">to</span>
                                            <input type="datetime-local" class="input-sm form-control" name="end_time" placeholder="end date" />
                                        </div>
                                        {{--                                        </div>--}}
                                        <small class="text-danger">{{ $errors->first('start_time') }}</small>
                                    </div>
                                </div>
                            </div>
                            <br>

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
                                        <select id="country" data-placement="Select Country *" name="country"  class="form-control js-example-basic-single">

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
                                        <select id="state" name="state"  class="form-control js-example-basic-single">
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
                                        <select id="city" name="city"  class="form-control js-example-basic-single">
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
                                    <img src="{{asset('images/form_submit.gif')}}" alt="" class="loder_image">
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

    <script type="text/javascript" src="{{ asset('company/assets/js/jquery.datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/assets/js/jquery.datetimepicker.full.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


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
                    title: {
                        required: true,
                        alphabates: true,
                    },
                    job_category: {
                        required: true,
                        alphabates: true,
                    },
                    education: {
                        required: true,
                        alphabates: true,
                    },
                    designation: {
                        required: true,
                        alphabates: true,
                    },
                    discription : {
                        required: true,
                        maxLenght:true,
                    },
                    gender : {
                        required: true,
                    },
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
                    title: {
                        required: "Please enter job title",
                    },
                    job_category: {
                        required: "Please enter job category",
                    },
                    education: {
                        required: "Please enter education",
                    },
                    designation: {
                        required: "Please enter designation",
                    },
                    discription : {
                        required: "Please Enter discription",
                    },
                    gender : {
                        required: true,
                    },
                    website_url: "Sorry, please Enter URL in Proper Formate",
                    email: {
                        required: "Please enter valid Email",
                    },
                    pincode:{
                        required: "Please enter pincode"
                    }
                },
                submitHandler: function (form) {
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


    {{--    <script type="text/javascript">--}}
    {{--        $(document).ready(function () {--}}

    {{--            var cntry = "";--}}
    {{--            var st = "";--}}
    {{--            var cty = "";--}}
    {{--            var zip = "";--}}

    {{--            $('#country').select2({--}}
    {{--                width: '100%'--}}
    {{--            });--}}
    {{--            $('#state').select2({--}}
    {{--                width: '100%'--}}
    {{--            });--}}
    {{--            $('#city').select2({--}}
    {{--                width: '100%'--}}
    {{--            });--}}
    {{--            $.ajax({--}}
    {{--                type: "GET",--}}
    {{--                url: url + "/api/countries",--}}
    {{--                success: function (res) {--}}
    {{--                    if (res) {--}}
    {{--                        $("#country").empty();--}}
    {{--                        $.each(res, function (key, value) {--}}
    {{--                            if (value == cntry) {--}}
    {{--                                $("#country").append('<option selected value="' + value + '">' + value + '</option>');--}}
    {{--                            } else {--}}
    {{--                                $("#country").append('<option value="' + value + '">' + value + '</option>');--}}
    {{--                            }--}}
    {{--                        });--}}

    {{--                    } else {--}}
    {{--                        $("#country").empty();--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            });--}}
    {{--            var data_state = {--}}
    {{--                "country": cntry--}}
    {{--            };--}}
    {{--            $.ajax({--}}
    {{--                type: "POST",--}}
    {{--                url: url + "/api/states",--}}
    {{--                data: data_state,--}}
    {{--                success: function (res) {--}}
    {{--                    if (res) {--}}
    {{--                        $("#state").empty();--}}
    {{--                        $.each(res, function (key1, value1) {--}}
    {{--                            if (value1 == st) {--}}
    {{--                                $("#state").append('<option selected value="' + value1 + '">' + value1 + '</option>');--}}
    {{--                            } else {--}}
    {{--                                $("#state").append('<option value="' + value1 + '">' + value1 + '</option>');--}}
    {{--                            }--}}
    {{--                        });--}}
    {{--                    } else {--}}
    {{--                        $("#state").empty();--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            });--}}
    {{--            var data_city = {--}}
    {{--                "state": st--}}
    {{--            };--}}
    {{--            $.ajax({--}}
    {{--                type: "POST",--}}
    {{--                data: data_city,--}}
    {{--                url: url + "/api/cities",--}}
    {{--                success: function (res) {--}}
    {{--                    if (res) {--}}
    {{--                        $("#city").empty();--}}
    {{--                        $.each(res, function (key2, value2) {--}}
    {{--                            if (value2 == cty) {--}}
    {{--                                $("#city").append('<option selected value="' + value2 + '">' + value2 + '</option>');--}}
    {{--                            } else {--}}
    {{--                                $("#city").append('<option value="' + value2 + '">' + value2 + '</option>');--}}
    {{--                            }--}}

    {{--                        });--}}
    {{--                    } else {--}}
    {{--                        $("#city").empty();--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}


@endpush('scripts')

