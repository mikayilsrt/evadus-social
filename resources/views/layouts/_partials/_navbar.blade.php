<!-- main navbar -->
<nav class="navbar main-navbar navbar-expand-sm">
    <a href="/" class="navbar-brand">{{ config("app.name") }}</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/"><i data-feather="home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i data-feather="globe"></i>Discover</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i data-feather="bell"></i>Notifications</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#">Abouts</a>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav">
            @if (Auth::check())
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search on {{ config("app.name") }}">
                    <button class="btn btn-search"><i class="search-icon" data-feather="search"></i></button>
                </form>
            @endif
            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <div class="user-profile-img">
                            <img src="assets/img/{{ Auth::user()->profile_image }}" alt="">
                        </div>
                        <span>{{ Auth::user()->user_name }}</span>
                        <i data-feather="chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li href="#"><a href="#" class="dropdown-item"><i class="icon" data-feather="user"></i>Profile</a></li>
                        <li href="#"><a href="#" class="dropdown-item"><i class="icon" data-feather="settings"></i>Settings</a></li>
                        <div class="dropdown-divider"></div>
                        <li href="#">
                            <form method="POST" action="{{ url("logout") }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="icon" data-feather="log-out"></i>Sign out
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url("login") }}">Sing in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link signup-btn" href="{{ url("register") }}">Sign up</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
<!-- end main navbar -->

<!-- mobile navbar -->
<div class="main-navbar-mobile">
    <div class="container">
        <div class="mobile-navbar">
            <div class="vertical-align-nav">
                <ul class="nav-block-left">
                    <li class="link-btn">
                        <a href="/">{{ config("app.name") }}</a>
                    </li>
                </ul>
                <a class="btn-nav-toogle" href="#"><i data-feather="menu"></i></a>
            </div>
            <div class="mobile-nav-block"><!-- open-mobile-nav -->
                <h4>Navigation</h4>
                <a href="#" class="btn-nav-toogle">
                    <i data-feather="x-circle"></i>
                </a>
                <ul class="nav navbar-nav">
                    @if (Auth::check())
                        <li>
                            <a href="/"><i class="icon" data-feather="home"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon" data-feather="globe"></i>Discover</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon" data-feather="bell"></i>Notifications</a>
                        </li>
                    @endif
                </ul>
                <ul class="nav navbar-nav">
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <div class="user-profile-img">
                                    <img src="assets/img/{{ Auth::user()->profile_image }}" alt="">
                                </div>
                                <span>username</span>
                                <i data-feather="chevron-down" class="icon"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li href="#"><a href="#" class="dropdown-item"><i class="icon" data-feather="user"></i>Profile</a></li>
                                <li href="#"><a href="#" class="dropdown-item"><i class="icon" data-feather="settings"></i>Settings</a></li>
                                <div class="dropdown-divider"></div>
                                <li href="#">
                                    <form method="POST" action="{{ url("logout") }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            <i class="icon" data-feather="log-out"></i>Sign out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Abouts</a>
                        </li>
                        <li>
                            <a href="{{ url("login") }}" class="log-link"><i class="icon" data-feather="log-in"></i>Sing in</a>
                        </li>
                        <li>
                            <a href="{{ url("register") }}" class="log-link"><i class="icon" data-feather="user-plus"></i>Sign up</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>