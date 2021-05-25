@extends('user.layout.auth')

@section('content')

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>
<style>
.main_div {
    border: 1px solid #cfcfcf;
    width: 100%;
    float: left;
    padding: 10px;
}
.main_div .com_img {
    width: 25%;
    float: left;
}
.main_div .com_img img {
    width: 100%;
}
.main_div .com_name {
    width: 50%;
    float: left;
}
.main_div .com_designation {
    width: 25%;
    float: left;
}
.com_n_with ul {
    padding: 0px;
    list-style-type: none;
}
.com_n_with ul li {
    display: inline;
    margin: 10px;
}
.com_location ul {
    padding: 0px;
    list-style-type: none;
}
.com_location ul li {
    display: inline;
    margin: 10px;
}
.sal_position {
    width: 100%;
    float: left;
}
.sal_position ul {
    padding-left: 0px;
}
.sal_position ul li {
    list-style-type: none;
    display: inline;
    margin: 0px 10px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <div class="main_div">
                <div class="com_img">
                    <img src="{{asset('user/img/logos/black-logo.png')}}">
                </div>
                <div class="com_name">
                    <div class="com_n_with">
                        <ul>
                            <li>Fablead Developer</li>
                            <li>Full time</li>
                        </ul>
                    </div>
                    <div class="com_location">
                        <ul>
                            <li>India</li>
                            <li>Surat</li>
                        </ul>
                    </div>
                </div>
                <div class="com_designation">
                    <span>opening position</span>
                    <p>laravel Developer</p>
                    <button>Apply Now</button>
                </div>
                <div class="sal_position">
                    <ul>
                        <li><span>Salary:</span>$12:00 to $24:00</li>|
                        <li><span>Opening Position:</span>12</li>|
                        <li><span>Experience:</span>2 year</li>
                    </ul>
                </div>
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
