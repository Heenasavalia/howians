@extends('content.layout.auth')
<!-- Main Content -->
@section('content')
    @include('content.layout.loader')

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="md-float-material form-material" role="form" method="POST" action="{{ url('/content/password/email') }}">
                        {{ csrf_field() }}
                        <div class="text-center logotext">
                            Adbiz Directory
                        </div>

                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left">Recover your password</h3>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-primary">
                                    <input id="email" type="email" class="form-control" placeholder="Your Email Address" name="email" value="{{ old('email') }}">
                                    <span class="form-bar"></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
                                    </div>
                                </div>
                                <p class="text-inverse text-right"><a href="{{ url('/content/login') }}"><b class="f-w-600">Back to Login.</b></a></p>

                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection
