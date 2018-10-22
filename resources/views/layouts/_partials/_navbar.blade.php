<!-- main navbar -->
<nav class="navbar main-navbar navbar-expand-sm">
    <a href="/" class="navbar-brand">{{ config("app.name") }}</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/"><i data-feather="home"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="globe"></i>Discover</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="bell"></i>Notifications</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search on {{ config("app.name") }}">
                <button class="btn btn-search"><i class="search-icon" data-feather="search"></i></button>
            </form>
            <li class="nav-item">
                <a class="nav-link" href="{{ url("login") }}">Sing in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link signup-btn" href="{{ url("register") }}">Sign up</a>
            </li>
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
                    <li>
                        <a href="/"><i class="icon" data-feather="home"></i>Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon" data-feather="globe"></i>Discover</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon" data-feather="bell"></i>Notifications</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url("login") }}" class="log-link"><i class="icon" data-feather="log-in"></i>Sing in</a>
                    </li>
                    <li>
                        <a href="{{ url("register") }}" class="log-link"><i class="icon" data-feather="user-plus"></i>Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>