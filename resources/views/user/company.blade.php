@extends('user.layout.auth')

@section('content')
<div class="container content-area-box">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2 id="heading">Company profile</h2>
            <h5>Company Name: <span>{{$data->company_name}}</span></h5>
            <h6>Owner Name: <span>{{$data->first_name}} {{$data->last_name}}</span></h6>
            <p>Company Contact: <span>{{$data->mobile}}</span></p>
            <p>Company Email: <span>{{$data->email}}</span></p>
            <p>Company Address: <span>{{$data->address}}</span></p>
            <p>Company Country: <span>{{$data->country}}</span></p>
            <p>Company State: <span>{{$data->state}}</span></p>
            <p>Company City: <span>{{$data->city}}</span></p>
            <p>Number Of Employee: <span>{{$data->no_of_employees}}</span></p>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
@endpush('scripts')