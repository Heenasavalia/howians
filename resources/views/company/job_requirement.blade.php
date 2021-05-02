    @extends('company.layout.main_layout')
    @section('content')
    <!-- <link href="{{ asset('plugins/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel='stylesheet' /> -->

    <!-- <link href="{{asset('/company/plugins/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css')}}" rel="stylesheet" type="text/css"/> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />


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
                                            <a href="{{ url('client/home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Design Wizard</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code>
                                        tag</span>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="wizard3">
                                                <section>
                                                    <form method="post" class="wizard-form" id="design-wizard" action="#">
                                                        <h3></h3>
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="job-title" class="block">Job
                                                                        Title</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="title" id="title"
                                                                        class="form-control" placeholder="Job title"
                                                                        required>

                                                                </div>
                                                            </div>
                                                            <div class=" form-group row">

                                                                <label class="col-sm-2 col-form-label"
                                                                    for="type-of-job">Type of job</label>
                                                                <div class="col-sm-10">
                                                                    <div class="border-checkbox-section">
                                                                        <div
                                                                            class="border-checkbox-group border-checkbox-group-primary">
                                                                            <input class="border-checkbox"
                                                                                type="checkbox" name="job_type[]"
                                                                                id="part_time">
                                                                            <label class="border-checkbox-label"
                                                                                for="part_time">Part time</label>
                                                                        </div>
                                                                        <div
                                                                            class="border-checkbox-group border-checkbox-group-primary">
                                                                            <input class="border-checkbox"
                                                                                type="checkbox" name="job_type[]"
                                                                                id="full_time">
                                                                            <label class="border-checkbox-label"
                                                                                for="full_time">Full time</label>
                                                                        </div>
                                                                        <div
                                                                            class="border-checkbox-group border-checkbox-group-primary">
                                                                            <input class="border-checkbox"
                                                                                type="checkbox" name="job_type[]"
                                                                                id="freelacer">
                                                                            <label class="border-checkbox-label"
                                                                                for="freelacer">Freelacer</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="type-of-job"
                                                                        class="block">Salary</label>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Min. Salary">
                                                                </div>
                                                                <div class="col-sm-6 mt-2 mt-sm-0">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Max. Salary">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Education</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control"
                                                                        name="education">
                                                                        <option value="opt1">Select One Value Only
                                                                        </option>
                                                                        <option value="opt2">Type 2</option>
                                                                        <option value="opt3">Type 3</option>
                                                                        <option value="opt4">Type 4</option>
                                                                        <option value="opt5">Type 5</option>
                                                                        <option value="opt6">Type 6</option>
                                                                        <option value="opt7">Type 7</option>
                                                                        <option value="opt8">Type 8</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"
                                                                    for="experiance-required">Experiance
                                                                    required</label>
                                                                <div class="col-sm-10">
                                                                    <div class="form-radio">
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="work_experiance_type"
                                                                                    checked="checked" id="fresher"
                                                                                    value="fresher">
                                                                                <i class="helper"></i>Fresher
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="work_experiance_type"
                                                                                    id="experienced"
                                                                                    value="experienced">
                                                                                <i class="helper"></i>Experienced
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-6">
                                                                            <input type="text" class="form-control"
                                                                                name="min_experiance"
                                                                                placeholder="Min. Experiance">
                                                                        </div>
                                                                        <div class="col-sm-6 mt-2 mt-sm-0">
                                                                            <input type="text" class="form-control"
                                                                                name="max_experiance"
                                                                                placeholder="Max. Experiance">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </fieldset>
                                                        <h3></h3>
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="job_category" class="block">Job
                                                                        Category</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control" rows="4"
                                                                        id="job_category"
                                                                        name="job_category">laravel,css,html,jquery</textarea>

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="discription" class="block">Job
                                                                        Discription</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control" rows="4"
                                                                        id="discription"
                                                                        name="discription">Need a graduate (B. Sc IT, BCA, B. Tech) who knows basics of HTML and CSS development. Will need a training certificate or proof of experience or portfolio to be shown.</textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <h3></h3>
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-sm-2">
                                                                    <label for="working_days" class="block">Working
                                                                        Days</label>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input id="working_days" name="working_days"
                                                                        type="text" class="form-control required">
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label for="job_timings" class="block">Job
                                                                        Timings</label>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input id="job_timings" name="job_timings"
                                                                        type="text" class="form-control required">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label for="extra_timing_details"
                                                                        class="block">extra timing details</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control" rows="4"
                                                                        id="extra_timing_details"
                                                                        name="extra_timing_details">Need a graduate (B. Sc IT, BCA, B. Tech) who knows basics of HTML and CSS development. Will need a training certificate or proof of experience or portfolio to be shown.</textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <label for="Company-2" class="block">Company
                                                                                Name</label>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <input id="Company-23" name="Company name"
                                                                                type="text"
                                                                                class="form-control required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <label for="contact_name"
                                                                                class="block">Recruiter's
                                                                                Name</label>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <input id="contact_name" name="contact_name"
                                                                                type="text"
                                                                                class="form-control required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <label for="contact_number"
                                                                                class="block">Contact
                                                                                Number</label>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <input id="contact_number"
                                                                                name="contact_number" type="text"
                                                                                class="form-control required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <label for="contact_email"
                                                                                class="block">Contact
                                                                                email</label>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <input id="contact_email"
                                                                                name="contact_email" type="text"
                                                                                class="form-control required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <h3></h3>
                                                        <fieldset>
                                                            <h4 class="sub-title">Interview address </h4>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <input id="interview_address"
                                                                        name="interview_address" type="text"
                                                                        class="form-control required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label>Country</label>
                                                                    <select class="form-control" id="country"
                                                                        name="country">
                                                                        <option value="">-- Country --</option>

                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>State</label>
                                                                    <select class="form-control" id="state"
                                                                        name="state">
                                                                        <option value="">-- State --</option>

                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>City</label>
                                                                    <select class="form-control" id="city" name="city">
                                                                        <option value="">-- City --</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </section>
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
    <!--<link href="{{ asset('plugins/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}" rel='stylesheet' />-->

    <!--<script src="{{asset('/company/plugins/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}" type="text/javascript"></script>-->
    <!-- <script src="{{asset('/company/plugins/vendor/jquery-validation/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/company/js/plugins-init/jquery.validate-init.js')}}" type="text/javascript"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <script type="text/javascript">
// console.log(other_cat_array);
$(document).ready(function() {

    var url = "{{url('/')}}";

    $('#country').select2({
        width: '100%'
    });
    $('#state').select2({
        width: '100%'
    });
    $('#city').select2({
        width: '100%'
    });
    // $('#category_id').select2({
    //     width: '100%'
    // });
    // var s2 = "";
    // $('#other_category_id').select2({
    //     width: '100%',
    //     tags: ["cooking facilities Appliances", "for services rendered", "Electronics", "Automotive"],
    // });
    // $('#other_category_id').val(other_cat_array);

    $.ajax({
        type: "GET",
        url: url + "/api/countries",
        success: function(res) {
            if (res) {
                $("#country").empty();
                $.each(res, function(key, value) {
                    $("#country").append('<option value="' + value + '">' + value +
                        '</option>');
                });
            } else {
                $("#country").empty();
            }
        }
    });
    // // get state
    $('#country').change(function() {
        var countryID = $(this).val();
        var data = {
            "country": $('#country  :selected').val(),
        };
        if (countryID) {
            $.ajax({
                data: data,
                type: "POST",
                url: url + "/api/states",
                success: function(res) {
                    if (res) {
                        $("#state").empty();
                        $("#state").append('<option>Select</option>');
                        $.each(res, function(key, value) {
                            //console.log(value);
                            $("#state").append('<option value="' + value + '">' +
                                value + '</option>');
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
    $('#state').change(function() {
        var stateID = $(this).val();
        var data = {
            "state": $('#state  :selected').val(),
        };
        if (stateID) {
            $.ajax({
                data: data,
                type: "POST",
                url: url + "/api/cities",
                success: function(res) {
                    if (res) {
                        $("#city").empty();
                        $("#city").append('<option>Select</option>');
                        $.each(res, function(key, value) {
                            $("#city").append('<option value="' + value + '">' +
                                value + '</option>');
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

    // // console.log(other_category);
    // $.ajax({
    //     type: "GET",
    //     url: url + "/api/categories",
    //     success: function (res) {
    //         if (res) {
    //             $("#category_id").empty();
    //             $("#other_category_id").empty();
    //             $.each(res, function (key, value) {
    //                 if (key == current_category) {
    //                     $("#category_id").append('<option value="' + key + '" selected>' + value + '</option>');
    //                 }
    //                 else {
    //                     $("#category_id").append('<option value="' + key + '">' + value + '</option>');
    //                 }
    //                 // if()
    //                 // $("#category_id").append('<option value="' + key + '">' + value + '</option>');
    //                 $("#other_category_id").append('<option value="' + key + '">' + value + '</option>');
    //             });
    //         } else {
    //             $("#category_id").empty();
    //             $("#other_category_id").empty();
    //         }
    //     }
    // });

    // other_cat_array.forEach(function(e){
    //     if(!s2.find('option:contains(' + e + ')').length)
    //         s2.append($('<option>').text(e));
    // });
});
    </script>

    @endpush