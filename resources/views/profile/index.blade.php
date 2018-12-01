@extends("layouts.master")

@section("pageTitle", $allProfileData->name . " (" . $allProfileData->user_name . ") | ")

@section("content")
    <div class="container" id="page-container">
        <div class="row">
            <div class="col-12 col-md-7" id="profileContent">
                <!-- <div id="HeaderProfileContent" data-user="{{ $allProfileData }}"></div> -->
                <div class="header-profile-content">
                    <div class="left-content">
                        <div class="profile-image">
                            <img src="/assets/img/{{ $allProfileData->profile_image }}" />
                        </div>
                    </div>
                    <div class="right-content">
                        <h3>{{ $allProfileData->name }}</h3>
                        <button class="follow-btn active-follow">
                            Follow
                        </button>
                        <p>{{ $allProfileData->description }}</p>
                    </div>
                </div>
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
                            <!-- <div id="timelinefeed2" data-user_id="{{ $allProfileData->id }}"></div> -->
                            <div>
                                <div id="timelinefeed">
                                    <!-- all posts of user. -->
                                    @foreach($allProfileData->post as $post)
                                        <div class="content-timeline">
                                            <div class="item-header">
                                                <a href="/profile/{{ $allProfileData->user_name }}">
                                                    <div class="user-profile-img">
                                                        <img src="/assets/img/{{ $allProfileData->profile_image }}" alt="">
                                                    </div>
                                                </a>
                                                <ul class="">
                                                    <li class="fullGroupName">
                                                        <a href="/profile/{{ $allProfileData->user_name }}">{{ $allProfileData->name }}</a>
                                                    </li>
                                                    <li class="username">
                                                        <a href="/profile/{{ $allProfileData->user_name }}">{{ "@" . $allProfileData->user_name }}</a>
                                                    </li>
                                                    <li class="item-date">{{ $post->created_at }}</li>
                                                </ul>
                                            </div>
                                            @if ($post->content)
                                                <div class="item-text-content">
                                                    {{ $post->content }}
                                                </div>
                                            @endif
                                            @if ($post->media)
                                                <div class="item-media-content" data-img="{{ $post->media }}" data-id="{{ $post->id }}">
                                                    <img id="media-image-1" class="medium-zoom-image" src="{{ $post->media }}" alt="" />
                                                </div>
                                            @endif
                                            <div class="item-footer">
                                                <div class="item-action">
                                                    <ul>
                                                        <li class="react-like"></li>
                                                        <li>
                                                            <button>
                                                                <i data-feather="link" class="icon"></i> Share
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i data-feather="chevron-right" class="icon"></i> Status
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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