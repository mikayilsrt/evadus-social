@extends("layouts.master")

@section("content")
    <div class="container" id="page-container">
        <div class="row">
            <div class="col-12 col-md-7" id="profileContent">
                <div class="header-profile-content row">
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
            </div>
            @include("layouts._partials._block-section")
        </div>
    </div>
@endsection