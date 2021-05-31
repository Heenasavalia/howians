@extends('company.layout.company_layout')
@section('content')

    <div class="pcoded-content client_business_add">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Job Details</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-9">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{$job->title}}</h5>
                                    <span class="text-muted f-14 m-b-10">{{$job->created_at}}</span>
                                    <p class="text-muted m-b-0">{{$job->description}}</p>
                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Desired Skills and Experience :</h4>
                                    <ul class="job-details-list">
                                        <li>
                                            <strong class="d-block">Designation : </strong>{{$job->designation}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Job Category : </strong>{{$job->job_category}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Education : </strong>{{$job->education}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Designation : </strong>{{$job->designation}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Skill : </strong>{{$job->require_skill}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Available Vacancy : </strong>{{$job->number_of_vacancy}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Salary : </strong> {{$job->work_experience}} : {{$job->work_experience}}
                                            @if($job->other_salary_detail != null)
                                            {{$job->other_salary_detail}}
                                            @endif
                                        </li>
                                        <li>
                                            <strong class="d-block">Work Experience : </strong>{{$job->work_experience}},{{$job->work_experiance_type}}
                                        </li>
                                        <li>
                                            <strong class="d-block">gender : </strong>{{$job->gender}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Job Type : </strong>{{$job->job_type}}
                                        </li>
                                        <li>
                                            <strong class="d-block">Work Type : </strong>{{$job->work_type}}
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <button type="button" class="btn btn-primary waves-effect btn-sm waves-light m-r-10 m-t-10 m-b-10">
                                                View Candidates
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-12 col-xl-3">
                            <div class="card job-right-header">
                                <div class="card-header">
                                    <h5>Job Title</h5>
                                    <div class="card-header-right">
                                        <label class="label label-danger">Add</label>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <form action="#">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                            <i class="icofont icofont-email"></i>
                                            </label>
                                            <div>
                                                {{$job->email}}
                                            </div>
                                        </div>
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                            <i class="icofont icofont-location-pin"></i>
                                            </label>
                                            <div>
                                                {{$job->location}}
                                            </div>
                                        </div>
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                            <i class="icofont icofont-location-arrow"></i>
                                            </label>
                                            <div>
                                                {{$job->pincode}}
                                            </div>
                                        </div>
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                            <i class="icofont icofont-location-arrow"></i>
                                            </label>
                                            <div>
                                                {{$job->city .",". $job->state ."," .$job->country}}
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

@endsection
@push('scripts')


@endpush('scripts')
