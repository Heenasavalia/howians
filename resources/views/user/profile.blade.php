@extends('user.layout.auth')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <h1>profile update</h1>
        {{ Form:: open(array('url'=>['user/user/'.Auth::user()->id ],'method'=>'PUT', 'id' => 'profile_update_frm','files' => true, 'class' => 'profile_update_frm')) }}
            {{ csrf_field() }}
                <div class="form-card">
                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label for="first_name" class="col-md-4 control-label">First Name</label>
                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" autofocus>

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label for="last_name" class="col-md-4 control-label">Last Name</label>

                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" autofocus>

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label for="mobile" class="col-md-4 control-label">Contact Number</label>

                        <div class="col-md-6">
                            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">

                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div> 
                
                <div class="form-group">
                    <div class="col-md-6">
                            <label class="control-label">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                </select>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('education_id') ? ' has-error' : '' }}">
                            <label class="business_label" for ="education_id">Education</label>
                            <select id="education_id" name="education_id"  class="form-control" required="required">

                            </select>
                            @if ($errors->has('education_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('education_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Designation</label>
                            <select class="form-control" name="designation" id="designation">
                                    <option value="fresher">Fresher</option>
                                    <option value="experience">Experience</option>
                            </select>
                    </div>
                </div>
                <div class="form-group" id="designation_years">
                    <div class="col-md-6">
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
                <div class="form-group">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                    <label class="control-label">Country</label>
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} country">
                            <select id="country" name="country"  class="form-control js-example-basic-single" required="required">
                                <option  selected="selected">Select state</option>
                            </select>
                            @if ($errors->has('country'))
                            <span class="help-block">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                    <label class="control-label">State</label>
                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <select id="state" name="state"  class="form-control js-example-basic-single" required="required">
                                <option selected="selected"> Select State</option>
                            </select>
                            @if ($errors->has('state'))
                            <span class="help-block">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                    <label class="control-label">City</label>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <select id="city" name="city"  class="form-control js-example-basic-single" required="required">
                                <option  selected="selected"> Select City</option>
                            </select>
                            @if ($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('profile_image') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Profile  Image</label>
                    <div class="col-md-6">
                        <img src="{{asset('profile_img/')}}" onerror="this.src='';" alt="Profile Image" width="60px">
                        {{ Form:: file('image', array("class" => "form-control", 'id' => 'profile' , 'placeholder' => 'choose Image for Profile')) }}
                        <small class="text-danger">{{ $errors->first('profile_image') }}</small>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('resume') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Resume Upload</label>
                    <div class="col-md-6">
                        <img src="{{asset('resume/')}}" onerror="this.src='';" alt="Resume" width="60px">
                        {{ Form:: file('file', array("class" => "form-control", 'id' => 'resume' , 'placeholder' => 'Upload resume')) }}
                        <small class="text-danger">{{ $errors->first('resume') }}</small>
                    </div>
                </div>
                {{ Form::submit('Update Profile', array('class' => 'btn btn-primary m-b-0','id'=> 'send' )) }}
                {{ Form:: close() }}
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
 
</script>
@endpush('scripts')
