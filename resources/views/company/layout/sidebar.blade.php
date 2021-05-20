<nav class="pcoded-navbar" navbar-theme="themelight1" active-item-theme="theme1" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="fixed">
    <div class="pcoded-inner-navbar main-menu">
        <!-- <ul class="pcoded-item pcoded-left-item">
            <div class="pcoded-navigatio-lavel">Site Main Page</div>
            <li class="active">
                <a href="{{ url('/') }}">
                    <span class="pcoded-micon"><i class="fa fa-tachometer"></i></span>
                    <span class="pcoded-mtext">Home Page</span>
                </a>
            </li>
        </ul> -->
        <div class="pcoded-navigatio-lavel">Select plan</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="">
                <a href="{{ url('company/plan-selection') }}">
                    <span class="pcoded-micon"><i class="fa fa-handshake-o"></i></span>
                    <span class="pcoded-mtext">Plan Selection Detail</span>
                </a>
            </li>

            <?php
                $current_time = \Carbon\Carbon::now();
                //print $current_time;
            ?>

            @if(Auth::user()->status == 'Active')
                <div class="pcoded-navigatio-lavel">Menus</div>
                <li class="active">
                    <a href="{{ url('company/home') }}">
                        <span class="pcoded-micon"><i class="fa fa-tachometer"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ url('company/job-requirement/create') }}">
                        <span class="pcoded-micon"><i class="fa fa-plus-square-o"></i></span>
                        <span class="pcoded-mtext">Add Job Requirement</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ url('company/my-post-job-list') }}">
                        <span class="pcoded-micon"><i class="fa fa-list-ol"></i></span>
                        <span class="pcoded-mtext">Post Job List</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ url('company/watch_review') }}">
                        <span class="pcoded-micon"><i class="fa fa-star-half-o"></i></span>
                        <span class="pcoded-mtext">Review</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ url('company/profile') }}">
                        <span class="pcoded-micon"><i class="fa fa-pencil-square-o"></i></span>
                        <span class="pcoded-mtext">Update company profile</span>
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

                @if(Auth::user()->pricing_plan_id != 1)
                    <div class="pcoded-navigatio-lavel">New Featured</div>
                    <li class="">
                        <a href="{{ url('company/photo_gallery') }}">
                            <span class="pcoded-micon"><i class="fa fa-file-image-o"></i></span>
                            <span class="pcoded-mtext">Photo Gallery</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('company/messages') }}">
                            <span class="pcoded-micon"><i class="fa fa-envelope-square"></i></span>
                            <span class="pcoded-mtext">Messages</span>
                        </a>
                    </li>
                @endif
            @endif





        </ul>
    </div>
</nav>

@push('scripts')

@endpush('scripts')
