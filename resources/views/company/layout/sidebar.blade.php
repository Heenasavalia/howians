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
                <a href="{{ url('company/home') }}">
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

            <li class="">
                <a href="{{ url('company/post-job-list') }}">
                    <span class="pcoded-micon"><i class="fa fa-list-ol"></i></span>
                    <span class="pcoded-mtext">Post Job List</span>
                </a>
            </li>

            <li class="">
                <a href="{{ url('company/profile') }}">
                    <span class="pcoded-micon"><i class="fa fa-building-o"></i></span>
                    <span class="pcoded-mtext">Update profile</span>
                </a>
            </li>

            <li class="">
                <a href="{{ url('company/change_password') }}">
                    <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                    <span class="pcoded-mtext">Change Password</span>
                </a>
            </li>





            <li class="">
                <a href="{{ url('/company/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="pcoded-micon"><i class="fa fa-sign-out"></i></span>
                    <span class="pcoded-mtext">Logout</span>
                </a>
                <form id="logout-form" action="{{ url('/company/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </div>
</nav>

@push('scripts')

@endpush('scripts')
