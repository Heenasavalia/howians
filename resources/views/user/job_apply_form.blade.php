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
        {{ Form:: open(array('url' => "user/submit-job-apply",'method'=>'post', 'files' => true, 'id' => 'job_apply' )) }}
            <meta id="token" name="token" content="{{ csrf_token() }}">
            <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}"/>
            <input type="hidden" name="company_id" id="company_id" value="{{$company_id}}"/>
            <input type="hidden" name="job_id" id="job_id" value="{{$job_id}}"/>
            
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label class="business_label">Business Details</label>
                {{ Form::textarea('description', '', array("class" => "form-control", 'placeholder' => 'Business Details', 'id' => 'description','spellcheck' => 'true' , 'rows' => '5')) }}
                <small class="text-danger">{{ $errors->first('description') }}</small>
            </div>
            <div class="form-group{{ $errors->has('resume') ? ' has-error' : '' }}">
                <input type="file" id="resume" name="resume" class="form-control" value="" placeholder="Upload Your Resume Here. *" />

                @if ($errors->has('resume'))
                <span class="help-block">
                    <strong>{{ $errors->first('resume') }}</strong>
                </span>
                @endif
            </div>
           
            <div class="col-12 form-group mb-0">
                <button type="submit" class="item-btn btn btn-warning">Apply</button>
            </div>
        {{ Form:: close() }}
    </div>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script> -->

<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#job_apply").validate({
            errorElement: 'span',
            errorClass: 'help-block',
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            rules: {
                    description: {
                        required: true
                    },
                    resume: {
                        required: true,
                        accept: "application/pdf"
                    },
            },
            messages: {
                description:"Please Enter your Description",
                resume:"Please Enter Only Document",
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
@endpush('scripts')
