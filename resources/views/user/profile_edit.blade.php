@extends('frontend.layout.front_layout')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

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
                        <div class="pro_edit_title mb-3">
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
                    <div class="col-md-12 mt-3">
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
                                        <input class="form-control" type="date" name="birth_date" id="datepicker" width="276" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Gender</label>
                                        <select class="mdb-select" name="gender" >
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                            <option value="ohter">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_edit_sec mb-4 work_div">
            <div class="card-body append_work_ex">
                <div class="pro_edit_title mb-4">
                    <h2>Professional Information <a class="plus_edit" href="javascript:void(0);"><i class="fa fa-plus"></i></a></h2>
                </div>
                <div class="row mb-4 form_padding_right work_expericne">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Company Name</label>
                            <input type="text" name="company_name[]" class="form-control" id="" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Start Date</label>
                            <input class="form-control" type="date" name="start_time[]" id="datepicker1" width="276" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">End</label>
                            <input class="form-control" type="date" name="end_time[]" id="datepicker2" width="276" />                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Address</label>
                            <input type="text" name="company_add[]" class="form-control" id="" placeholder="Company Address Here">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Designation</label>
                            <input type="text" name="work_designation[]" class="work_designation-input form-control tm-input-info" id="" placeholder="Company Work Designation">
                        </div>
                    </div>
                    <div class="deleted_icon">
                        <a class="minus_trash" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_edit_sec mb-4">
            <div class="card-body">
                <div class="pro_edit_title mb-4">
                    <h2>Skill</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group icon-input">
                            <input type="text" name="skilles" class="skill-input form-control tm-input-info" id="" placeholder="type here your skills">
                        </div>
                    </div>
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
                <div class="pro_edit_title mb-4">
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>

<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');
        
    });
    $(".language-input").tagsManager(); //skill-input
    $(".skill-input").tagsManager(); //work_designation-input
    $(".work_designation-input").tagsManager(); //work_experience
    $( ".plus_edit" ).on( "click", function() {
        var html = "";
        html = '<div class="row mb-4 form_padding_right work_expericne">\n'+
                    '<div class="col-md-6">\n'+
                        '<div class="form-group">\n'+
                            '<label for="" class="control-label">Company Name</label>\n'+
                            '<input type="text" name="company_name[]" class="form-control" id="" placeholder="Company Name">\n'+
                        '</div>\n'+
                    '</div>\n'+
                    '<div class="col-md-3">\n'+
                        '<div class="form-group">\n'+
                            '<label for="" class="control-label">Start</label>\n'+
                            '<input type="date" name="start_time[]" id="datepicker1" width="276" />\n'+
                        '</div>\n'+
                    '</div>\n'+
                    '<div class="col-md-3">\n'+
                        '<div class="form-group">\n'+
                            '<label for="" class="control-label">End</label>\n'+
                            '<input type="date" name="end_time[]" id="datepicker2" width="276" />\n'+
                        '</div>\n'+
                    '</div>\n'+
                    '<div class="col-md-6">\n'+
                        '<div class="form-group">\n'+
                            '<label for="" class="control-label">Address</label>\n'+
                            '<input type="text" name="company_add[]" class="form-control" id="" placeholder="Company Address Here">\n'+
                        '</div>\n'+
                    '</div>\n'+
                    '<div class="col-md-6">\n'+
                        '<div class="form-group">\n'+
                            '<label for="" class="control-label">Designation</label>\n'+
                            '<input type="text" name="work_designation[]" class="work_designation-input form-control tm-input-info" id="" placeholder="Company Work Designation">\n'+
                        '</div>\n'+
                    '</div>\n'+
                    '<div class="deleted_icon">\n'+
                        '<a class="minus_trash" href="javascript:void(0);"><i class="fa fa-trash"></i></a>\n'+
                    '</div>\n'+
                '</div>';
        $('.work_div .append_work_ex').append(html);
        
        $( "div.work_expericne div.deleted_icon" ).on( "click",function() {
            var del_div = $(this).parent();
            $(del_div).remove();
        });

        $(".work_expericne").each(function(){
            var manager = $(this).children('div:nth-child(5)');
            manager.find(".work_designation-input").tagsManager(); //work_experience
        });
        // $(".work_designation-input").tagsManager();

    });

   
    
</script>
@endpush('scripts')