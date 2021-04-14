@extends('company.layout.main_layout')
@section('content')
<div class="content-body">
			<div class="container-fluid">
				<div class="row">
                    @foreach($company_plans as $plans)
					<div class="col-xl-3 col-xxl-4 col-lg-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6">
                                <div class="card  flex-lg-column flex-md-row ">
                                    <div class="card-body card-body  text-center border-bottom profile-bx">
                                        <h4 class="fs-22 text-black mb-1">$5 / Day</h4>
                                        <p class="mb-0">Basic Plan</p>
                                    </div>
                                    <div class="card-body  border-left">
                                        <div class="mb-3 text-center">
                                            <span class="text-black">3 Jobs Posting</span>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <span class="text-black">4 Featured jobs</span>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <span class="text-black">2 Renew Jobs</span>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <span class="text-black">64 Days Visibility</span>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <span class="text-black">Email Alert</span>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button type="button" class="btn btn-rounded btn-primary">Primary</button>
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
@endsection
@push('scripts')
@endpush