@extends('layout')

@section('title', 'Modifier son profil')

@section('content')
    
    <h1>Modifier vortre profil</h1>
    
    <form method="post" action="{{ route('users.edit') }}">
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
            <label for="username">Pseudo</label>
            <input type="text" class="form-control" name="username" id="username" value="{{ auth()->user()->username }}">
        </div>
         <div class="form-group">
            <label for="display_name">Nom</label>
            <input type="text" class="form-control" name="display_name" id="display_name" value="{{ auth()->user()->display_name }}">
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file"  class="avatar" name="avatar" id="avatar" accept="image/*" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password-confirmation">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" id="password-confirmation">
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">Modifier</button>
        </div>
    </form>

@endsection