<nav class="pcoded-navbar" navbar-theme="themelight1" active-item-theme="theme1" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="fixed">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <div class="pcoded-navigatio-lavel">Site Main Page</div>
            <li class="active">
                <a href="{{ url('/') }}">
                    <span class="pcoded-micon"><i class="fa fa-tachometer"></i></span>
                    <span class="pcoded-mtext">Home Page</span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Menus</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="{{ url('company/dashboard') }}">
                    <span class="pcoded-micon"><i class="fa fa-tachometer"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="{{ url('company/plan-selection') }}">
                    <span class="pcoded-micon"><i class="fa fa-handshake-o"></i></span>
                    <span class="pcoded-mtext">Plan Selection</span>
                </a>
            </li>

            <li class="">
                <a href="{{ url('company/job-requirement') }}">
                    <span class="pcoded-micon"><i class="fa fa-product-hunt"></i></span>
                    <span class="pcoded-mtext">Job Requirement</span>
                </a>
            </li>

            
        </ul>
    </div>
</nav>
