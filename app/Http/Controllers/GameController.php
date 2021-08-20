<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;


class GameController extends Controller
{
    public function index(){
        $games = Game::latest()->paginate(5);
        return view ('games.index', [
            'games' => $games
            
        ]);
    }
}
