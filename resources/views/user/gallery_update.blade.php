@extends('frontend.layout.front_layout')
@section('content')

<div class="profile_edit_section content-area-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 mb-5">
                <div class="upload_box">
                    <div class="gallery_apply">
                        <div class="small_img"><img src="{{asset('/images/gallery_img.jpg')}}" alt=""></div>
                        <p>Drop your image here, or <a href="#">browse</a><span>Support : JPG, JPEG or Png</span></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="main-corrper">
                    <div class="icon-box">
                        <ul>
                            <li><a href="#">Upload</a></li>
                            <li><a href="#">Crop</a></li>
                            <li><a href="#">Rotate</a></li>
                            <li><a href="#">Flip</a></li>
                            <li><a href="#">Flip</a></li>
                        </ul>
                    </div>
                    <div class="corrper_box">
                        <div class="big_gallery">
                            <div class="small_img mb-3"><img src="{{asset('/images/big_gallery_img.jpg')}}" alt=""></div>
                            <div class="both_btn">
                                <button class="btn button-theme">Save</button>
                                <button class="btn button-theme btn-cancel">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');

    });
</script>
@endpush('scripts')