@extends('layout')

@section('title', 'Accueil')
 
@section('content')
<h2>Les 5 dernieres sorties</h2>

    @foreach($games as $game)
        <article>
            <h2>{{ $game->title }}</h2>
            <a href="{{ route('games.show', ['id' => $game->id]) }}"><img src="{{ $game->image }}"></a>
            <p> crée par  {{ $game->studio->name }} sur {{ $game->platforms->implode('name', ', ') }} en {{ $game->release_date->format('d/m/Y') }}</p>
            <p>{!! nl2br(e(substr($game->description, 0, 50))) !!} <a href="{{ route('games.show', ['id' => $game->id]) }}">En savoir plus</a></p>
            <p>note : {{ $game->mark }} / 20</p>
         
        </article>
    @endforeach 
    

<h2>Les 5 meilleurs jeux</h2>

    @foreach($bestGames as $bestGame)
        <article>
            <h2>{{ $bestGame->title }}</h2>
            <a href="{{ route('games.show', ['id' => $game->id]) }}"><img src="{{ $bestGame->image }}"></a>
            <p> crée par  {{ $bestGame->studio->name }} sur {{ $bestGame->platforms->implode('name', ', ') }} en {{ $bestGame->release_date->format('d/m/Y') }}</p>
            <p>{!! nl2br(e(substr($bestGame->description, 0, 50))) !!} <a href="{{ route('games.show', ['id' => $game->id]) }}">En savoir plus</a></p>
            <p>note : {{ $bestGame->mark }} / 20</p>
         
        </article>
    @endforeach 
    
@endsection