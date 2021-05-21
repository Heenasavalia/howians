@include('frontend.layout.header')
<div class="profile_edit_section content-area-box">
    <div class="container">
        <div class="profile_edit_sec">
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
                            <h2>Personal Information</h2>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">First Name</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Last Name</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Designation</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Phone No</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 mt-3">
                        <form>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="" class="control-label">Address</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Language </label>
                                        <select class="mdb-select">
                                            <option value="" disabled selected>Language</option>
                                            <option value="1">English</option>
                                            <option value="2">Hindi</option>
                                            <option value="3">Gujarati</option>
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
                                            <option value="" disabled selected>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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