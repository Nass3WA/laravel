<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        
        return view('users.register');
    }
    
     public function store(Request $request){
        $request->validate([
            'display_name'=>'min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'username' => 'required|min:3|unique:users'
        ]);
        
        $user = new User();
        $user->avatar = $request->input('avatar');
        $user->display_name = $request->input('display_name');
        $user->email = $request->input('email');
        $user->username= $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        
        return redirect()->route('users.login');
    }
    
    public function login()
    {
        return view('users.login');
    }
    
    public function signin(Request $request)
    {
        // Validation du formulaire et récupération des identifiants
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        // Si les identifiants sont corrects, connexion de l'utilisateur
        // et redirection vers la page demandée
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('homepage'));
        }
        
        // Retour sur le formulaire avec un message d'erreur
        return back()->withErrors([
            'email' => 'Les identifiants ne correspondent pas',
        ]);
    }
    
     public function logout()
    {
        Auth::logout();
        
        return redirect()->route('homepage');
    }
}
