@extends('company.layout.company_layout')
@section('content')
<style>
.user-head {
    background-color: #404e67 !important;
}
</style>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Company Messages</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('company/messages') }}">All Messages</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Messages</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        @include('company.layout.flash')
                                    </div>
                                </div>

                                <div class="card-block email-card">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="user-head row">
                                                <div class="user-face">
                                                    <!-- <img class="img-fluid" src="{{ asset('images/adbizlogo1.png') }}" alt="Theme-Logo"/>
                                                    <span style="color: #ffffff;">Howians</span> -->
                                                    <img class="img-fluid" src="{{asset('front_end/images/logo.png')}}" alt="Company Logo">
                                                    <!-- <h5 style="color: #ffffff;">Howians</h5> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-header-text">About Message</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div id="view-info" class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <form>
                                                                <table class="table table-responsive m-b-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="social-label b-none p-t-0">Created Date :-
                                                                            </th>
                                                                            <td class="social-user-name b-none p-t-0 text-muted">
                                                                                {{ date('d M Y h:i a', strtotime($message->created_at)) }}
                                                                            </td>
                                                                        </tr>

                                                                        <tr>

                                                                        </tr>
                                                                    
                                                                        <tr>
                                                                            <th class="social-label b-none">Message :-</th>
                                                                            <td class="social-user-name b-none text-muted">
                                                                                {{ ucfirst($message->message)}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-header-text">Basic Information</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div id="view-info" class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <form>
                                                                <table class="table table-responsive m-b-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="social-label b-none p-t-0">Full Name :-
                                                                            </th>
                                                                            <td class="social-user-name b-none p-t-0 text-muted">
                                                                                {{ ucfirst($message->user->first_name) . ' ' . ucfirst($message->user->last_name)}}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="social-label b-none">Gender :-</th>
                                                                            <td class="social-user-name b-none text-muted">{{ ucfirst($message->user->gender)}}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th class="social-label b-none p-b-0">Location :-</th>
                                                                            <td class="social-user-name b-none p-b-0 text-muted">
                                                                                {{ ucfirst($message->user->city) . ', ' . ucfirst($message->user->state) . ', ' . ucfirst($message->user->country)}}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-header-text">Contact Information</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div id="view-info" class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <form>
                                                                <table class="table table-responsive m-b-0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="social-label b-none p-t-0">Mobile Number :-</th>
                                                                        <td>
                                                                            <a href="tel:{{$message->user->mobile}}" style="color: #8ebf42">
                                                                                {{$message->user->mobile}}
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th class="social-label b-none">Email Address :-</th>
                                                                        <td>
                                                                            <a href="mailto:{{$message->user->email}}" style="color: #8ebf42">
                                                                                {{$message->user->email}}
                                                                            </a>
                                                                        </td>

                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                            <a>Back to Message</a>
                                            <a>replay Message</a>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
