@extends('company.layout.auth')

@section('content')
    @include('company.layout.loader')
    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material" role="form" method="POST" action="{{ url('/company/register') }}">
                        {{ csrf_field() }}
                        <div class="text-center logotext">
                            HOWIANS
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} form-primary">
                                    <input id="name" type="text" placeholder="Your Name" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                                    <span class="form-bar"></span>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-primary">
                                    <input id="email" type="email" placeholder="Your Email Address" class="form-control" name="email" value="{{ old('email') }}">
                                    <span class="form-bar"></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-primary">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                            <span class="form-bar"></span>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} form-primary">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                            <span class="form-bar"></span>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="{{ url('/company/login') }}"><b class="f-w-600">Already A Member ? Login</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>



@endsection
