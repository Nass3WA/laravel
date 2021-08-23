@extends('layout')

@section('title', 'Ajouter un jeu')

@section('content')
    
    <h1>Ajout d'un jeu</h1>
    
    <form method="post" action="{{ route('games.store') }}" enctype = "multipart/form-data">
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
            <label for="title">Nom du jeu</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
         <div class="form-group">
            <label for="mark">Note du jeu</label>
            <input type="number" max="20" min="0" class="form-control" name="mark" id="mark">
        </div>
         <div class="form-group">
            <label for="price">Prix du jeu</label>
            <input type="number" min="0" class="form-control" name="price" id="price">
        </div>    
         <div class="form-group">
            <label for="release_date">Date de sortie du jeu</label>
            <input type="date" class="form-control" name="release_date" id="release_date">
        </div>        
        <div class="form-group">
            <label for="image">Image du jeu</label>
            <input type="file"  class="image" name="image" id="image" accept="image/*">
        </div>
        <div class="form-group">
            <label for="studio_id">Studio</label>
            <select name="studio_id" id="studio_id">
                @foreach($studios as $studio)
                    <option value="{{ $studio->id }}">{{ $studio->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">Enregistrer</button>
        </div>
    </form>

@endsection