<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function create()
    {
        return view('studios.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:studios'
        ]);
        // En amont taper dans le temrinal : php artisan storage:link pour créer un lien virtuel
        //Enregistrement de l(image dans le dossier image
        $path = $request->file('logo')->store('public/images');
        $path = str_replace('public', 'storage', $path);
        
        $studio = new Studio();
        $studio->logo = $path;
        $studio->name = $request->input('name');
        $studio->save();
        
        return redirect()->route('games.index');
    }        
}
