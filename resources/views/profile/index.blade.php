@extends("layouts.master")

@section("pageTitle", $userAllData->name . " (" . $userAllData->user_name . ") | ")

@section("content")
    <div class="container" id="page-container">
        <div class="row">
            <div class="col-12 col-md-7" id="profileContent">
                <div id="HeaderProfileContent" data-user="{{ $userData }}"></div>
                <ul class="nav nav-tabs flat-tab-content" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a href="#tab0" role="tab" data-toggle="tab" aria-expanded="true">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab1" role="tab" data-toggle="tab" aria-expanded="true">Likes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab2" role="tab" data-toggle="tab" aria-expanded="true">Collections</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab0">
                        <div id="timeline">
                            <!-- <div id="timelinefeed2" data-user_id="{{ $userAllData->id }}"></div> -->
                            <div>
                                <div id="timelinefeed">
                                    <div class="content-timeline">
                                    <div class="item-header">
                                        <a href="http://localhost:8000/profile/mikayilsrt">
                                            <div class="user-profile-img">
                                                <img src="/assets/img/default-profile-img.png" alt="">
                                            </div>
                                        </a>
                                        <ul class="">
                                            <li class="fullGroupName">
                                                <a href="http://localhost:8000/profile/mikayilsrt">mikayilsrt</a>
                                            </li>
                                            <li class="username">
                                                <a href="http://localhost:8000/profile/mikayilsrt">@mikayilsrt</a>
                                            </li>
                                            <li class="item-date">2018-11-26 20:26:19</li>
                                        </ul>
                                    </div>
                                    <div class="item-text-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id ornare ante. Nam a mauris at sapien imperdiet elementum. Curabitur rutrum justo sit amet metus.
                                    </div>
                                    <div class="item-media-content">
                                        <img id="media-image-1" class="medium-zoom-image" src="https://images.unsplash.com/photo-1542841791-bf92ca449f11?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=1d934e28c401cea7f1ab21e9d5539383&amp;dpr=1&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80&amp;cs=tinysrgb" alt="" />
                                    </div>
                                    <div class="item-footer">
                                        <div class="item-action">
                                            <ul>
                                                <li>
                                                    <button class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Likes
                                                    </button>
                                                </li>
                                                <li>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg> Share
                                                    </button>
                                                </li>
                                                <li>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><polyline points="9 18 15 12 9 6"></polyline></svg> Status
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="tab1">Likes...</div>
                    <div class="tab-pane fade show" id="tab2">Collections...</div>
                </div>
                <!--
                <div class="header-profile-content">
                    <div class="left-content">
                        <div class="profile-image">
                            <img src="https://kaem.io/assets/img/default-profile-img.png" />
                        </div>
                    </div>
                    <div class="right-content">
                        <h3>Maria Châtel-Innocenti</h3>
                        <button class="follow-btn">Follow</button>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>
                    </div>
                </div>
                -->
            </div>
            @include("layouts._partials._block-section")
        </div>
    </div>
@endsection