@include('frontend.layout.header')
<div class="plan_section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h2 class="panel-heading text-center">The Right Plan for Your Business</h2>
                    <p class="text-center mb-5">We have several powerful plans to showcase your business and get discovered as a creative entrepreneurs. Everything you need.</p>
                    <div class="main-card">
                        @foreach($plans as $plan)
                        <div class="card">
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
    </div>
</div>
@include('frontend.layout.footer')

<script >
 $(document).ready(function() {
    $("body").addClass('inner-page-section');
});
</script>
