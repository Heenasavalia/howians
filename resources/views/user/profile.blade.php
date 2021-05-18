@include('frontend.layout.header')
<div class="profile_section content-area-box">
    <div class="container">
        <div class="profile_sec">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile_img">
                        <img class="d-block w-100 h-100" src="{{asset('/images/profile_img.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile_data mb-4">
                        <h2>Helen Gamez <span>Graphic Designer</span></h2>
                        <p><i class="fa fa-map-marker"></i> Minibazar, Surat</p>
                        <div class="bookmart_link"><a href="#"><i class="fa fa-bookmark"></i> Bookmark</a></div>
                    </div>
                    <div class="rank_div mb-5">
                        <h3>Rankings</h3>
                        <p>4.5 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                    </div>
                    <ul class="profile_link">
                        <li><a href="#"><i class="fa fa-comment"></i> Send Message</a></li>
                        <li><a href="#"><i class="fa fa-file-text"></i> Report User</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="info_sec mb-5">
                        <h2 class="info_title">WORK</h2>
                        <div class="work_detail">
                            <h3>Adbiz Directory Services Pvt. Ltd.</h3>
                            <p class="blue_color">2 Years Experience | 2019 - 2021</p>
                            <p>4626 Hickory Heights Drive Baltimore, MD 21202</p>
                        </div>
                        <div class="work_detail">
                            <h3>ANP Infotech</h3>
                            <p class="blue_color">3 Years Experience | 2016 - 2019</p>
                            <p>1925 Franklin Avenue Daytona Beach, FL 32114</p>
                        </div>
                    </div>
                    <div class="info_sec mb-4">
                        <h2 class="info_title">Skill</h2>
                        <div class="skill_detail">
                            <ul>
                                <li>Adobe Photoshop</li>
                                <li>Adobe Illustrator</li>
                                <li>Adobe XD</li>
                                <li>Adobe After Effect</li>
                                <li>Corel Draw</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile_tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><i class="fa fa-user"></i> About</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="false"><i class="fa fa-eye"></i> Portfolio</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="personal_details">
                                    <h4>Contact Information</h4>
                                    <ul class="mb-5">
                                        <li><span>Phone : </span><a href="#">+91 12345 67890</a></li>
                                        <li><span>Address : </span>2205 Hill Croft Farm Road Sacramento, CA 95814</li>
                                        <li><span>Email : </span><a href="#">ktadbizthakkar@gmail.com</a></li>
                                        <li><span>Language : </span>English, Hindi, Gujarati</li>
                                    </ul>
                                    <h4>Basic Information</h4>
                                    <ul>
                                        <li><span>Birthday : </span>23 July, 1998</li>
                                        <li><span>Gender : </span>Male</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                                <div class="portfolio_sec">
                                    <ul>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img01.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img02.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img03.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img04.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img05.jpg')}}" alt=""></li>
                                        <li><img class="d-block w-100 h-100" src="{{asset('/images/portfolio_img06.jpg')}}" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card form-box">
            <div class="card-body">
                <h2 id="heading" class="text-center">Profile Update</h2>
                {{ Form:: open(array('url'=>['user/profile/'.Auth::user()->id ],'method'=>'PUT', 'id' => 'profile_update_frm','files' => true, 'class' => 'profile_update_frm form-horizontal commen-form')) }}
                {{ csrf_field() }}
                <div class="form-card row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="control-label">First Name</label>
                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name}}" autofocus>
                            @if ($errors->has('first_name'))
                            <span class="help-block">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="control-label">Last Name</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name}}" autofocus>
                            @if ($errors->has('last_name'))
                            <span class="help-block">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email}}">
                            @if ($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="control-label">Contact Number</label>
                            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ $user->mobile}}">
                            @if ($errors->has('mobile'))
                            <span class="help-block">{{ $errors->first('mobile') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-card row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                @if($user->gender == "male")
                                <option value="male">Male</option>
                                @else
                                <option value="female">Female</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('education_id') ? ' has-error' : '' }}">
                            <label class="business_label" for="education_id">Education</label>
                            <select id="education_id" name="education_id" class="form-control" required="required">
                                @foreach($education as $edu)
                                <option value="{{ $edu->id }}" {{ $edu->id == $user->education_id ? 'selected' : '' }}>{{ $edu->field }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('education_id'))
                            <span class="help-block">{{ $errors->first('education_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <select class="form-control" name="designation" id="designation">
                                @if($user->designation == "fresher")
                                <option value="fresher">Fresher</option>
                                @else
                                <option value="experience">Experience</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="designation_years">
                            <label class="control-label">Years Of Experience</label>
                            <select class="form-control" name="years">
                                <?php $i = 0; ?>
                                @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}" {{ $edu->id == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} country">
                            <label class="control-label">Country</label>
                            <select id="country" name="country" class="form-control js-example-basic-single" required="required">
                                @foreach($country as $con)
                                <option value="{{ $con->id }}" {{ $con->name == $user->country ? 'selected' : '' }}>{{ $con->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('country'))
                            <span class="help-block">{{ $errors->first(' ') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label class="control-label">State</label>
                            <select id="state" name="state" class="form-control js-example-basic-single" required="required">
                                <option selected="selected"> Select State</option>
                            </select>
                            @if ($errors->has('state'))
                            <span class="help-block">{{ $errors->first('state') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label class="control-label">City</label>
                            <select id="city" name="city" class="form-control js-example-basic-single" required="required">
                                <option selected="selected"> Select City</option>
                            </select>
                            @if ($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('profile_image') ? ' has-error' : '' }}">
                            <label class="control-label">Profile Image</label>
                            <img src="{{asset('user/profile_img/'.$user->profile_image)}}" onerror="this.src='';" alt="Profile Image" width="60px">
                            {{ Form:: file('image', array("class" => "form-control", 'id' => 'profile' , 'placeholder' => 'choose Image for Profile')) }}
                            <small class="text-danger">{{ $errors->first('profile_image') }}</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('resume') ? ' has-error' : '' }}">
                            <label class="control-label">Resume Upload</label>
                            <img src="{{asset('user/resume/'.$user->profile_image)}}" onerror="this.src='';" alt="Resume" width="60px">
                            {{ Form:: file('file', array("class" => "form-control", 'id' => 'resume' , 'placeholder' => 'Upload resume')) }}
                            <small class="text-danger">{{ $errors->first('resume') }}</small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-center mt-4">
                            {{ Form::submit('Update Profile', array('class' => 'btn btn-lg button-theme action-button','id'=> 'send' )) }}
                        </div>
                    </div>
                </div>
                {{ Form:: close() }}
            </div>
        </div>
    </div>
</div>
@include('frontend.layout.footer')
<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');
        $(".page_loader").hide();
    });
</script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">
    var url = "{{ url('/') }}";
    $("select#country").change(function() {
        var country = $("#country option:selected").text();
        $.ajax({
            type: "POST",
            url: url + "/api/states",
            data: {
                "country": country
            },
            success: function(res) {
                if (res) {
                    $("#state").empty();
                    $.each(res, function(key1, value1) {
                        // if (value1 == st) {
                        //     $("#state").append('<option selected value="' + value1 + '">' + value1 + '</option>');
                        // } else {
                        $("#state").append('<option value="' + value1 + '">' + value1 + '</option>');
                        // }
                    });
                } else {
                    $("#state").empty();
                }
            }
        });
    });
    $("select#state").change(function() {
        var state = $("#state option:selected").text();
        $.ajax({
            type: "POST",
            data: {
                "state": state
            },
            url: url + "/api/cities",
            success: function(res) {
                if (res) {
                    $("#city").empty();
                    $.each(res, function(key2, value2) {
                        // if (value2 == cty) {
                        //     $("#city").append('<option selected value="' + value2 + '">' + value2 + '</option>');
                        // } else {
                        $("#city").append('<option value="' + value2 + '">' + value2 + '</option>');
                        // }

                    });
                } else {
                    $("#city").empty();
                }
            }
        });
    });
</script>