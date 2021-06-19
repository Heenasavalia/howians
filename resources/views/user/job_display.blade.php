@extends('frontend.layout.front_layout')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>

<div class="container content-area-box">
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $('.start_date').datepicker({autoclose: true,});
    $('.end_date').datepicker({autoclose: true,});
    $("body").addClass('inner-page-section');
});
</script>
@endpush('scripts')
