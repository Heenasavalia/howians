@include('frontend.layout.header')
<div class="profile_edit_section content-area-box">
    <div class="container">
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
                            <h2>Personal Information <a class="btn button-theme" href="#">Save</a></h2>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">First Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Helen">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Last Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Gamez">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Designation</label>
                                        <input type="text" class="form-control" id="" placeholder="Graphic Designer">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Phone No</label>
                                        <input type="text" class="form-control" id="" placeholder="+91 84012 25682">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 mt-5">
                        <form>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="" class="control-label">Address</label>
                                        <input type="text" class="form-control" id="" placeholder="2205 Hill Croft Farm Road Sacramento, CA 95814 ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <input type="text" class="form-control" id="" placeholder="ktadbizthakkar@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Language</label>
                                        <select class="mdb-select">
                                            <option value="" disabled selected>English</option>
                                            <option value="1">Hindi</option>
                                            <option value="2">Gujarati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Birthday</label>
                                        <select class="mdb-select">
                                            <option value="" disabled selected>Birthday</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
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
                        </form>
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
    </div>
</div>
@include('frontend.layout.footer')
<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');
    });
</script>