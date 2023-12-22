<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Usager;
use Illuminate\Support\Facades\Hash;
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

    public function index()
    {
        $usagers = Usager::all();
        return view('Usagers.index',[
            'usagers'=>$usagers,
        ]);
    }
    public function create()
    {
        return view('Usagers.create');
    }
    public function store(Request $request)
    {
        try{
            $usager = new Usager($request->all());
            $usager->password = Hash::make($request->password);
            $usager->save();
            return view('Auth.login');
        }
        catch (\throwable $e){
            Log::debug($e);
        }
    }
    public function edit(string $id)
    {
        $usager = Usager::findOrFail($id);
        return view('Usagers.edit',[
            'usager'=>$usager,
        ]);
    }
    public function update(Request $request, string $id)
    {
        try{
            $usager = Usager::find($id);
            $usager->update($request->all());
            $usager->update(['password'=>Hash::make($request->password)]);

            return view('Usagers.index');
        }
        catch (\throwable $e){
            Log::debug($e);
        }
    }
    public function destroy(string $id)
    {
        $usager = Usager::findOrFail($id);
        $usager->delete();
        return redirect()->route('Usagers.index')->with('message', 'Usager '.$usager->nom.' '.$usager->prenom.'a été supprimé.');
    }

    public function show(string $id)
    {

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('showLoginForm')->with('message','Déconnexion réussi.');
    }
}
