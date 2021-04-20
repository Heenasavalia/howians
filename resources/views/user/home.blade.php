@extends('user.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h1>{{Auth::user()->firstname}}</h1>
                <div class="panel-body">
                    <a href="{{url('user/displayallplan')}}">Display Plans</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
