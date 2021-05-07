@extends('company.layout.auth')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-md-6 col-xl-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3 form-box">
                    <h2 id="heading">Register</h2>

                    {{ Form:: open(array('url' => "/company/register", 'name'=>"com_registration",'method'=>'post', 'id' => 'company_reg','class'=>"form-horizontal commen-form")) }}
                    <meta id="token" name="token" content="{{ csrf_token() }}">


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="control-label">First Name</label>
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" autofocus placeholder="First name*">
                                @if ($errors->has('first_name'))
                                    <span class="help-block">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="control-label">Last Name</label>
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" autofocus placeholder="Last name*">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                <label for="company_name" class="control-label">Company Name</label>
                                <input id="company_name" type="text" class="form-control" name="company_name"  autofocus placeholder="Company name*">
                                @if ($errors->has('company_name'))
                                    <span class="help-block">{{ $errors->first('company_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('gst_number') ? ' has-error' : '' }}">
                                <label for="gst_number" class="control-label">Gst number</label>
                                <input id="gst_number" type="text" class="form-control" name="gst_number" autofocus placeholder="Gst number*">
                                @if ($errors->has('gst_number'))
                                    <span class="help-block">{{ $errors->first('gst_number') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address*">
                                @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="mobile" class="control-label">mobile number</label>
                                <input id="mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile number*">
                                @if ($errors->has('mobile'))
                                    <span class="help-block">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password*">
                                @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="control-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password*">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="action-button" id="send">Register</button>
                            </div>
                            <div class="new-account mt-3">
                                <p>Have an account?<a href="{{ url('/company/login') }}"> Sign in</a></p>
                            </div>
                        </div>
                    </div>
                    {{ Form:: close() }}
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            console.log("right one");
            $("#company_reg").validate({
                // Specify validation rules
                rules: {
                    first_name: {required: true},
                    last_name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    first_name: {
                        required: "Please enter First name"
                    },
                    email: {
                        required: "Please enter valid Email",
                    },
                    // mobile: {
                    //     required: "Please enter Mobile Number",
                    //     minlength: "Please Enter 10 Digits Mobile Number",
                    //     maxlength: "Please Enter 10 Digits Mobile Number"
                    // },
                },

            });
        });
    </script>

@endpush
