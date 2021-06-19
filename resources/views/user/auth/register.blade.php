@extends('user.layout.auth')
@section('content')
<div class="container-fluid content-area-box">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-9 col-lg-6 col-xl-5 text-center">
            <div class="card px-0 pt-4 form-box">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form class="form-horizontal commen-form" id="msform" role="form" method="POST" action="{{ url('/user/register') }}">
                    {{ csrf_field() }}
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Account</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>Image</strong></li>
                        <!-- <li id="confirm"><strong>Finish</strong></li> -->
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset id="fieldset1">
                        <div class="form-card">
                            <h2 class="fs-title">Account Information:</h2>
                            <h2 class="steps">Step 1 - 4</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        <label for="first_name" class="control-label">First Name</label>
                                        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" autofocus placeholder="First Name">
                                        @if ($errors->has('first_name'))
                                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="last_name" class="control-label">Last Name</label>
                                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" autofocus placeholder="Last Name">
                                        @if ($errors->has('last_name'))
                                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="control-label">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">
                                        @if ($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                        <label for="mobile" class="control-label">Contact Number</label>
                                        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Contact Number">
                                        @if ($errors->has('mobile'))
                                        <span class="help-block">{{ $errors->first('mobile') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="next action-button">Next</button>

                        <div class="new-account mt-3">
                            <p>Have an account?<a href="{{ url('/user/login') }}"> Sign in</a></p>
                        </div>
                        <!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
                    </fieldset>
                    <fieldset id="fieldset2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Gender</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('education_id') ? ' has-error' : '' }}">
                                    <label class="business_label control-label" for="education_id">Education</label>
                                    <select id="education_id" name="education_id" class="form-control" required="required">
                                    </select>
                                    @if ($errors->has('education_id'))
                                    <span class="help-block">{{ $errors->first('education_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Designation</label>
                                    <select class="form-control" name="designation" id="designation">
                                        <option value="fresher">Fresher</option>
                                        <option value="experience">Experience</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="designation_years">
                                    <label class="control-label">Years Of Experience</label>
                                    <select class="form-control" name="years">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <input type="button" name="next" class="next action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
                        <button type="button" class="previous action-button-previous">Previous </button>
                        <button type="button" class="next action-button">Next </button>
                    </fieldset>
                    <fieldset id="fieldset3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} country"">
                                    <label class=" control-label">Country</label>
                                    <select id="country" name="country" class="form-control js-example-basic-single" required="required">
                                        <option selected="selected">Select state</option>
                                    </select>
                                    @if ($errors->has('country'))
                                    <span class="help-block">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                    <label class="control-label">State</label>
                                    <select id="state" name="state" class="form-control js-example-basic-single" required="required">
                                        <option selected="selected"> Select State</option>
                                    </select>
                                    @if ($errors->has('state'))
                                    <span class="help-block">{{ $errors->first('state') }} </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label class="control-label">City</label>
                                    <select id="city" name="city" class="form-control js-example-basic-single" required="required">
                                        <option selected="selected"> Select City</option>
                                    </select>
                                    @if ($errors->has('city'))
                                    <span class="help-block">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="control-label">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class=" control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- <input type="button" name="next" class="next action-button" value="Submit" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
                        <button type="button" class="previous action-button-previous"> previous </button>
                        <button type="submit" class="next action-button"> Sign Up</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var current_fs, next_fs, previous_fs; //fieldsets

        var url = "{{ url('/') }}";
        $.ajax({
            type: "GET",
            url: url + "/api/countries",
            success: function(res) {
                if (res) {
                    $("#country").empty();
                    $.each(res, function(key, value) {
                        // if (value == cntry) {
                        //     $("#country").append('<option selected value="' + value + '">' + value + '</option>');
                        // } else {
                        $("#country").append('<option value="' + value + '">' + value + '</option>');
                        // }
                    });

                } else {
                    $("#country").empty();
                }
            }
        });

        $("select#country").change(function() {
            var country = $("#country option:selected").text();
            $.ajax({
                type: "POST",
                url: url + "/api/states",
                data: {
                    "country": country
                },
                success: function(res) {
                    if (res) {
                        $("#state").empty();
                        $.each(res, function(key1, value1) {
                            // if (value1 == st) {
                            //     $("#state").append('<option selected value="' + value1 + '">' + value1 + '</option>');
                            // } else {
                            $("#state").append('<option value="' + value1 + '">' + value1 + '</option>');
                            // }
                        });
                    } else {
                        $("#state").empty();
                    }
                }
            });
        });
        $("select#state").change(function() {
            var state = $("#state option:selected").text();
            $.ajax({
                type: "POST",
                data: {
                    "state": state
                },
                url: url + "/api/cities",
                success: function(res) {
                    if (res) {
                        $("#city").empty();
                        $.each(res, function(key2, value2) {
                            // if (value2 == cty) {
                            //     $("#city").append('<option selected value="' + value2 + '">' + value2 + '</option>');
                            // } else {
                            $("#city").append('<option value="' + value2 + '">' + value2 + '</option>');
                            // }

                        });
                    } else {
                        $("#city").empty();
                    }
                }
            });
        });

        $.ajax({
            type: "GET",
            url: url + "/get_all_educations",
            success: function(res) {
                if (res) {
                    $("#education_id").empty();
                    $.each(res, function(key, value) {
                        // console.log(value);
                        // console.log(key);
                        // if (value == cntry) {
                        //     $("#education_id").append('<option selected value="' + key + '">' + value + '</option>');
                        // } else {
                        $("#education_id").append('<option value="' + key + '">' + value + '</option>');
                        // }
                    });

                } else {
                    $("#education_id").empty();
                }
            }
        });

        $("#designation_years").hide();
        $("select#designation").change(function() {
            var designation = $("#designation option:selected").text();
            if (designation == "Experience") {
                $("#designation_years").show();
            } else {
                $("#designation_years").hide();
            }
        });

        $(".next").click(function() {
            // var form = $("#msform");
            $("#msform").validate({
                errorElement: 'span',
                errorClass: 'help-block',
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass("has-error");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass("has-error");
                },
                rules: {
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true,
                        checkEmail: true,
                    },
                    mobile: {
                        required: true,
                        digits: true,
                        // maxlen: 10,
                        // minlen : 10,
                        minlength: 10,
                        maxlength: 10,
                        checkMobile: true
                    },
                    city: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 6,
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    },
                },
                messages: {
                    first_name: "Please Enter Your First Name",
                    last_name: "please Enter Your Last Name",
                    user_mobile: {
                        required: "Please Enter Your Mobile Number",
                        minlength: "Please Enter 10 Digits Mobile Number",
                        maxlength: "Please Enter 10 Digits Mobile Number"
                    },
                    city: "Please select Your City Name",
                    state: "Please select Your State",
                    country: "Please Select Your Country",
                    email: {
                        required: "Please Enter Email Address",
                        email: "Please Enter Valid Email Address"
                    },
                    password: {
                        required: "Please Enter your Password",
                        minlength: "Your Password Must Be At Least 6 Character Long ",
                    },
                    password_confirmation: {
                        required: "Please Enter Your Password For Confirmation",
                        minlength: "Your Password Must Be At Least 6 Character Long",
                        equalTo: "Please Enter Same Password For Confirmation"
                    }
                }
            });
            // console.log(form.valid());
            if ($("#msform").valid()) {
                if ($('#fieldset1').is(":visible")) {
                    current_fs = $('#fieldset1');
                    next_fs = $('#fieldset2');
                    $("#progressbar_one").css("width", "100%");
                } else if ($('#fieldset2').is(":visible")) {
                    current_fs = $('#fieldset2');
                    next_fs = $('#fieldset3');
                    $("#progressbar_two").css("width", "100%");
                }
                if ($('#fieldset3').is(":visible")) {
                    form.submit();
                }
                next_fs.show();
                current_fs.hide();
            }
        });
        $('.previous').click(function() {
            if ($('#fieldset2').is(":visible")) {
                current_fs = $('#fieldset2');
                next_fs = $('#fieldset1');
                $("#progressbar_one").css("width", "0%");
            } else if ($('#fieldset3').is(":visible")) {
                current_fs = $('#fieldset3');
                next_fs = $('#fieldset2');
                $("#progressbar_two").css("width", "0%");
            }
            next_fs.show();
            current_fs.hide();
        });

        $.validator.addMethod('checkEmail', function(email) {
            console.log(email);
            var result = false;
            $.ajax({
                cache: false,
                async: false,
                type: 'POST',
                data: 'email=' + email,
                url: url + '/api/checkemail',
                success: function(json) {
                    result = json;
                }
            });
            return result;
        }, 'Email You Entered is Already Exists');

        $.validator.addMethod('checkMobile', function(mobile) {
            var result = false;
            $.ajax({
                cache: false,
                async: false,
                type: 'POST',
                data: {
                    'mobile': mobile
                },
                url: url + '/api/checkmobile',
                success: function(json) {
                    result = json;
                }
            });
            return result;
        }, 'Mobile Number You Entered is Already Exists');
    });
</script>

@endpush
