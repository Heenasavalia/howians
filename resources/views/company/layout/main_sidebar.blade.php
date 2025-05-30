
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
                        <!-- Messages Dropdown Menu -->
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            @if( Auth::user()->profile_image != null)
                                <img src="{{ config('constants.company_profile') . Auth::user()->profile_image }}" class="img-radius" alt="Company-Profile-Image">
                            @else
                                <img src="{{ asset('images/male.png')}}" class="img-radius" alt="Company-Profile-Image">
                            @endif
                            <span>{{ Auth::user()->company_name }}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                            <li>
                                <a href="{{ url('/company/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
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
