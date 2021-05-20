@extends('user.layout.auth')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-lg-7 col-md-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3 form-box">
                <h2 id="heading">Company profile</h2>
                <div></div>
                <h2>Company Name: <span>{{$data->company_name}}</span></h2>
                <h3>Owner Name: <span>{{$data->first_name}} {{$data->last_name}}</span></h3>
                <h4>Company Contact: <span>{{$data->mobile}}</span></h4>
                <h4>Company Email: <span>{{$data->email}}</span></h4>
                <h4>Company Address: <span>{{$data->address}}</span></h4>
                <h4>Company Country: <span>{{$data->country}}</span></h4>
                <h4>Company State: <span>{{$data->state}}</span></h4>
                <h4>Company City: <span>{{$data->city}}</span></h4>
                <h4>Number Of Employee: <span>{{$data->no_of_employees}}</span></h4>
            </div>
        </div>
        @endsection
        @push('scripts')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script type="text/javascript">
          
        </script>
        @endpush('scripts')