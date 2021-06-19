@extends('content.layout.auth')

@section('content')
<div class="container-fluid content-area-box">
    <div class="row justify-content-center">
        <div class="col-11 col-md-6 col-xl-4 text-center">
            <div class="card px-0 pt-4 pb-0 form-box">
                <h2 id="heading">Reset Password</h2>
                <form class="form-horizontal commen-form" role="form" method="POST" action="{{ url('/company/password/reset') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="E-Mail Address" autofocus>
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
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn action-button">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
