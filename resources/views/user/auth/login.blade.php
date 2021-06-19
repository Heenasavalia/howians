@extends('user.layout.auth')

@section('content')
<div class="container-fluid content-area-box">
    <div class="row justify-content-center">
        <div class="col-11 col-md-6 col-xl-3 text-center">
            <div class="card px-0 pt-4 form-box">
                <h2 id="heading">User ogin</h2>
                <form class="form-horizontal commen-form" role="form" method="POST" action="{{ url('/user/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus placeholder="Enter your email">
                        @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 text-left"><div class="checkbox">
                            <label><input type="checkbox" name="remember"> <span>Remember me</span></label>
                        </div></div>
                        <div class="col-md-6 text-right"><a class="btn btn-link" href="{{ url('/user/password/reset') }}"> Forgot Password?</a></div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn action-button">Sign in</button>
                        <div class="new-account mt-3">
                            <p><a href="{{ url('/user/register') }}">Create New Account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection