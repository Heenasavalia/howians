@extends('user.layout.auth')

@section('content')

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h1>{{Auth::user()->firstname}}</h1>
                <div class="panel-body">
                    <a href="{{url('user/displayallplan')}}">Display Plans</a>
                </div>
                @foreach($plans as $plan)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$plan->name}}</h5>
                        @foreach($plan->fetures as $feature)
                            <p class="card-text">{{$feature->name}}</p>
                        @endforeach
                        <h6 class="card-subtitle mb-2 text-muted">{{$plan->price}}</h6>
                        {{ Form:: open(array('url' => "/user/select_plan",'method'=>'post', 'id' => 'plans')) }}
                        <input type="hidden" name="id" value="{{$plan->id}}">
                            <div class="input-group date">
                                <input type="text" class="form-control start_date" id="start_date" name="start_time" autocomplete="off">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                            <div class="input-group date">
                                <input type="text" class="form-control end_date" id="end_date" name="end_time" autocomplete="off">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        {{ Form::submit('Active Plan', array('class' => 'btn btn-primary','id'=> 'send' )) }}
                        {{ Form:: close() }}
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
    $('.start_date').datepicker({autoclose: true,});
    $('.end_date').datepicker({autoclose: true,});
});
</script>
@endpush('scripts')
