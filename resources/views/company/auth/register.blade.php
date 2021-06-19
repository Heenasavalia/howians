@extends('company.layout.auth')
<section class="register-section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card company_register">
                    <div class="card-body">
                        <h2 id="heading">Complete Your details <a class="company_login" href="{{ url('/company/login') }}">Sign in</a></h2>
                        {{ Form:: open(array('url' => "/company/register", 'name'=>"com_registration",'method'=>'post', 'id' => 'company_reg','class'=>"form-horizontal commen-form px-0")) }}
                        <meta id="token" name="token" content="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                    <label for="" class="control-label">Company name</label>
                                    <input id="company_name" type="text" class="form-control" name="company_name" placeholder="Company name">
                                    @if ($errors->has('company_name'))
                                    <span class="help-block">{{ $errors->first('company_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label for="" class="control-label">Mobile No</label>
                                    <input id="mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile No">
                                    @if ($errors->has('mobile'))
                                    <span class="help-block">{{ $errors->first('mobile') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="" class="control-label">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                    @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gst_number" class="control-label radio_label">Do you have GST Number?</label>
                                    <div class="form-check form-check-inline mr-5">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="mdb-select">
                                        <option value="" disabled selected>Country</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="mdb-select">
                                        <option value="" disabled selected>State</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="mdb-select">
                                        <option value="" disabled selected>City</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="" class="control-label">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="" class="control-label">Confirm password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check checkbox-input mb-3">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">I agree to the <a href="{{url('/terms')}}">Terms & Conditions</a></label>
                                    </div>
                                    <div class="form-check checkbox-input">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">I agree to share my KYC documents with Shine</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    {{ Form::submit('Create Account',array("class" => "action-button btn btn-primary btn-lg", 'id' => 'send')) }}
                                </div>
                            </div>
                        </div>
                        {{ Form:: close() }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card company_reg_right">
                    <h2>Howians Starter Plan</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Job Packges</label>
                                <select class="mdb-select">
                                    <option value="" disabled selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="totla_price">
                        <h3>You pay: <span>Rs.50</span></h3>
                        <h4>You save:Rs.100</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script type="text/javascript">
    var url = '{{ url("/") }}';

    $(document).ready(function() {
        $("#company_reg").validate({
            errorElement: 'div',
            errorClass: 'text-danger',
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            errorPlacement: function(error, element) {
                $(element).closest('.form-group').append(error);
                //error.appendTo();
            },
            rules: {
                company_name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                    checkEmail: true,
                },

            },
            messages: {
                company_name: {
                    required: "Please enter company name",
                },
                email: {
                    required: "Please enter valid Email",
                },

            },
            submitHandler: function(form) {
                form.submit();
            }
        });


        $.validator.addMethod('alphabates', function(name) {
            var str = name;
            var patt = new RegExp("^[a-zA-Z .]*$");
            var res = patt.test(str);
            if (patt.test(str)) {
                return true;
            } else {
                return false;
            }
        }, 'please Enter Only Alphabates');


    });
</script>
@endpush