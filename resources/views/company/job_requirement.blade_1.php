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
                                <h4 class="card-title">Form step</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 mb-12">
                                        <div class="form-group">
                                            <label class="block">Job title</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Job title" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="block">Type of job</label>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="job_type[]"
                                                    id="part_time" value="part_time" checked="">
                                                <label class="form-check-label" for="check1">Part time</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="job_type[]"
                                                    id="full_time" value="full_time">
                                                <label class="form-check-label" for="check2">Full time</label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input type="checkbox" class="form-check-input" name="job_type[]"
                                                    id="freelacer" value="freelacer" disabled="">
                                                <label class="form-check-label" for="check3">Freelacer</label>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Min. Salary"
                                                    name="minimum_salary">
                                            </div>
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="Max. Salary"
                                                    name="maximum_salary">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Education</label>
                                            <select multiple class="form-control default-select" id="sel2">
                                                <option>10 pass</option>
                                                <option>12 pass</option>
                                                <option>Greduate</option>
                                                <option>Post greduate</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Experiance required</label>

                                            <label class="radio-inline mr-3"><input type="radio"
                                                    name="work_experiance_type" value="fresher"> Fresher</label>
                                            <label class="radio-inline mr-3"><input type="radio"
                                                    name="work_experiance_type" value="experienced"> Experienced</label>

                                        </div>
                                        <div class="form-row experiance_type">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="min_experiance"
                                                    placeholder="Min. Experiance">
                                            </div>
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <input type="text" class="form-control" name="max_experiance"
                                                    placeholder="Max. Experiance">
                                            </div>888888888888888888888888
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Education</label>

                                            <label class="radio-inline mr-3"><input type="radio"
                                                    name="work_experiance_type" value="fresher"> Fresher</label>
                                            <label class="radio-inline mr-3"><input type="radio"
                                                    name="work_experiance_type" value="experienced"> Experienced</label>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label class="block">job type sub categories</label>
                                            <textarea class="form-control" rows="4"
                                                id="comment">laravel,css,html,jquery</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label class="block">job discription</label>
                                            <textarea class="form-control" rows="4"
                                                id="comment">Need a graduate (B. Sc IT, BCA, B. Tech) who knows basics of HTML and CSS development. Will need a training certificate or proof of experience or portfolio to be shown.</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <label class="block">job timing</label>

                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-2">
                                        <h4>Monday *</h4>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input1"
                                                id="input1">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input2"
                                                id="input2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-2">
                                        <h4>Tuesday *</h4>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input3"
                                                id="input3">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input4"
                                                id="input4">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-2">
                                        <h4>Wednesday *</h4>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input5"
                                                id="input5">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input6"
                                                id="input6">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-2">
                                        <h4>Thrusday *</h4>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input7"
                                                id="input7">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input8"
                                                id="input8">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-2">
                                        <h4>Friday *</h4>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input9"
                                                id="input9">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input10"
                                                id="input10">
                                        </div>
                                    </div>
                                </div>
                                <div class="row emial-setup">
                                    <div class="col-lg-12 col-sm-12 col-6">
                                        <div class="form-row">
                                            <label class="block">Interview Information</label>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Country</label>
                                                <select class="form-control" id="country" name="country">
                                                    <option value="">-- Country --</option>
                                                    <!-- <option>12 pass</option>
                                                    <option>Greduate</option>
                                                    <option>Post greduate</option>
                                                    <option>5</option> -->
                                                </select>
                                                <!-- <input type="" class="form-control" placeholder="Email"> -->
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>State</label>
                                                <select class="form-control" id="state" name="state">
                                                    <option value="">-- State --</option>
                                                    <!--  <option>12 pass</option>
                                                     <option>Greduate</option>
                                                     <option>Post greduate</option>
                                                     <option>5</option> -->
                                                </select>
                                                <!-- <input type="password" class="form-control" placeholder="Password"> -->
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>City</label>
                                                <select class="form-control" id="city" name="city">
                                                    <option value="">-- City --</option>
                                                    <!-- <option>12 pass</option>
                                                    <option>Greduate</option>
                                                    <option>Post greduate</option>
                                                    <option>5</option> -->
                                                </select>
                                                <!-- <input type="text" class="form-control"> -->
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group mb-0">
                                                <label>Is work from home available? : </label>
                                                <label class="radio-inline mr-3"><input type="radio"
                                                        name="optradio">Yes</label>
                                                <label class="radio-inline mr-3"><input type="radio"
                                                        name="optradio">No</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="skip-email text-center">
                                            <p>Or if want skip this step entirely and setup it later</p>
                                            <a href="javascript:void(0)">Skip step</a>
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
<!-- <link href="{{ asset('plugins/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}" rel='stylesheet' /> -->

<!-- <script src="{{asset('/company/plugins/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}" type="text/javascript"></script> -->
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
    // $('#state').select2({
    //     width: '100%'
    // });
    // $('#city').select2({
    //     width: '100%'
    // });
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
                // var country = $('#country  :selected').val();
                // if (country) {
                //     var data = {
                //         "country": $('#country  :selected').val(),
                //     };
                //     $.ajax({
                //         type: "POST",
                //         data: data,
                //         url: url + "/api/states",
                //         success: function (res) {
                //             if (res) {
                //                 $("#state").empty();
                //                 $.each(res, function (key, value) {
                //                     if (value == current_client_business_state) {
                //                         $("#state").append('<option selected value="' + value + '">' + value + '</option>');
                //                     } else {
                //                         $("#state").append('<option value="' + value + '">' + value + '</option>');
                //                     }

                //                 });

                //                 var stat = $('#state  :selected').val();
                //                 if (stat) {
                //                     var data = {
                //                         "state": $('#state  :selected').val(),
                //                     };
                //                     $.ajax({
                //                         data: data,
                //                         type: "POST",
                //                         url: url + "/api/cities",
                //                         success: function (res) {
                //                             if (res) {
                //                                 $("#city").empty();
                //                                 $("#city").append('<option>Select</option>');
                //                                 $.each(res, function (key, value) {
                //                                     if (value == current_client_business_city) {
                //                                         $("#city").append('<option selected value="' + value + '">' + value + '</option>');
                //                                     } else {
                //                                         $("#city").append('<option value="' + value + '">' + value + '</option>');
                //                                     }

                //                                 });

                //                             } else {
                //                                 $("#city").empty();
                //                             }
                //                         }
                //                     });
                //                 } else {
                //                     $("#city").empty();
                //                 }

                //             } else {
                //                 $("#state").empty();
                //             }
                //         }
                //     });
                // } else {
                //     $("#state").empty();
                //     $("#city").empty();
                // }
            } else {
                $("#country").empty();
            }
        }
    });
    // // get state
    // $('#country').change(function(){
    //     var countryID  = $(this).val();
    //     var data = {
    //         "country" : $('#country  :selected').val(),
    //     };
    //     if(countryID){
    //         $.ajax({
    //             data:data,
    //             type:"POST",
    //             url: url+"/api/states",
    //             success:function(res){
    //                 if(res){
    //                     $("#state").empty();
    //                     $("#state").append('<option>Select</option>');
    //                     $.each(res,function(key,value){
    //                         //console.log(value);
    //                         $("#state").append('<option value="'+value+'">'+value+'</option>');
    //                     });

    //                 }else{
    //                     $("#state").empty();
    //                 }
    //             }
    //         });
    //     }else{
    //         $("#state").empty();
    //         $("#city").empty();
    //     }
    // });
    // $('#state').change(function(){
    //     var stateID = $(this).val();
    //     var data = {
    //         "state" : $('#state  :selected').val(),
    //     };
    //     if(stateID){
    //         $.ajax({
    //             data:data,
    //             type:"POST",
    //             url: url+"/api/cities",
    //             success:function(res){
    //                 if(res){
    //                     $("#city").empty();
    //                     $("#city").append('<option>Select</option>');
    //                     $.each(res,function(key,value){
    //                         $("#city").append('<option value="'+value+'">'+value+'</option>');
    //                     });

    //                 }else{
    //                     $("#city").empty();
    //                 }
    //             }
    //         });
    //     }else{
    //         $("#city").empty();
    //     }
    // });

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