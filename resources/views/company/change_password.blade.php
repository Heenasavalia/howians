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
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-12 mb-12">
                                            <form method="POST" action="{{ url('company/change-password') }}">
                                                @csrf
                                                @foreach ($errors->all() as $error)
                                                    <p class="text-danger">{{ $error }}</p>
                                                @endforeach

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Current password</label>
                                                    <div class="col-sm-9">
                                                        <input id="password" type="password" class="form-control"
                                                               name="current_password" autocomplete="current-password"
                                                               placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">New Password</label>
                                                    <div class="col-sm-9">
                                                        <input id="new_password" type="password" class="form-control"
                                                               name="new_password" autocomplete="current-password"
                                                               placeholder="Type new Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Confirm Password</label>
                                                    <div class="col-sm-9">
                                                        <input id="new_confirm_password" type="password" class="form-control"
                                                               name="new_confirm_password" autocomplete="current-password"
                                                               placeholder="Reype new Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
