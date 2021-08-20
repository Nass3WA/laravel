@extends('layout')

@section('title', 'Connexion')

@section('content')
    
    <h1>Connexion</h1>
    
    <form method="post" action="{{ route('users.signin') }}">
        @csrf
        @if($errors->any())
            <aside class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </aside>
        @endif
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">Se connecter</button>
        </div>
    </form>

@endsection