@extends('company.layout.company_layout')
@section('content')

    <div class="pcoded-content client_business_add">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Edit Company Details</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5>Company Profile</h5>
                        </div>
                        <div class="card-block">
                            {{--                            {{ Form:: open(array('url'=>'client/update_profile/','id' => 'change_profile','files' => true,'enctype' => 'multipart/form-data')) }}--}}
                            {{ Form:: open(array('url' => ['company/update_profile'],'method'=>'post', 'id' => 'change_profile','files' => true,'enctype' => 'multipart/form-data')) }}
                            <meta id="token" name="token" content="{{ csrf_token() }}">
                            <hr/>
                            <h5 class="cls_heading"><i class="fa fa-camera"></i> Profile Image</h5>
                            <hr/>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 col-form-label">Profile Image</label>
                                        <img
                                            src="{{config('constants.company_profile') . Auth::user()->profile_image }}"
                                            onerror="this.src='{{ asset('images/company_default.png') }}';"
                                            alt="Company profile image" width="60px">
                                        {{ Form:: file('profile_image',array("class" => "form-control", 'id' => 'profile_image')) }}
                                        <small class="text-danger">{{ $errors->first('profile_image') }}</small>

                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h5 class="cls_heading"><i class="fa fa-user"></i> Personal Info</h5>
                            <hr/>
                            <input type="text" id="current_company_id" value="{{Auth::user()->id}}"/>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="{{ $errors->has('first_name') ? ' has-error' : '' }} row">
                                        <label class="col-sm-3 col-form-label">First Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9 form-group">
                                            <input id="first_name" type="text" class="form-control" name="first_name"
                                                   value="{{ Auth::user()->first_name}}" placeholder="First name">
                                            <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="{{ $errors->has('last_name') ? ' has-error' : '' }} row">
                                        <label class="col-sm-3 col-form-label">Last Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9 form-group">
                                            <input id="last_name" type="text" class="form-control" name="last_name"
                                                   value="{{ Auth::user()->last_name}}" placeholder="Last name">
                                            <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="{{ $errors->has('email') ? ' has-error' : '' }} row">
                                        <label class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-9 form-group">
                                            <input id="email" type="text" class="form-control" name="email"
                                                   value="{{ Auth::user()->email}}" placeholder="Email">
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="{{ $errors->has('mobile') ? ' has-error' : '' }} row">
                                        <label class="col-sm-3 col-form-label">Mobile <span class="text-danger">*</span></label>
                                        <div class="col-sm-9 form-group">
                                            <input id="mobile" type="text" class="form-control" name="mobile"
                                                   value="{{ Auth::user()->mobile}}" placeholder="Mobile">
                                            <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="{{ $errors->has('company_name') ? ' has-error' : '' }} row">
                                        <label class="col-sm-3 col-form-label">Company name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9 form-group">
                                            <input readonly id="company_name" type="text" class="form-control"
                                                   name="company_name" value="{{ Auth::user()->company_name}}"
                                                   placeholder="Company name">
                                            <div class="text-danger">{{ $errors->first('company_name') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="{{ $errors->has('address') ? ' has-error' : '' }} row">
                                        <label class="col-sm-3 col-form-label">Address <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9 form-group">
                                            <input id="address" type="text" class="form-control" name="address"
                                                   onFocus="geolocate()" value="{{ Auth::user()->address}}"
                                                   placeholder="Address">
                                            <div class="text-danger">{{ $errors->first('address') }}</div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <input type="hidden" id="current_company_country" value="{{Auth::user()->country}}"/>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="col-form-label">Country <span class="text-danger">*</span></label>

                                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">

                                        <select id="country" name="country"
                                                class="form-control js-example-basic-single">
                                            <option value="" selected="selected">Select Country</option>
                                        </select>
                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <input type="hidden" id="current_company_state" value="{{Auth::user()->state}}"/>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="col-form-label">State <span class="text-danger">*</span></label>

                                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">

                                        <select id="state" name="state" class="form-control js-example-basic-single">
                                            <option value="" selected="selected">Select state</option>
                                        </select>
                                        @if ($errors->has('state'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <input type="hidden" id="current_company_city" value="{{Auth::user()->city}}"/>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="col-form-label">City <span class="text-danger">*</span></label>

                                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">

                                        <select id="city" name="city" class="form-control js-example-basic-single">
                                            <option value="" selected="selected">Select City</option>
                                        </select>
                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <h5 class="cls_heading">
                                <i class="fa fa-share-alt"></i>
                                Social Info
                            </h5>
                            <hr/>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group{{ $errors->has('website_url') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-globe"></i></span>
                                            </div>
                                            <input id="website_url" type="website_url" class="form-control"
                                                   name="website_url" value="{{ Auth::user()->website_url}}"
                                                   placeholder="Website url">

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
                                                                class="fa fa-instagram"></i></span>
                                            </div>
                                            <input id="instagram_url" type="instagram_url" class="form-control"
                                                   name="instagram_url" value="{{ Auth::user()->instagram_url}}"
                                                   placeholder="Instagram url">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('instagram_url') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group{{ $errors->has('twitter_url') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-twitter"></i></span>
                                            </div>
                                            <input id="twitter_url" type="twitter_url" class="form-control"
                                                   name="twitter_url" value="{{ Auth::user()->twitter_url}}"
                                                   placeholder="Twitter url">
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
                                                                class="fa fa-facebook"></i></span>
                                            </div>
                                            <input id="facebook_url" type="facebook_url" class="form-control"
                                                   name="facebook_url" value="{{ Auth::user()->facebook_url}}"
                                                   placeholder="Facebook url">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('facebook_url') }}</small>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input id="send" type="submit" class="btn btn-primary btn-block"
                                                   value="Update">
                                        </div>
                                    </div>
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
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $("#change_profile").validate({
                errorElement: 'div',
                errorClass: 'text-danger',
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass("has-error");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass("has-error");
                },
                errorPlacement: function (error, element) {
                    $(element).closest(".form-group").append(error);
                    //error.appendTo();
                },
                rules: {
                    first_name: {
                        required: true,
                        alphabates: true,
                    },
                    last_name: {
                        required: true,
                        alphabates: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    mobile: {
                        required: true,
                        digits: true,
                        maxlength: 10,
                        minlength: 9,
                    },

                    address: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    city: {
                        required: true
                    }

                },
                messages: {
                    first_name: {
                        required: "Please Enter your First Name",
                        email: "Please Enter Only Alphabates "
                    },
                    last_name: {
                        required: "Please Enter your Last Name",
                        email: "Please Enter Only Alphabates"
                    },
                    email: {
                        required: "Please Enter Email Address",
                        email: "Please Enter Valid Email Address"
                    },
                    mobile: {
                        required: "Please Enter Your Mobile Number",
                        minlength: "Please Enter 10 Digits Mobile Number",
                        maxlength: "Please Enter 10 Digits Mobile Number"
                    },
                    address: "Please Enter your Address",
                    country: "Please Select country",
                    state: "Please Select state",
                    city: "Please Select city",
                },
            });
            $.validator.addMethod('alphabates', function (value, element) {
                // console.log(value);
                var str = value;
                var patt = new RegExp("^[a-zA-Z ]*$");
                var res = patt.test(str);
                if (patt.test(str)) {
                    return true;
                } else {
                    return false;
                }
            }, 'please Enter Only Alphabates');
        });

        var url = "{{ url('/') }}";
        // var current_company_address = $("#address").val();
        var current_company_country = $("#current_company_country").val();
        var current_company_state = $("#current_company_state").val();
        var current_company_city = $("#current_company_city").val();
        // var current_company_id = $("#current_client_id").val();

        $(document).ready(function () {
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
                        // $("#country").empty();
                        $.each(res, function (key, value) {
                            if (value == current_company_country) {
                                $("#country").append('<option selected value="' + value + '">' + value + '</option>');
                            } else {
                                $("#country").append('<option value="' + value + '">' + value + '</option>');
                            }

                        });
                        var country = $('#country  :selected').val();
                        if (country) {
                            var data = {
                                "country": $('#country  :selected').val(),
                            };
                            $.ajax({
                                type: "POST",
                                data: data,
                                url: url + "/api/states",
                                success: function (res) {
                                    if (res) {
                                        $("#state").empty();
                                        $.each(res, function (key, value) {
                                            if (value == current_company_state) {
                                                $("#state").append('<option selected value="' + value + '">' + value + '</option>');
                                            } else {
                                                $("#state").append('<option value="' + value + '">' + value + '</option>');
                                            }

                                        });

                                        var stat = $('#state  :selected').val();
                                        if (stat) {
                                            var data = {
                                                "state": $('#state  :selected').val(),
                                            };
                                            $.ajax({
                                                data: data,
                                                type: "POST",
                                                url: url + "/api/cities",
                                                success: function (res) {
                                                    if (res) {
                                                        $("#city").empty();
                                                        $("#city").append('<option>Select</option>');
                                                        $.each(res, function (key, value) {
                                                            if (value == current_company_city) {
                                                                $("#city").append('<option selected value="' + value + '">' + value + '</option>');
                                                            } else {
                                                                $("#city").append('<option value="' + value + '">' + value + '</option>');
                                                            }

                                                        });

                                                    } else {
                                                        $("#city").empty();
                                                    }
                                                }
                                            });
                                        } else {
                                            $("#city").empty();
                                        }

                                    } else {
                                        $("#state").empty();
                                    }
                                }
                            });
                        } else {
                            $("#state").empty();
                            $("#city").empty();
                        }


                    } else {
                        $("#country").empty();
                    }
                }
            });
            $('#country').change(function () {
                var countryID = $(this).val();
                var data = {
                    "country": $('#country  :selected').val(),
                };
                if (countryID) {
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: url + "/api/states",
                        success: function (res) {
                            if (res) {
                                $("#state").empty();
                                $.each(res, function (key, value) {
                                    //console.log(value);
                                    $("#state").append('<option value="' + value + '">' + value + '</option>');
                                });

                            } else {
                                $("#state").empty();
                            }
                        }
                    });
                } else {
                    $("#state").empty();
                    $("#city").empty();
                }
            });
            $('#state').change(function () {
                var stateID = $(this).val();
                var data = {
                    "state": $('#state  :selected').val(),
                };
                if (stateID) {
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: url + "/api/cities",
                        success: function (res) {
                            if (res) {
                                $("#city").empty();
                                $.each(res, function (key, value) {
                                    $("#city").append('<option value="' + value + '">' + value + '</option>');
                                });

                            } else {
                                $("#city").empty();
                            }
                        }
                    });
                } else {
                    $("#city").empty();
                }

            });
        });

    </script>


@endpush('scripts')


