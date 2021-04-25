@extends('company.layout.auth')

@section('content')
<div class="container">
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">


                <div class="authincation h-100">
                    <div class="container h-100">
                        <div class="row justify-content-center h-100 align-items-center">
                            <div class="col-md-12">
                                <div class="authincation-content">
                                    <div class="row no-gutters">
                                        <div class="col-xl-12">
                                            <div class="auth-form">
                                                <div class="text-center mb-3">
                                                    <a href="index.html"><img src="{{asset('public/company/images/logo-full.png')}}" alt=""></a>
                                                </div>
                                                <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/login') }}">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label class="mb-1 text-white"><strong>Email</strong></label>
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    
                                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label class="mb-1 text-white"><strong>Password</strong></label>
                                                    
                                                        <input id="password" type="password" class="form-control" name="password">

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>


                                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                                        <div class="form-group">
                                                        <div class="custom-control custom-checkbox ml-1 text-white">
                                                                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                                <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <a class="text-white" href="{{ url('/company/password/reset') }}">Forgot Password?</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                                    </div>
                                                </form>
                                                <div class="new-account mt-3">
                                                    <p class="text-white mb-0">Don't have an account? <a class="text-white" href="{{ url('/company/register') }}">Sign up</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
