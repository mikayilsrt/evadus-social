@extends("layouts.master")

@section("pageTitle", "Paramètres")

@section("content")
    <div class="container" id="page-container">
        <h1>Settings</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="name">Nom du profile</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Nom du profile">
                    </div>
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" class="form-control" name="username" placeholder="Nom d'utilisateur">
                        <small id="usernameHelp" class="form-text text-muted">{{ url()->to('/profile/' . Auth::user()->user_name) }}</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Description du profile</label>
                        <textarea type="text" id="description" class="form-control" name="description" placeholder="Description du profile"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile_image">Photo de profile</label>
                        <input type="file" id="profile_image" class="form-control" name="profile_image" placeholder="Photo de profile">
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Adresse email">
                    </div>
                    <div class="form-group">
                        <label for="password">Nouveau mot de passe</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Vérifiez le mot de passe</label>
                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Vérifiez le mot de passe">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection