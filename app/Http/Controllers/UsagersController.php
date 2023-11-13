<?php

namespace App\Http\Controllers;

use function Symfony\Component\String\s;
use app\Models\Usager;
use app\Models\Film;
use Illuminate\Http\Request;
use app\Models\Personne;
use Auth;

class UsagersController extends Controller
{

    public function login(Request $request){
        $success = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if($success){
            return redirect()->route('Films.index')->withErrors(['message'=>'Connexion réussi.']);
        }else{
            return redirect()->route('Films.index')->withErrors(['message'=>'Connexion échoué.']);
        }
    }
}
