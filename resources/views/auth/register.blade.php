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
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <form method="POST" action="{{ url("register") }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="user_name" placeholder="username" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email@example.com" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-auth">Sing up</button>
                            </div>
                            <div class="form-group">
                                <p>En cliquant sur "S'inscrire" ci-dessous, vous souscrivez aux <a href="">règles de l’instance</a> et à nos <a href="">conditions d’utilisation</a>.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
