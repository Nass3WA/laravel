<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function create()
    {
        return view('platforms.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:platforms'
        ]);
        // En amont taper dans le temrinal : php artisan storage:link pour créer un lien virtuel
        //Enregistrement de l(image dans le dossier image
        $path = $request->file('logo')->store('public/images');
        $path = str_replace('public', 'storage', $path);
        
        $platform = new Platform();
        $platform->logo = $path;
        $platform->name = $request->input('name');
        $platform->save();
        
        return redirect()->route('games.index');
    }   
}
