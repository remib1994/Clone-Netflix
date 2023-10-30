<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;

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
        //
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
        //
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
}
