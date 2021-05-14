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
                                    <h4>Plan Select</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('company/home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                    @foreach($company_plans as $plans)
					<div class="col-xl-3 col-xxl-4 col-lg-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6">
                                <div class="card  flex-lg-column flex-md-row ">
                                    <div class="card-body card-body  text-center border-bottom profile-bx">
                                        <h4 class="fs-22 text-black mb-1"><i class="fa fa-inr" aria-hidden="true"></i> {{$plans->price}} / Day</h4>
                                        <p class="mb-0">{{$plans->name}}</p>
                                    </div>
                                    <div class="card-body  border-left">
                                        @foreach($plans->fetures as $feture)
                                            <div class="mb-3 text-center">
                                                <span class="text-black">{{$feture->name}}</span>
                                            </div>
                                        @endforeach
                                        <div class="mb-3 text-center">
                                            @if($company->plan_status == 'Active')
                                                <a type="button" class="btn btn-rounded btn-primary {{$company->plan_status}}" href="{{url('/company/plan-update/' . $plans->id)}}">{{($company->is_select_plan == 1 && $company->pricing_plan_id == $plans->id) ? "Selected" : "Select"}}</a>
                                            @else
                                                <a type="button" class="btn btn-rounded btn-primary {{$company->plan_status}}" href="{{url('/company/plan-update/' . $plans->id)}}">{{($company->is_select_plan == 1 && $company->pricing_plan_id == $plans->id) ? "Reactivate" : "Select"}}</a>
                                            @endif
                                        </div>

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
