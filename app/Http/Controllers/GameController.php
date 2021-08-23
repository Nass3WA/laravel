<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Studio;


class GameController extends Controller
{
    // Middleware, fonction constructor qui va permettre de 'create' et 'store' seulement si authentifié + modifier le middleware pour donner la bonne redirection
        public function __construct()
    {
        $this->middleware('auth')->only('create', 'store');
    }
    
    public function index(){
        $games = Game::latest()->paginate(5);
        return view ('games.index', [
            'games' => $games
            
        ]);
    }
    

    public function show(int $id)
    {
        //Requête Simplifiée   
        $game = Game::findOrFail($id);    
        //Equivalent
        // $game = Game::where('games.id', $id)->first();
        // Favoriser le with dès que boucle avec relation pour limiter les appels sql - Eager loading example sur internet laraval / eloquent
        $comments = $game->comments()->with('user')->latest()->get();

        // $game = DB::table('games')
        //     ->select('games.*')
        //     ->where('games.id', $id)
        //     ->first();
            
        // // Si l'article  n'est pas défini on envoie sur une page 404
        // if (! $game) {
        //     abort(404);
        // }
            
        return view('games.show', [
            'game' => $game,  
            'comments' => $comments    
        ]);
    } 
    
    public function create()
    {
        $studios = Studio::all();
        
        return view('games.create', [
            'studios' => $studios
        ]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:games',
            'mark' => 'required',
            'price' => 'required',
            'release_date' => 'required|date',
            'image' => 'required',
            'description' => 'required|min:5'
        ]);
        // En amont taper dans le temrinal : php artisan storage:link pour créer un lien virtuel
        //Enregistrement de l(image dans le dossier image
        $path = $request->file('image')->store('public/images');
        $path = str_replace('public', 'storage', $path);
        
        $game = new Game();
        $game->image = $path;
        $game->title = $request->input('title');
        $game->mark = $request->input('mark');
        $game->price = $request->input('price');
        $game->studio_id = $request->input('studio_id');
        $game->release_date= $request->input('release_date');
        $game->description = $request->input('description');
        $game->save();
        
        return redirect()->route('games.index');
    }    
}
