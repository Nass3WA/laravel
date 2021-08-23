@extends('layout')

@section('title', 'Ajouter une catégorie')

@section('content')
    
    <h1>Ajout d'une catégorie</h1>
    
    <form method="post" action="{{ route('categories.store') }}">
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
            <label for="name">Ajouter une catégorie</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">Enregistrer</button>
        </div>
    </form>

@endsection