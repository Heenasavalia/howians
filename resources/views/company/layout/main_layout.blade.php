
<!DOCTYPE html>
<html lang="en">
 <head>
   @include('company.layout.head')
   
 </head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
@include('company.layout.header')
@yield('content')
@include('company.layout.footer')

 </body>
</html>