@extends('user.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h1>{{Auth::user()->firstname}}</h1>
                <a href="{{ url('/user/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a>
                <div class="panel-body">
                    <a href="{{url('user/displayallplan')}}">Display Plans</a>
                    <a href="{{url('user/profile/'.Auth::user()->id)}}">update profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
