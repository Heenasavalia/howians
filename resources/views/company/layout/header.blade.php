
<nav class="navbar header-navbar pcoded-header" header-theme="theme1" pcoded-header-position="fixed">
    <div class="navbar-wrapper">
        <div class="navbar-logo" logo-theme="theme1">
            <a class="mobile-menu" id="mobile-collapse" href="JavaScript:Void(0);">
                <i class="feather icon-menu"></i>
            </a>
            <a href="JavaScript:Void(0);">
                Howians
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">

                          <img src="{{ asset('company/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                            <span class="main-hd-nm-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                            <span class="main-hd-nm-bold"><i class="feather icon-chevron-down"></i></span>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <a href="{{ url('company/change_password') }}">
                                    <i class="feather icon-settings"></i> Change Password
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('company/profile') }}">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a id="log_out_btn_clieck" href="{{ url('/company/logout') }}">
                                    <i class="feather icon-log-out"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ url('/company/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
@push("scripts")
<script type="text/javascript">
   
</script>
@endpush("scripts")
