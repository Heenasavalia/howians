@extends('user.layout.user_layout')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Change Password</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('user/home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        @include('user.layout.flash')
                    </div>
                </div>
                <div class="row">


                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">

                            {{ Form:: open(array('url' => ['user/change-password'],'method'=>'put', 'id' => 'contact_form','files' => true)) }}
                            <meta id="token" name="token" content="{{ csrf_token() }}">

                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group{{ $errors->has('current') ? ' has-error' : '' }}">
                                    {{Form::label('current', 'Old password')}}
{{--                                    {{ Form::password('current', array('id' => 'password', "class" => "form-control")) }}--}}
                                    {{Form::password('current', array("class" => "form-control", 'placeholder' => 'Old password', 'id' => 'oldpassword')) }}
                                    <small class="text-danger">{{ $errors->first('current') }}</small>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {{Form::label('password', 'New password')}}
                                    {{ Form::password('password', array("class" => "form-control", 'placeholder' => 'New password', 'id' => 'newpassword')) }}
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    {{Form::label('password_confirmation', 'Confirm password')}}

                                    {{ Form::password('password_confirmation', array("class" => "form-control", 'placeholder' => 'Confirm password', 'id' => 'confirmpassword')) }}
{{--                                    {{ Form::password('password', array("class" => "form-control", 'placeholder' => 'Confirm password', 'id' => 'confirmpassword')) }}--}}

                                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            {{ Form::submit('Change Password', array('class' => 'btn btn-primary btn-bottom','id'=> 'send' )) }}
                            {{ Form:: close() }}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </section>
        <!-- /.content -->
    </div>

@endsection
