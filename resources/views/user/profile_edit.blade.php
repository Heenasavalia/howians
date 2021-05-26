@extends('user.layout.user_layout')
@section('content')
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="profile_edit_section content-area-box">
    <div class="container">
    {{ Form:: open(array('url'=>['user/profile/'.Auth::user()->id ],'method'=>'PUT', 'id' => 'profile_update_frm','files' => true, 'class' => 'profile_update_frm')) }}
    {{ csrf_field() }}
        <div class="profile_edit_sec mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile_img">
                            <img class="d-block w-100 h-100" src="{{asset('/images/profile_img.jpg')}}" alt="">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="pro_edit_title mb-5">
                            <h2>Personal Information {{ Form::submit('Save', array('class' => 'btn button-theme','id'=> 'send' )) }}</h2>
                        </div>
                        <!-- <form> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">First Name</label>
                                        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name}}" autofocus>
                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Last Name</label>
                                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name}}" autofocus>
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Headline</label>
                                        <input id="headline" type="text" class="form-control" name="headline" value="{{ $user->headline}}" autofocus>
                                        @if ($errors->has('headline'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('headline') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Designation</label>
                                        <input id="designation" type="text" class="form-control" name="designation" value="{{ $user->designation}}" autofocus>
                                        @if ($errors->has('designation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('designation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Phone No</label>
                                        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ $user->mobile}}">
                                        @if ($errors->has('mobile'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                    <div class="col-md-12 mt-5">
                        <!-- <form> -->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="" class="control-label">Address</label>
                                        <textarea id="address" type="text" class="form-control" name="address" value="{{ $user->address}}"></textarea>
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <input id="email" type="text" class="form-control" name="email" value="{{ $user->email}}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Language</label>
                                        <input type="text" name="language_know" placeholder="Lnguage Know" class="language-input form-control tm-input-info"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Birthday</label>
                                        <input id="datepicker" width="276" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Gender</label>
                                        <select class="mdb-select">
                                            <option value="" disabled selected>Male</option>
                                            <option value="1">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_edit_sec mb-4">
            <div class="card-body">
                <div class="pro_edit_title mb-5">
                    <h2>Professional Information <a class="plus_edit" href="#"><i class="fa fa-plus"></i></a></h2>
                </div>
                <div class="row mb-4 form_padding_right">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Company Name</label>
                            <input type="text" class="form-control" id="" placeholder="ANP Infotech">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Start</label>
                            <select class="mdb-select">
                                <option value="" disabled selected>2021</option>
                                <option value="1">2020</option>
                                <option value="2">2019</option>
                                <option value="3">2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">End</label>
                            <select class="mdb-select">
                                <option value="" disabled selected>2021</option>
                                <option value="1">2020</option>
                                <option value="2">2019</option>
                                <option value="3">2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Address</label>
                            <input type="text" class="form-control" id="" placeholder="2205 Hill Croft Farm Road Sacramento, CA 95814 ">
                        </div>
                    </div>
                    <div class="deleted_icon">
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
                <div class="row form_padding_right">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Company Name</label>
                            <input type="text" class="form-control" id="" placeholder="Adbiz directory services pvt. ltd.">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Start</label>
                            <select class="mdb-select">
                                <option value="" disabled selected>2021</option>
                                <option value="1">2020</option>
                                <option value="2">2019</option>
                                <option value="3">2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">End</label>
                            <select class="mdb-select">
                                <option value="" disabled selected>2021</option>
                                <option value="1">2020</option>
                                <option value="2">2019</option>
                                <option value="3">2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Address</label>
                            <input type="text" class="form-control" id="" placeholder="2205 Hill Croft Farm Road Sacramento, CA 95814">
                        </div>
                    </div>
                    <div class="deleted_icon">
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_edit_sec mb-4">
            <div class="card-body">
                <div class="pro_edit_title mb-5">
                    <h2>Skill <a class="plus_edit" href="#"><i class="fa fa-plus"></i></a></h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group icon-input">
                            <input type="text" class="form-control" id="" placeholder="Adobe Photoshop">
                            <i class="fa fa-times-circle"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group icon-input">
                            <input type="text" class="form-control" id="" placeholder="Adobe Illustrator">
                            <i class="fa fa-times-circle"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group icon-input">
                            <input type="text" class="form-control" id="" placeholder="Adobe After Effects ">
                            <i class="fa fa-times-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_edit_sec">
            <div class="card-body">
                <div class="pro_edit_title mb-5">
                    <h2>Portfolio <a class="plus_edit" href="#"><i class="fa fa-plus"></i></a></h2>
                </div>
                <div class="portfolio_sec">
                    <ul>
                        <li>
                            <img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img01.jpg')}}" alt="">
                            <div class="gallery_icon">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </div>
                        </li>
                        <li>
                            <img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img02.jpg')}}" alt="">
                            <div class="gallery_icon">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </div>
                        </li>
                        <li>
                            <img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img03.jpg')}}" alt="">
                            <div class="gallery_icon">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </div>
                        </li>
                        <li>
                            <img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img04.jpg')}}" alt="">
                            <div class="gallery_icon">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </div>
                        </li>
                        <li>
                            <img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img05.jpg')}}" alt="">
                            <div class="gallery_icon">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    {{ Form:: close() }}
    </div>
</div>
@endsection
@push('scripts')
<!-- @include('frontend.layout.footer') -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');
    });
    $(".language-input").tagsManager();
    $('.datepicker').datepicker();
</script>
@endpush('scripts')