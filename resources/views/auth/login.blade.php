@extends('layouts.master')

@section('content')
    <div id="content-auth">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-md-6 left-content">section 1</div>
                <div class="col-12 col-lg-4 col-md-6 right-content">
                    <h1>Join {{ config("app.name") }} today</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad autem.</p>
                    <div class="form-content">
                        <form method="POST" action="{{ url("login") }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-auth">Log in</button>
                            </div>
                            <div class="form-group">
                                <p>New on {{ config("app.name") }} ? <a href="{{ url("register") }}"> Register now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
