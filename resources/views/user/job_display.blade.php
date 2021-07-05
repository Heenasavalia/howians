@extends('frontend.layout.front_layout')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

<div class="container content-area-box">
    <div class="row m-0">
        <div class="col-lg-3 col-md-12 left-listing"></div>
        <div class="col-lg-9 col-md-12 right-listing">
            <div class="jobs_box">
                <div class="candidate-item media">
                    <div class="candidate-listing d-flex flex-wrap">
                        <div class="user-logo">
                            <a class="icon" href="#"><img src="{{asset('user/img/logos/black-logo.png')}}"></a>
                        </div>
                        <div class="candidate_right">
                            <h4 class="title"><a href="#">Fablead Developer</a><span class="sub_title">laravel Developer</span><span class="label">Full time</span></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> India <strong>Surat</strong> <i>30 min ago</i></li>
                            </ul>
                        </div>
                        <div class="candidate_label">
                            <ul>
                                <li>Salary:<strong>$12:00 to $24:00</strong></li>
                                <li>Opening Position:<strong>12</strong></li>
                                <li>Experience:<strong>2 year</strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="div-right">
                        <p>opening position</p>
                        <h3>laravel Developer</h3>
                        <a href="#" class="btn button-theme btn-lg apply-button">Apply Now!</a>
                    </div>
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
        $('.start_date').datepicker({
            autoclose: true,
        });
        $('.end_date').datepicker({
            autoclose: true,
        });
        $("body").addClass('inner-page-section');
    });
</script>
@endpush('scripts')