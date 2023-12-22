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

        try {
            $personne = new Personne($request->all());

            $uploadedFile = $request->file('urlphoto');
            $nomFichierUnique = str_replace(' ', '_', $personne->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try {
                $request->urlphoto->move(public_path('img/Personnes'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $personne->urlphoto = $nomFichierUnique;
            $personne->save();
            return redirect()->route('Personnes.edit',$personne->id);
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('Personnes.create')->withErrors(['l\'ajout n\'a pas fonctionné']);
        }

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
        $filmsNonInclus = Film::all()->diff($personne->films);
        return View('Personnes.edit',[
            'personne'=>$personne,
            'filmsNonInclus'=>$filmsNonInclus,
        ]);
    }

        /**
         * Update the specified resource in storage.
         */
    public function update(Request $request, string $id)
    {
        try {
            $personne = Personne::find($id);
            $personne->urlphoto = $request->urlphoto;
            $personne->update($request->all());

            $uploadedFile = $request->file('urlphoto');
            $nomFichierUnique = str_replace(' ', '_', $personne->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try {
                $request->urlphoto->move(public_path('img/Personnes'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $personne->urlphoto = $nomFichierUnique;
            $personne->save();
            return redirect()->route('Personnes.index');
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('Personnes.edit')->withErrors(['l\'ajout n\'a pas fonctionné']);
        }

    }

        /**
         * Remove the specified resource from storage.
         */
    public function destroy(string $id)
    {
        try{
            $personne = Personne::findOrFail($id);
            $personne->films()->detach();
            $personne->delete();
            return redirect()->route('Personnes.index')->with('message', 'Personne '.$personne->nom.' '.$personne->prenom.'a été supprimé.');
        }catch (\throwable $e){
            return redirect()->route('Personnes.index')->with('message', 'Impossible de supprimer la personne '.$personne->nom.' '.$personne->prenom.'.');
        }
    }
    public function attach(Request $request)
    {
        $personne = Personne::find($request->acteur_id);
        $personne->films()->attach($request->film_id);
        return redirect()->route('Personnes.edit', $personne);

    }
    public function detach(Request $request)
    {
        try{
            $personne = Personne::find($request->acteur_id);
            $personne->films()->detach($request->film_id);
            return redirect()->route('Personnes.edit', $personne);
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('Personnes.edit')->withErrors(['l\'ajout n\'a pas fonctionné']);
        }
    }
}
