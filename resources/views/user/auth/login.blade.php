@extends('user.layout.auth')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-md-6 col-xl-4 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3 form-box">
                <h2 id="heading">Login</h2>
                <form class="form-horizontal commen-form" role="form" method="POST" action="{{ url('/user/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                        @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> <span>Remember Me</span></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn action-button">Login</button>
                        <a class="btn btn-link" href="{{ url('/user/password/reset') }}">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection