@extends('layout')

@section('title', 'Accueil')
 
@section('content')

    

<h2>liste des jeux </h2>
  
     @foreach($games as $game)
        <article>
            <a href="{{ route('games.show', ['id' => $game->id]) }}"><img src="{{ asset($game->image) }}"></a>
            <h2>{{ $game->title }}</h2>
        </article>
    @endforeach 
   <!--Pagination : a mettre en bootstrap ici App/ServiceProvider.php dans providers, attention à bien mettre paginate(chiffre)-->
  {{ $games->links() }}
@endsection