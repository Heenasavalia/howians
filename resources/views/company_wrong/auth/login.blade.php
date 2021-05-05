@extends('company.layout.auth')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('/company/bower_components/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/company/assets/icon/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/company/assets/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/company/assets/css/style.css')}}">


<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/login') }}">
                {{ csrf_field() }}

                <div class="auth-box card">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center">Sign In</h3>
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus required="" placeholder="Your Email Address">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>


{{--                        <div class="form-group form-primary">--}}
{{--                            <input type="text" name="email" class="form-control" required="" placeholder="Your Email Address">--}}
{{--                            <span class="form-bar"></span>--}}
{{--                        </div>--}}
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" required="" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-primary">
                            <input type="password" name="password" class="form-control" required="" placeholder="Password">
                            <span class="form-bar"></span>
                        </div>
                        <div class="row m-t-25 text-left">
                            <div class="col-12">
                                <div class="checkbox-fade fade-in-primary d-">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span class="text-inverse">Remember me</span>
                                    </label>
                                </div>
                                <div class="forgot-phone text-right f-right">
                                    <a href="{{ url('/company/password/reset') }}" class="text-right f-w-600"> Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="text-inverse text-left m-b-0">Thank you.</p>
                                <p class="text-inverse text-left"><a href="http://howians.com/"><b class="f-w-600">Back to website</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('company/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('company/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{ asset('company/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{ asset('company/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('company/assets/js/common-pages.js')}}"></script>
@endpush
