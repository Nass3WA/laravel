@extends('layout')

@section('title', 'Détail du Jeu')

@section('content')

    <article>
        <h2>{{ $game->title }}</h2>
       <img src="{{ $game->image }}">
        <p> crée par  {{ $game->studio->name }} sur {{ $game->platforms->implode('name', ', ') }} en {{ $game->release_date->format('d/m/Y') }}</p>
        <p>Prix : {{ $game->price }}€ </p>
        <p> {{ $game->description }} </p>
        <p>note : {{ $game->mark }} / 20</p>
    </article>
    
    <section>
        
        <h2>Liste des Avis</h2>
        
            @foreach($comments as $comment)
            <article class="my-2 py-3 border-bottom">
                <header class="mb-2">
                    <small>Rédigé par {{ $comment->user->username }} le {{ $comment->created_at->format('dm/Y H:i') }}</small>
                     <small>Note attribuée {{ $comment->mark }}</small>
                </header>
                {{ $comment->content }}
            </article>
            
        @endforeach

        @auth
            <form method="post" action="{{ route('games.comments.store', ['game' => $game->id]) }}">
                <fieldset>
                    <legend>Ajouter un avis</legend>
                    @if($errors->any())
                        <aside class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </aside>
                    @endif
                    
                    @csrf
                    <div class="form-group">
                        <label for="mark">Votre Note</label>
                        <input type="number" name="mark" id="mark" class="form-control @error('content') is-invalid @enderror" min="0" max="20">{{ old('content') }}</input>
                        <label for="content">Contenu</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                        @if($errors->has('content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('content') }}
                            </div>
                        @endif
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </fieldset>
            </form>
        @else
            <p>Veuillez <a href="{{route('users.login')}}">vous connecter</a> pour laisser un avis sur le jeu</p>
        @endauth
    </section>
@endsection