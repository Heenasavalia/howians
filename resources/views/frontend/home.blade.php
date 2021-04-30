@include('frontend.layout.header')

<!-- Banner start -->
<section class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <div class="banner-img"><img class="d-block w-100 h-100" src="{{asset('front_end/images/banner.jpg')}}" alt="banner"></div>
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container">
                        <div class="banner-inner mt-60">
                            <div class="text-center">
                                <h3 class="b-text">Find The Career You Deserve</h3>
                                <p class="p-text">We Help You Get: New Job</p>
                                <div class="inline-search-area ml-auto mr-auto isa-3">
                                    <div class="search-boxs">
                                        <div class="search-col">
                                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="Job title or Keywords">
                                        </div>
                                        <div class="search-col">
                                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="location">
                                        </div>
                                        <div class="search-col">
                                            <select class="selectpicker search-fields" name="Choose Categories">
                                                <option>Choose Categories</option>
                                                <option>Choose Categories1</option>
                                                <option>Choose Categories2</option>
                                            </select>
                                        </div>
                                        
                                        <div class="find">
                                            <button class="btn btn-md button-theme btn-search btn-block b-radius">SEARCH</button>
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
</section>
<!-- banner end -->

@include('frontend.layout.footer')