@extends("layouts.master")

@section("content")
    <!-- main container -->
    <div class="container" id="page-container">
        <div class="row">
            <div class="col-12 col-md-7" id="timeline">
                <!-- <div id="timelinefeed"></div> -->
                @foreach($posts as $post)
                    <div class="content-timeline">
                        <div class="item-header">
                            <a href="/profile/{{ $post->user_name }}">
                                <div class="user-profile-img">
                                    <img src="/uploads/profileimages/{{ $post->profile_image }}" alt="">
                                </div>
                            </a>
                            <ul class="">
                                <li class="fullGroupName">
                                    <a href="/profile/{{ $post->user_name }}">{{ $post->name }}</a>
                                </li>
                                <li class="username">
                                    <a href="/profile/{{ $post->user_name }}">{{ "@" . $post->user_name }}</a>
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
                                    <li class="react-like" data-id="{{ $post->id }}" data-authId="{{ Auth::id() }}" data-postLikes="{{ "" }}"></li>
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
                <!--
                <div class="content-timeline">
                    <div class="item-header">
                        <a href="">
                            <div class="user-profile-img">
                                <img src="https://kaem.io/assets/img/default-profile-img.png" alt="">
                            </div>
                        </a>
                        <ul class="">
                            <li class="fullGroupName"><a href="#">Username</a></li>
                            <li class="username"><a href="#">@username</a></li>
                            <li class="item-date">13 sept.</li>
                        </ul>
                    </div>
                    <div class="item-text-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan justo sem, vitae sollicitudin ex pulvinar vel. Praesent eget lacinia purus, id condimentum orci. In vulputate nibh quis sapien ultrices vestibulum. Mauris ut velit at leo posuere.
                    </div>
                    <div class="item-media-content">
                        <img src="https://images.unsplash.com/photo-1540281481658-a6ebea61c280?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a46acf5c0244921f4eba50da0dfbf401&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt="">
                    </div>
                    <div class="item-footer">
                        <div class="item-action">
                            <ul>
                                <li><button><i data-feather="heart" class="icon"></i> Likes</button></li>
                                <li><button><i data-feather="link" class="icon"></i> Share</button></li>
                                <li><button><i data-feather="chevron-right" class="icon"></i> Status</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-timeline">
                    <div class="item-header">
                        <a href="">
                            <div class="user-profile-img">
                                <img src="https://kaem.io/assets/img/default-profile-img.png" alt="">
                            </div>
                        </a>
                        <ul class="">
                            <li class="fullGroupName"><a href="#">Username</a></li>
                            <li class="username"><a href="#">@username</a></li>
                            <li class="item-date">13 sept.</li>
                        </ul>
                    </div>
                    <div class="item-text-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan justo sem, vitae sollicitudin ex pulvinar vel. Praesent eget lacinia purus, id condimentum orci. In vulputate nibh quis sapien ultrices vestibulum. Mauris ut velit at leo posuere.
                    </div>
                    <div class="item-media-content">
                        <img src="https://images.unsplash.com/photo-1540281481658-a6ebea61c280?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a46acf5c0244921f4eba50da0dfbf401&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt="">
                    </div>
                    <div class="item-footer">
                        <div class="item-action">
                            <ul>
                                <li><button><i data-feather="heart" class="icon"></i> Likes</button></li>
                                <li><button><i data-feather="link" class="icon"></i> Share</button></li>
                                <li><button><i data-feather="chevron-right" class="icon"></i> Status</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-timeline">
                    <div class="item-header">
                        <a href="">
                            <div class="user-profile-img">
                                <img src="https://kaem.io/assets/img/default-profile-img.png" alt="">
                            </div>
                        </a>
                        <ul class="">
                            <li class="fullGroupName"><a href="#">Username</a></li>
                            <li class="username"><a href="#">@username</a></li>
                            <li class="item-date">13 sept.</li>
                        </ul>
                    </div>
                    <div class="item-text-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan justo sem, vitae sollicitudin ex pulvinar vel. Praesent eget lacinia purus, id condimentum orci. In vulputate nibh quis sapien ultrices vestibulum. Mauris ut velit at leo posuere.
                    </div>
                    <div class="item-media-content">
                        <img src="https://images.unsplash.com/photo-1540281481658-a6ebea61c280?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a46acf5c0244921f4eba50da0dfbf401&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt="">
                    </div>
                    <div class="item-footer">
                        <div class="item-action">
                            <ul>
                                <li><button><i data-feather="heart" class="icon"></i> Likes</button></li>
                                <li><button><i data-feather="link" class="icon"></i> Share</button></li>
                                <li><button><i data-feather="chevron-right" class="icon"></i> Status</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-timeline">
                    <div class="item-header">
                        <a href="">
                            <div class="user-profile-img">
                                <img src="https://kaem.io/assets/img/default-profile-img.png" alt="">
                            </div>
                        </a>
                        <ul class="">
                            <li class="fullGroupName"><a href="#">Username</a></li>
                            <li class="username"><a href="#">@username</a></li>
                            <li class="item-date">13 sept.</li>
                        </ul>
                    </div>
                    <div class="item-text-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan justo sem, vitae sollicitudin ex pulvinar vel. Praesent eget lacinia purus, id condimentum orci. In vulputate nibh quis sapien ultrices vestibulum. Mauris ut velit at leo posuere.
                    </div>
                    <div class="item-media-content">
                        <img src="https://images.unsplash.com/photo-1540281481658-a6ebea61c280?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a46acf5c0244921f4eba50da0dfbf401&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt="">
                    </div>
                    <div class="item-footer">
                        <div class="item-action">
                            <ul>
                                <li><button><i data-feather="heart" class="icon"></i> Likes</button></li>
                                <li><button><i data-feather="link" class="icon"></i> Share</button></li>
                                <li><button><i data-feather="chevron-right" class="icon"></i> Status</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                -->
            </div>
            @include("layouts._partials._block-section")
        </div>
    </div>
    <div class="add-post-btn">
        <button type="button" data-toggle="modal" data-target="#exampleModal">
            <i data-feather="plus" class="icon"></i>
        </button>
    </div>
    <div id="modalNewPost"></div>
@endsection