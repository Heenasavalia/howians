@extends('user.layout.auth')
@section('content')
<div class="container-fluid content-area-box">
    <div class="row justify-content-center">
        <div class="col-11 col-md-6 col-xl-3">
            <div class="card px-0 pt-4 form-box">
                <h2 id="heading">Change Password</h2>
                <!-- Main content -->
                <div class="col-xl-12">
                    @include('user.layout.flash')
                </div>
                {{ Form:: open(array('url' => ['user/change-password'],'method'=>'put', 'id' => 'contact_form', 'class' => 'commen-form','files' => true)) }}
                <meta id="token" name="token" content="{{ csrf_token() }}">

                <div class="form-group{{ $errors->has('current') ? ' has-error' : '' }}">
                    {{Form::label('current', 'Old password')}}
                    {{-- {{ Form::password('current', array('id' => 'password', "class" => "form-control")) }}--}}
                    {{Form::password('current', array("class" => "form-control", 'placeholder' => 'Old password', 'id' => 'oldpassword')) }}
                    <small class="text-danger">{{ $errors->first('current') }}</small>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{Form::label('password', 'New password')}}
                    {{ Form::password('password', array("class" => "form-control", 'placeholder' => 'New password', 'id' => 'newpassword')) }}
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    {{Form::label('password_confirmation', 'Confirm password')}}

                    {{ Form::password('password_confirmation', array("class" => "form-control", 'placeholder' => 'Confirm password', 'id' => 'confirmpassword')) }}
                    {{-- {{ Form::password('password', array("class" => "form-control", 'placeholder' => 'Confirm password', 'id' => 'confirmpassword')) }}--}}

                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                </div>
                <div class="form-group text-center">
                    {{ Form::submit('Change Password', array('class' => 'btn action-button','id'=> 'send' )) }}
                </div>
                {{ Form:: close() }}
            </div>
        </div>
    </div>
</div>

@endsection
