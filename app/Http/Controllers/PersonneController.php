<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Personne;
use Illuminate\Support\Facades\Log;

class PersonneController extends Controller
{
        public function index()
    {
        $personnes = Personne::all();
        $personnesActeurs = Personne::where('role', 'acteur')->get();
        $personnesRealisateurs = Personne::where('role', 'réalisateur')->get();
        $personnesProducteurs = Personne::where('role', 'producteur')->get();
        $personnesFemmes = Personne::where('sexe', 'femme')->get();

        return View('personnes.index',
            [
            'personnes'=>$personnes,
            'personnesActeurs'=>$personnesActeurs,
            'personnesRealisateurs'=>$personnesRealisateurs,
            'personnesProducteurs'=>$personnesProducteurs,
            'personnesFemmes'=>$personnesFemmes,
            ]);
    }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
    {
        return View('Personnes.Create');
    }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
    {
        try{
            $personne = new Personne($request->all());
            $personne->save();
            $personne::findlast();
        }
        catch (\throwable $e){
            Log::debug($e);
        }
        return redirect()->route('Personnes.edit', $personne->id);
    }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
    {
        $personne = Personne::find($id);
        return View('Personnes.show',[
            'personne'=>$personne,
            ]);
    }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
    {
        $personne = Personne::find($id);
        $filmsA = $personne->filmsA;
        $films = Film::whereNotIn('id', $filmsA->pluck('id')->toArray())->get();
        return View('Personnes.edit',[
            'personne'=>$personne,
            'films'=>$films,
            'filmsA'=>$filmsA,
            ]);
    }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
    {
        //
    }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
    {
        //
    }
    public function attach(Request $request)
    {
        $personne = Personne::find($request->personne_id);
        $personne->filmsA()->attach($request->film_id);
        return redirect()->route('personne.edit', $request->personne_id);

    }
    public function detach(Request $request,)
    {
        $personne = Personne::find($request->personne_id);
        $personne->filmsA()->detach($request->film_id);
        return redirect()->route('personne.edit', $request->personne_id);
    }
}
