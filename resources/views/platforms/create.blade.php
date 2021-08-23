@extends('layout')

@section('title', 'Ajouter une plateforme')

@section('content')
    
    <h1>Ajout d'une plateforme</h1>
    
    <form method="post" action="{{ route('platforms.store') }}" enctype = "multipart/form-data">
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
            <label for="name">Nom de la plateforme</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="logo">Logo de la plateforme</label>
            <input type="file"  class="logo" name="logo" id="logo" accept="image/*">
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">Enregistrer</button>
        </div>
    </form>

@endsection