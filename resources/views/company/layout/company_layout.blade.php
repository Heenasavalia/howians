<!DOCTYPE html>
<html lang="en">
@include('company.layout.head')
<body>
<style>
    .pac-container:after {
        /* Disclaimer: not needed to show 'powered by Google' if also a Google Map is shown */
        background-image: none !important;
        height: 0px;
    }
</style>
@include('company.layout.loader')
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('company.layout.main_sidebar')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('company.layout.sidebar')
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('company.layout.footer')
@stack('scripts')
</body>
</html>
