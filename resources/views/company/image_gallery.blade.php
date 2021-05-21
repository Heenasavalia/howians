@extends('company.layout.company_layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('company/bower_components/cropper/css/cropper.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('company/bower_components/lightbox2/css/lightbox.min.css')}}">
<link href="{{ asset('css/jquery.magnify.css') }}" rel="stylesheet">

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Company Gallery</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('company/home') }}">Home</a>
                                    </li>

                                    <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Company Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">

                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Company Gallery</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-9 ">
                                            <div class="img-container">
{{--                                                <input type="hidden" name="company_id" id="current_company_id" value="{{Auth::user()->id}}" />--}}

                                                <input type="hidden" id="company_id" value="{{Auth::user()->id}}"  class="company_id" />

                                                <img id="image" src="{{ asset('images/company_default.png') }}" alt="Crop Picture">
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="docs-preview clearfix">
                                                <div class="img-preview preview-lg"></div>
                                                <div class="img-preview preview-md"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 docs-buttons button-page  form-group">
                                            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                                        </div>
                                                        <div class="modal-body"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.html">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn-group">

                                                <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                                    <input type="hidden" name="business_image_pre" id="business_image_pre">
                                                    <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Upload image file">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                </label>

                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Zoom In">
                                                        <span class="fa fa-search-plus"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Zoom Out">
                                                        <span class="fa fa-search-minus"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Move Left">
                                                        <span class="fa fa-arrow-left"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Move Right">
                                                        <span class="fa fa-arrow-right"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Move Up">
                                                        <span class="fa fa-arrow-up"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Move Down">
                                                        <span class="fa fa-arrow-down"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Rotate Left">
                                                        <span class="fa fa-rotate-left"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Rotate Right">
                                                        <span class="fa fa-rotate-right"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Flip Horizontal">
                                                        <span class="fa fa-arrows-h"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Flip Vertical">
                                                        <span class="fa fa-arrows-v"></span>
                                                    </span>
                                                </button>
                                            </div>

                                            <button type="button" class="btn btn-primary" data-method="submitTo">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="Submit">
                                                    Submit
                                                </span>
                                            </button>
                                            <a href="{{ url('company/photo_gallery') }}" class="btn btn-primary text-white m-l-9">
                                                Cancel
                                            </a>
                                            <div id="inputImage-error" class="inputImageError text-danger"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="loder_image_submit" style="display: none;">
                                                <img src="{{asset('images/form_submit.gif')}}" alt="" class="loder_image">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="card-header">
                                    <h5>View Company Gallery</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row gallary_content">

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
    <script src="{{ asset('js/jquery.magnify.js') }}"></script>
<script type="text/javascript" src="{{ asset('company/bower_components/lightbox2/js/lightbox.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $("[data-magnify=gallery]").magnify();
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("body").addClass("client_bussiness_gallery_masonry");
    })
    var url = "{{ url('/') }}";
    function delete_row(id) {

    swal({
            title: "Are you sure!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function() {
            $.ajax({
                url: url +'/company/gallery/'+id,
                type : "post",
                data: {_method: 'delete', _token: "{{ csrf_token() }}"},
                success: function (data) {
                    console.log(data);
                    //if(data == true){
                        swal({title: "Success", text: "Company image has been Deleted!", type: "success"});
                        display_gallary();
                        /*window.location.reload();*/
                    //}else{
                    //    swal("Error!", "Something went Wrong", "error");
                    //}
                }
            });
        });
    }




    function display_gallary(){
        var company_id = "{{ Auth::user()->id }}";
        // console.log(company_id);
        $.ajax({
            url: url+"/company/image_crop_gallary",
            type: "POST",
            data: {"company_id":company_id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $(".gallary_content").empty();
                if (data.length === 0) {
                    $(".gallary_content").append("<div style='margin:2% auto;'><img src='" + url + "/images/not-found.png'/></div>");
                } else {
                    $.each(data, function (index, value) {
                        $(".gallary_content").append('<div class="gallery_view col-md-3">\n' +
                            '   <div class="btn btn-danger actionGallery" onclick="delete_row(' + value.id + ')"><i class="icofont icofont-ui-delete"></i></div>\n' +
                            '              <a data-magnify="gallery" href="{{config('constants.company_gallery')}}' + value.image + '" data-lightbox="1" data-title="Company Image">\n' +
                            '                  <img src="{{config('constants.company_gallery')}}' + value.image + '" alt="" class="img-fluid img-thumbnail">\n' +
                            '              </a>\n' +
                            '  </div>');
                    })
                }
            }
        });
    }
    $(document).ready(function(){
        display_gallary();
    });
</script>




<script src="{{ asset('company/bower_components/cropper/js/cropper.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">


        var url = "{{ url('/') }}";
        $(function() {
            var console = window.console || { log: function() {} };
            var URL = window.URL || window.webkitURL;
            var $image = $('#image');
            var company_id = $("#company_id").val();

            // console.log(company_id);


            var $download = $('#download');
            var $dataX = $('#dataX');
            var $dataY = $('#dataY');
            var $dataHeight = $('#dataHeight');
            var $dataWidth = $('#dataWidth');
            var $dataRotate = $('#dataRotate');
            var $dataScaleX = $('#dataScaleX');
            var $dataScaleY = $('#dataScaleY');
            var file_type = "";
            var options = {
                aspectRatio: 4 / 3,
                preview: '.img-preview',
                zoomable: true,
                zoomOnTouch: false,
                minCropBoxWidth: 450,
                minCropBoxHeight: 450,
                // fillColor: '#fff',
                // imageSmoothingEnabled: false,
                // imageSmoothingQuality: 'high',
                // background: '#fff',
                crop: function(e) {
                    $dataX.val(Math.round(e.x));
                    $dataY.val(Math.round(e.y));
                    $dataHeight.val(Math.round(e.height));
                    $dataWidth.val(Math.round(e.width));
                    $dataRotate.val(e.rotate);
                    $dataScaleX.val(e.scaleX);
                    $dataScaleY.val(e.scaleY);
                },
                ondragend: function(data) {
                    var originalData = $image.cropper("getCroppedCanvas");
                }

            };
            var originalImageURL = $image.attr('src');
            var uploadedImageURL;
            var update_cropped_link;
            var originalData;
            // Cropper
            $image.on({
                'build.cropper': function(e) {
                    /* console.log(e.type);*/
                },
                'built.cropper': function(e) {
                    /*   console.log(e.type);*/
                },
                'cropstart.cropper': function(e) {
                    /*   console.log(e.type, e.action);*/
                },
                'cropmove.cropper': function(e) {
                    /* console.log(e.type, e.action);*/
                },
                'cropend.cropper': function(e) {
                    /*console.log(e.type, e.action);*/
                },
                'crop.cropper': function(e) {
                    /* console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);*/
                },
                'zoom.cropper': function(e) {
                    /*  console.log(e.type, e.ratio);*/
                }
            }).cropper(options);
            // Buttons
            if (!$.isFunction(document.createElement('canvas').getContext)) {
                $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
            }

            if (typeof document.createElement('cropper').style.transition === 'undefined') {
                $('button[data-method="rotate"]').prop('disabled', true);
                $('button[data-method="scale"]').prop('disabled', true);
            }
            // Download
            if (typeof $download[0].download === 'undefined') {
                $download.addClass('disabled');
            }
            // Options
            $('.docs-toggles').on('change', 'input', function() {
                var $this = $(this);
                var name = $this.attr('name');
                var type = $this.prop('type');
                // console.log(type);
                var cropBoxData;
                var canvasData;

                if (!$image.data('cropper')) {
                    return;
                }
                if (type === 'checkbox') {
                    options[name] = $this.prop('checked');
                    cropBoxData = $image.cropper('getCropBoxData');
                    canvasData = $image.cropper('getCanvasData');

                    options.built = function() {
                        $image.cropper('setCropBoxData', cropBoxData);
                        $image.cropper('setCanvasData', canvasData);
                    };
                } else if (type === 'radio') {
                    options[name] = $this.val();
                }

                $image.cropper('destroy').cropper(options);
            });
            // Methods
            $('.docs-buttons').on('click', '[data-method]', function() {

                var $this = $(this);
                var data = $this.data();
                var $target;
                var result;
                  var type = $this.prop('type');
                if(data.method === "submitTo"){
                    if($("#business_image_pre").val()){
                    $(".loder_image_submit").show();
                    // originalData = $image.cropper("getCroppedCanvas");
                     if(file_type == 'image/jpeg' || file_type == 'image/jpg'){
                     originalData = $image.cropper('getCroppedCanvas', {
                            fillColor: '#fff',
                            imageSmoothingEnabled: false,
                          });
                      }
                      else{
                           originalData = $image.cropper('getCroppedCanvas', {
                            imageSmoothingEnabled: false,
                          });
                      }
                    update_cropped_link = originalData.toDataURL(file_type, 0.5);
                        $.ajax({

                            url: url + "/company/image_cut",
                            type: "POST",
                            // data: {"image":update_cropped_link,"buseness_id":$buseness_id},
                            data: {"image":update_cropped_link,"company_id":company_id},
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (data) {
                                //if(data == "success"){
                                    $(".loder_image_submit").hide();
                                    $(".form-group #inputImage-error").html("");
                                    swal({title: "Success", text: "Company image has been upload!", type: "success"},
                                    );
                                    display_gallary();
                            },
                            complete: function(){
                                $(".loder_image_submit").hide();
                            }
                        });
                    }
                    else{
                        $(".form-group #inputImage-error").html("Please Upload Image ");
                    }
                }

                if ($this.prop('disabled') || $this.hasClass('disabled')) {
                    return;
                }

                if ($image.data('cropper') && data.method) {
                    data = $.extend({}, data); // Clone a new one

                    if (typeof data.target !== 'undefined') {
                        $target = $(data.target);

                        if (typeof data.option === 'undefined') {
                            try {
                                data.option = JSON.parse($target.val());
                            } catch (e) {
                                console.log(e.message);
                            }
                        }
                    }

                    if (data.method === 'rotate') {
                        $image.cropper('clear');
                    }

                    result = $image.cropper(data.method, data.option, data.secondOption);

                    if (data.method === 'rotate') {
                        $image.cropper('crop');
                    }

                    switch (data.method) {
                        case 'scaleX':
                        case 'scaleY':
                            $(this).data('option', -data.option);
                            break;

                        case 'getCroppedCanvas':
                            if (result) {

                                // Bootstrap's Modal
                                $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                                if (!$download.hasClass('disabled')) {
                                    $download.attr('href', result.toDataURL('image/jpeg'));
                                }
                            }

                            break;

                        case 'destroy':
                            if (uploadedImageURL) {
                                URL.revokeObjectURL(uploadedImageURL);
                                uploadedImageURL = '';
                                $image.attr('src', originalImageURL);
                            }

                            break;
                    }

                    if ($.isPlainObject(result) && $target) {
                        try {
                            $target.val(JSON.stringify(result));
                        } catch (e) {
                            console.log(e.message);
                        }
                    }
                }
            });
            // Keyboard
            $(document.body).on('keydown', function(e) {

                if (!$image.data('cropper') || this.scrollTop > 300) {
                    return;
                }
                switch (e.which) {
                    case 37:
                        e.preventDefault();
                        $image.cropper('move', -1, 0);
                        break;

                    case 38:
                        e.preventDefault();
                        $image.cropper('move', 0, -1);
                        break;

                    case 39:
                        e.preventDefault();
                        $image.cropper('move', 1, 0);
                        break;

                    case 40:
                        e.preventDefault();
                        $image.cropper('move', 0, 1);
                        break;
                }
            });
            // Import image
            var $inputImage = $('#inputImage');

            if (URL) {
                $inputImage.change(function() {

                    var files = this.files;
                    var file;
                    $("#business_image_pre").val("true");

                    if (!$image.data('cropper')) {
                        return;
                    }
                    if (files && files.length) {
                        file = files[0];
                        file_type = file.type;
                        // console.log(file.size);

                        if (/^image\/\w+$/.test(file.type)) {

                            if (uploadedImageURL) {
                                URL.revokeObjectURL(uploadedImageURL);
                            }
                           // console.log(uploadedImageURL);
                            uploadedImageURL = URL.createObjectURL(file);
                           // console.log(uploadedImageURL);
                            $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                            $inputImage.val('');
                        } else {
                            window.alert('Please choose an image file.');
                        }
                    }
                });
            } else {
                $inputImage.prop('disabled', true).parent().addClass('disabled');
            }
        });

    </script>

@endpush('scripts')
