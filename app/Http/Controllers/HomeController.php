<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Models\Platform;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
 
   public function home()
   {
      
      $games = Game::with('studio','platforms')->orderBy('release_date', 'desc')->take(5)->get();
      $bestGames = Game::with('studio','platforms')->orderBy('mark', 'desc')->take(5)->get();
      return view('homepage',[
         'games' => $games,
         'bestGames'=>$bestGames,
         ]);
      
   }
}
