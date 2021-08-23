<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories'
        ]);
        
        $categorie = new Categorie();
        $categorie->name = $request->input('name');
        $categorie->save();
        
        return redirect()->route('games.index');
    }   
}
