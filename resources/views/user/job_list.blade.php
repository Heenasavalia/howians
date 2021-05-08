@extends('user.layout.auth')

@section('content')

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>
<div class="container">
    <div class="row">
    @if($data != null)
    @foreach($data as $d)
        <div class="col-md-12">
            <div class="main_div">
                <div class="com_logo"></div>
                <div class="desc">
                    <div class="des_div">
                        <h3>{{$d->company->company_name}}</h3>
                        <p>{{$d->company->address}}</p>
                        <?php $com_id = $d->company->id; ?>
                        
                        <a href="{{url('user/apply-job/'.$com_id.'/'.$d->id)}}"><button>Apply</button></a>
                        <a href="{{url('user/review/'.$com_id.'/'.$d->id)}}"><button>Review</button></a>
                        <a href="{{url('user/company-profile/'.$com_id)}}"><button>Profile View</button></a>
                        <a href="{{url('user/msg-send-mail/'.$com_id)}}"><button>Message / Mail</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @else
    @endif
    </div>
</div>

@endsection
@push('scripts')
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

</script>
@endpush('scripts')
