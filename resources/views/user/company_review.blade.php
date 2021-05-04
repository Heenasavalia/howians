@extends('user.layout.auth')

@section('content')
<style>
.rate {
    float: left;
    color: #c9c9c9;
    cursor: pointer;
}
.rate-item {
    float: left;
    cursor: pointer;
    margin: 0 5px 0 5px;
}
i.fa.fa-star {
    font-size: 18px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="rate-wrapper">
            <div class="rate-label">Your overall rating of this listing</div>
            <div class="rate">
                <div id="1" class="rate-item"><i class="fa fa-star"
                                                    aria-hidden="true"></i></div>
                <div id="2" class="rate-item"><i class="fa fa-star"
                                                    aria-hidden="true"></i></div>
                <div id="3" class="rate-item"><i class="fa fa-star"
                                                    aria-hidden="true"></i></div>
                <div id="4" class="rate-item"><i class="fa fa-star"
                                                    aria-hidden="true"></i></div>
                <div id="5" class="rate-item"><i class="fa fa-star"
                                                    aria-hidden="true"></i></div>
            </div>
        </div>
        {{ Form:: open(array('url' => "user/submit-rating",'method'=>'post', 'id' => 'rating_form' )) }}
            <meta id="token" name="token" content="{{ csrf_token() }}">
            <input type="hidden" name="rate" id="rate"/>
            <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}"/>
            <input type="hidden" name="company_id" id="company_id" value="{{$company_id}}"/>
            <input type="hidden" name="job_id" id="job_id" value="{{$job_id}}"/>
            
            <div id="email_block_ratting_form" class="temp-sm-6 form-group">
                <textarea type="text" placeholder="Description" class="form-control description" name="description"></textarea>
            </div>
            <div class="col-12 form-group mb-0">
                <button type="submit" class="item-btn btn btn-warning">Submit Your Review </button>
            </div>
        {{ Form:: close() }}
    </div>
</div>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.rate-wrapper').on('click', '.rate .rate-item', function () {
            var self = $(this), target = self.parent('.rate');
            target.addClass('selected');
            target.find('.rate-item').removeClass('active');
            self.addClass('active');
            var rate = $(this).attr("id");
            $("#rate").val(rate);
        });
    });
</script>
@endpush('scripts')
