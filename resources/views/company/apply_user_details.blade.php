@extends('company.layout.company_layout')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Dashboard</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                    @foreach($get_user as $plans)
					<div class="col-xl-3 col-xxl-4 col-lg-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6">
                                <div class="card  flex-lg-column flex-md-row ">
                                    <div class="card-body card-body  text-center border-bottom profile-bx">
                                        <h4 class="fs-22 text-black mb-1">{{$plans->id}} / Day</h4>
                                        <p class="mb-0">{{$plans->company_id}}</p>
                                        <p class="mb-0">{{$plans->job_id}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush
