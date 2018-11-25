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
                            <div id="timelinefeed" data-user_id="{{ $userAllData->id }}"></div>
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