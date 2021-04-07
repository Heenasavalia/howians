
<!DOCTYPE html>
<html lang="en">
 <head>
   @include('company.layout.head')
   
 </head>
<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
@include('company.layout.header')
@include('company.layout.sidebar')
@yield('content')
@include('company.layout.footer')
</div>
 </body>
</html>