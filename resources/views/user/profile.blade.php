@extends('user.layout.auth')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
   
        <h1>profile update</h1>
        {{ Form:: open(array('url'=>['user/profile/'.Auth::user()->id ],'method'=>'PUT', 'id' => 'profile_update_frm','files' => true, 'class' => 'profile_update_frm')) }}
            {{ csrf_field() }}
                <div class="form-card">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name}}" autofocus>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name}}" autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email}}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Contact Number</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ $user->mobile}}">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="form-group">
                    <div class="col-md-6">
                            <label class="control-label">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                @if($user->gender == "male")
                                    <option value="male">Male</option>
                                @else
                                    <option value="female">Female</option>
                                @endif
                                </select>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('education_id') ? ' has-error' : '' }}">
                            <label class="business_label" for ="education_id">Education</label>
                            <select id="education_id" name="education_id"  class="form-control" required="required">
                                @foreach($education as $edu)
                                        <option value="{{ $edu->id }}" {{ $edu->id == $user->education_id ? 'selected' : '' }}>{{ $edu->field }}</option>
                                @endforeach
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
                            @if($user->designation == "fresher")
                                <option value="fresher">Fresher</option>
                            @else
                                <option value="experience">Experience</option>
                            @endif
                            </select>
                    </div>
                </div>
                <div class="form-group" id="designation_years">
                    <div class="col-md-6">
                        <label class="control-label">Years Of Experience</label>
                            <select class="form-control" name="years">
                                <?php $i = 0; ?>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}" {{ $edu->id == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                    <label class="control-label">Country</label>
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} country">
                            <select id="country" name="country"  class="form-control js-example-basic-single" required="required">
                            @foreach($country as $con)
                                <option value="{{ $con->id }}" {{ $con->name == $user->country ? 'selected' : '' }}>{{ $con->name }}</option>
                            @endforeach
                            </select>
                            @if ($errors->has('country'))
                            <span class="help-block">
                                <strong>{{ $errors->first(' ') }}</strong>
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
                <div class="col-md-6">
                <div class="form-group {{ $errors->has('profile_image') ? ' has-error' : '' }}">
                    <label class="control-label">Profile  Image</label>
                        <img src="{{asset('user/profile_img/'.$user->profile_image)}}" onerror="this.src='';" alt="Profile Image" width="60px">
                        {{ Form:: file('image', array("class" => "form-control", 'id' => 'profile' , 'placeholder' => 'choose Image for Profile')) }}
                        <small class="text-danger">{{ $errors->first('profile_image') }}</small>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group {{ $errors->has('resume') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Resume Upload</label>
                        <img src="{{asset('user/resume/'.$user->profile_image)}}" onerror="this.src='';" alt="Resume" width="60px">
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">
var url = "{{ url('/') }}";
    $("select#country").change(function(){
        var country = $( "#country option:selected" ).text();
        $.ajax({
            type: "POST",
            url: url + "/api/states",
            data: {"country":country},
            success: function (res) {
                if (res) {
                    $("#state").empty();
                    $.each(res, function (key1, value1) {
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
    $("select#state").change(function(){
        var state = $( "#state option:selected" ).text();
        $.ajax({
            type: "POST",
            data: {"state":state},
            url: url + "/api/cities",
            success: function (res) {
                if (res) {
                    $("#city").empty();
                    $.each(res, function (key2, value2) {
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

</script>
@endpush('scripts')
