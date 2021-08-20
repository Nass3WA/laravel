@extends('layout')

@section('title', 'Accueil')
 
@section('content')

    

<h2>liste des jeux </h2>
  
     @foreach($games as $game)
        <article>
            <img src="{{ $game->image }}">
            <h2>{{ $game->title }}</h2>
        </article>
    @endforeach 
   <!--Pagination : a mettre en bootstrap ici App/ServiceProvider.php dans providers, attention à bien mettre paginate(chiffre)-->
  {{ $games->links() }}
@endsection