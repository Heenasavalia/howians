@extends('company.layout.company_layout')
@section('content')
    <style>
        img.loder_image {
            top: 50%;
            position: relative;
        }

        .btn_css{
            padding: 4px 12px;
            height: 35px;
        }

        .need_experiance{
            display: none;
        }

    </style>


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


                            <!-- <hr/> -->
                            <h5 class="cls_heading_business"><i class="icofont icofont-user"></i> Job Info</h5>
                            <hr/>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('title') ?  ' has-error' : '' }}">
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
                                    <div class="form-group{{ $errors->has('job_category') ? ' has-error' : '' }} job_category">
                                    <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple" name="job_category" id="job_category">
                                        
                                    </select>
                                   
                                        <small class="text-danger">{{ $errors->first('job_category') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                                        <label for="education" class="block">Education <span class="text-danger">*</span></label>
                                        <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple" name="education" id="education">
                                        
                                        </select>
                                      
                                        <small class="text-danger">{{ $errors->first('education') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                        <label for="designation" class="block">Designation
                                            <span class="text-danger">*</span></label>
                                        {{ Form:: text('designation', '', array("class" => "form-control", 'placeholder' => 'Designation', 'id' => 'designation')) }}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="description" class="block">Job Description <span
                                                class="text-danger">*</span></label>
                                        {{ Form::textarea('description', '', array("class" => "form-control", 'rows'=> '11', 'placeholder' => 'Enter job discription', 'id' => 'discription')) }}
                                        <small class="text-danger">{{ $errors->first('description') }}</small>
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
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 clone-rightside-btn-1 cloneya-wrap job_require_skill">

                                    <label class="require_skill" for="require_skill">Require Skills  <b>[ Note:- Enter eight(8) skill for job ]</b>
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="toclone-widget-right toclone cloneya row time_zone">
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-8 unit">
                                            <div class="form-group {{ $errors->has('require_skill') ? ' has-error' : '' }}">
                                                {{ Form:: text('require_skill[]', '', array("class" => "form-control", 'placeholder' => 'Enter require skill', 'id' => 'require_skill')) }}
                                                <small class="text-danger">{{ $errors->first('require_skill') }}</small>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary clone-btn-right clone btn_css">
                                            <i class="icofont icofont-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-default clone-btn-right delete m-l-5 btn_css">
                                            <i class="icofont icofont-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('number_of_vacancy') ? ' has-error' : '' }}">
                                        <label for="number_of_vacancy">Number of vacancy <span class="text-danger">*</span></label>
                                        <input id="number_of_vacancy" placeholder="Enter number of vacancy" name="number_of_vacancy" type="number_of_vacancy" class="form-control">
                                        <small class="text-danger">{{ $errors->first('number_of_vacancy') }}</small>
                                    </div>
                                </div>

                            </div>



                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="business_label">Select gender?</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('gender[]') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="geneder">
                                            <input name="gender[]" type="checkbox"  class="minimal " checked value="Male">
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
                                    <!-- <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label class="geneder">
                                            <input name="gender[]" type="checkbox" class="minimal" value="All">
                                            All
                                        </label>
                                    </div> -->
                                    <small class="text-danger">{{ $errors->first('gender[]') }}</small>
                                </div>
                            </div>


                            <!-- <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                                        <label class="start_time">Post validity
                                        </label>
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
                            </div> -->
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
                                    <div class="form-group{{ $errors->has('work_experiance_type[]') ? ' has-error' : '' }}">
                                        <label class="col-form-label" for="work_experiance_type">Work Experiance Type <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <label class="work_experiance_type">
                                                    <input name="work_experiance_type" type="radio" class="minimal" checked value="fresher">
                                                    Fresher
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <label class="work_experiance_type">
                                                    <input name="work_experiance_type" type="radio" class="minimal" value="experience">
                                                    Experience
                                                </label>
                                            </div>
                                            <small class="text-danger">{{ $errors->first('work_experiance_type[]') }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group need_experiance  {{ $errors->has('work_experience') ? ' has-error' : '' }}">
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
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="cls_heading_business"><i class="fa fa-calendar-check-o"></i> Interview Detail</h5>
                                    <hr>
                                    <!-- <h4 class="sub-title">Interview Detail</h4> -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 clone-rightside-btn-1 cloneya-wrap interview_time">

                                    <label class="time_schedule" for="time_schedule">Require Time  <b>[ Note:- Enter eight(1) time for job ]</b>
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="toclone-widget-right toclone cloneya row time_zone">
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-8 unit">
                                            <div class="form-group {{ $errors->has('time_schedule') ? ' has-error' : '' }}">
                                            <input class="form-control" name="time_schedule[]" id="time_schedule" type="datetime-local">
                                                <small class="text-danger">{{ $errors->first('time_schedule') }}</small>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary clone-btn-right clone btn_css">
                                            <i class="icofont icofont-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-default clone-btn-right delete m-l-5 btn_css">
                                            <i class="icofont icofont-minus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

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
                                            {{--<option  selected="selected">Select State *</option>--}}
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
                                            {{--<option  selected="selected">Select City *</option>--}}
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
<script type="text/javascript" src="{{ asset('company/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/select2/js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/assets/js/jquery.quicksearch.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/assets/pages/advance-elements/select2-custom.js')}}"></script>

<script type="text/javascript" src="{{ asset('company/assets/pages/j-pro/js/jquery.maskedinput.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/assets/pages/j-pro/js/jquery-cloneya.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('company/assets/pages/j-pro/js/custom/cloned-form.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <!-- <script type="text/javascript" src="{{ asset('company/assets/js/jquery.datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/assets/js/jquery.datetimepicker.full.min.js')}}"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


    <script type="text/javascript">

        var url = '{{ url("/") }}';

        $(document).ready(function(){
            // categories_search();
            // education_search();
            // var categories = $("li.select2-search.select2-search--inline input.select2-search__field").val();
            // $(document).on("keypress",".job_category li.select2-search.select2-search--inline input.select2-search__field",function () {
            //     var categories = $(this).val();
            //     categories_search(categories);
            // });


        // function categories_search(categories = null){
        //     console.log(categories);
            $.ajax({
                type: "post",
                url: url + "/api/categories",
                // data:{query:categories},
                success: function(res) {
                    if (res) {
                        $("#job_category").empty();
                        $.each(res, function(key, value) {
                            // console.log(value);
                            $("#job_category").append('<option value="' + value.name + '">' + value.name + '</option>');
                        });

                    } else {
                        $("#job_category").empty();
                    }
                }
            });
        // }
        // function education_search(education = null){
            // console.log(categories);
            $.ajax({
                type: "post",
                url: url + "/api/education",
                // data:{query:education},
                success: function(res) {
                    if (res) {
                        $("#education").empty();
                        $.each(res, function(key, value) {
                            // console.log(value);
                            $("#education").append('<option value="' + value.field + '">' + value.field + '</option>');
                        });

                    } else {
                        $("#education").empty();
                    }
                }
            });
        // }
    })



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

            var url = "{{ url('/') }}";
            var default_country = 'India';
            // var default_state = '';
            // var default_city = '';
            $.ajax({
                type: "GET",
                url: url + "/api/countries",
                success: function(res) {
                    if (res) {
                        $("#country").empty();
                        $.each(res, function(key, value) {
                            if (value == default_country) {
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

            get_state(default_country);

            $("select#country").change(function() {
                var country = $("#country option:selected").text();
                get_state(country);
            });

            $("select#state").change(function() {
                var state = $("#state option:selected").text();
                get_city


                (state);
            });

            function get_state(country){
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
            }

            function get_city(state){
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
            }

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
                        // alphabates: true,
                    },
                    education: {
                        required: true,
                        // alphabates: true,
                    },
                    designation: {
                        required: true,
                        alphabates: true,
                    },
                    description : {
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
                    minimum_salary :{
                        required: true
                    },
                    maximum_salary :{
                        required: true
                    },
                    number_of_vacancy :{
                        required: true
                    },
                    work_experience :{
                        required: true
                    },
                    email: {
                        required: true,
                        // email: true,
                        // checkEmail: true,
                    },
                    'require_skill[]': {
                        required: true,
                        alphabates: true,
                    },
                    'time_schedule[]': {
                        required: true,
                    }

                },
                messages: {
                    title: {
                        required: "Please Enter Job Title",
                    },
                    job_category: {
                        required: "Please Enter Job Category",
                    },
                    education: {
                        required: "Please Enter Education",
                    },
                    designation: {
                        required: "Please Enter Designation",
                    },
                    description : {
                        required: "Please Enter Discription",
                    },
                    gender : {
                        required: true,
                    },
                    website_url: "Sorry, please Enter URL in Proper Formate",
                    email: {
                        required: "Please Enter Email",
                    },
                    pincode:{
                        required: "Please Enter Pincode"
                    },
                    minimum_salary :{
                        required: "Please Enter Minimum Salary"
                    },
                    maximum_salary :{
                        required: "Please Enter Maximum Salary"
                    },
                    number_of_vacancy :{
                        required: "Please Enter Number Of Vacany"
                    },
                    work_experience :{
                        required: "Please Enter Need Experiance For This Job"
                    },
                    'require_skill[]':{
                        required: "Please Enter Require Skill"
                    },
                    'time_schedule[]':{
                        required: "Please Enter Interview Time"
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

        $("[name=work_experiance_type]").change(function(){
            // console.log(this.val());
            var experiance = $(this).val();
            if(experiance == "experience"){
                $(".need_experiance").show();
            }else{
                $(".need_experiance").hide();

            }
        });

        var interview_time = 0;
        $(".interview_time .clone").click(function(){

            interview_time = interview_time + 1 ;
            if(interview_time >= 2){
                $(".interview_time .clone").attr("disabled","disabled");
            }else{
                $(".interview_time .clone").removeAttr("disabled");
            }
        });
        $(".interview_time .delete").click(function(){
            if(interview_time > 0){
                interview_time = interview_time - 1 ;
                $(".interview_time .clone").removeAttr("disabled");
            }

        });

        var job_require_skill = 0;
        $(".job_require_skill .clone").click(function(){

            if(job_require_skill == 7){
                $(".job_require_skill .clone").attr("disabled","disabled");
            }else{
                $(".job_require_skill .clone").removeAttr("disabled");
            }
            job_require_skill = job_require_skill + 1 ;
            console.log(job_require_skill);
        });
        $(".job_require_skill .delete").click(function(){
            if(job_require_skill > 0){
                job_require_skill = job_require_skill - 1 ;
                $(".job_require_skill .clone").removeAttr("disabled");
            }
            console.log(job_require_skill);

        });

    </script>







@endpush('scripts')
