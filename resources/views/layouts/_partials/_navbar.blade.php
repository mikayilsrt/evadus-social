<!-- main navbar -->
<nav class="navbar main-navbar navbar-expand-sm">
    <a href="#" class="navbar-brand">{{ config("app.name") }}</a>
    <!--
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent">
        <i data-feather="menu"></i>
    </button>
    -->
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home 2</a>
            </li>
        </ul>
    </div>
</nav>
<!-- end main navbar -->

<!-- mobile navbar -->
<div class="container">
    <div class="mobile-navbar">
        <ul class="nav-block-left">
            <li class="link-btn">
                <a href="#">Login</a>
            </li>
            <li class="link-btn">
                <a href="#">Register</a>
            </li>
        </ul>
        <a class="btn-nav-toogle" href="#"><i data-feather="menu"></i> Menu</a>
        <div class="mobile-nav-block"><!-- open-mobile-nav -->
            <h4>Navigation</h4>
            <a href="#" class="btn-nav-toogle">
                <span class="barsclose"></span> Close
            </a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="https://kaem.io">Frontpage</a>
                </li>
            </ul>
        </div>
    </div>
</div>