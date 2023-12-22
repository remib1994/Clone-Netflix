<?php

namespace App\Http\Controllers;

use function Symfony\Component\String\s;
use app\Models\Usager;
use app\Models\Film;
use Illuminate\Http\Request;
use app\Models\Personne;
use Illuminate\Support\Facades\Auth;

class UsagersController extends Controller
{

    public function login(Request $request){
        $success = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if($success){
            return redirect()->route('Films.index')->with('message','Connexion réussi.');
        }else{
            return redirect()->route('showLoginForm')->withErrors(['Informations invalides.']);
        }
    }
    public function showLoginForm(){
        return view('Auth.login');
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('showLoginForm')->with('message','Déconnexion réussi.');
    }
}