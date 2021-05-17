
    <!-- Main header start -->
    <header class="main-header header-transparent sticky-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logo" href="{{url('/home')}}">
                    <img src="{{asset('front_end/images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav header-ml">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user/job')}}">JOB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user/displayallplan')}}">PLAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">CONTACT</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    @if(Auth::user()->id != null && Auth::user()->id != 0)
                        <li class="nav-item ni-2">
                            <a class="nav-link btn btn-md button-theme" href="{{url('user/display-profile/'.Auth::user()->id)}}">
                                {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a class="nav-link deffold" href="#">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a class="nav-link deffold" href="#">
                                /
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a href="{{ url('/user/logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                        </li>
                        <form id="logout-form" action="{{ url('user/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <li class="nav-item ni-2">
                            <a class="nav-link btn btn-md button-theme" href="login.html">
                                Login
                            </a>
                        </li>
                    @endif
                        
                    </ul>
                </div>
            </nav>
        </div>
    </header>
