<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $filmsCanada = Film::where('pays', 'Canada')->get();
        $filmsGenre = Film::where('genre', 'thriller')->get();
        $filmsUnivers = Film::where('univers', 'Marvel')->get();
        $films18 = Film::where('audience', '18')->get();
        $filmsTP = Film::where('audience', 'TP')->get();

        return view('Films.index',
            [
                'films'=>$films,
                'filmsCanada'=>$filmsCanada,
                'filmsGenre'=>$filmsGenre,
                'filmsUnivers'=>$filmsUnivers,
                'films18'=>$films18,
                'filmsTP'=>$filmsTP,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $realisateur = Personne::all();
        $producteur = Personne::all();
        return View('Films.Create',[

            'realisateurs'=>$realisateur,
            'producteurs'=>$producteur,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            $film = new Film();
            $film->titre = $request->titre;
            $film->genre = $request->genre;
            $film->pays = $request->pays;
            $film->univers = $request->univers;
            $film->audience = $request->audience;
            $film->realisateur_id = $request->realisateur_id;
            $film->producteur_id = $request->producteur;
            $film->description = $request->description;
            $film->urlaffiche = $request->urlaffiche;
            $film->datesortie = $request->datesortie;
            $film->rating = $request->rating;
            $film->urltrailer = $request->urltrailer;

            $uploadedFile = $request->file('urlaffiche');

            $nomFichierUnique = str_replace('','_',$film->titre). '-' . uniqid() . '.' . $uploadedFile->extension();
            try{
                $request->urlaffiche->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Impossible de copier le fichier dans le dossier img/films");
            }
            $film->urlaffiche = $nomFichierUnique;



            $film->save();

        }
        catch(\Throwable $e){
           Log::debug($e);
           return redirect()->route('Films.index')->with('error','Impossible de créer le film');
        }
        return redirect()->route('Films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $films = Film::find($id);
        return View('Films.show', [
            'films'=>$films,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $realisateur = Personne::all();
        $producteur = Personne::all();
        $acteurs = Personne::all();
        $acteursFilm = Film::find($id)->acteurs;
        $films = Film::findOrFail($id);
        return View('Films.modifier', [
            'acteursFilm'=>$acteursFilm,
            'acteurs'=>$acteurs,
            'realisateurs'=>$realisateur,
            'producteurs'=>$producteur,
            'films'=>$films,
        ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $films = Film::find($id);
            $films->urlaffiche = $request->urlaffiche;
            $films->update($request->all());

            $uploadedFile = $request->file('urlaffiche');
            $nomFichierUnique = str_replace(' ', '_', $films->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try {
                $request->urlaffiche->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $films->urlaffiche = $nomFichierUnique;
            $films->save();
            return redirect()->route('Films.index');
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('Films.edit',$films)->withErrors(['l\'ajout n\'a pas fonctionné']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $films = Film::findOrFail($id);
            $films->acteurs()->detach();
            $films->delete();
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('Films.index')->with('error','Impossible de supprimer le film');
        }
        return redirect()->route('Films.index')->with('success','Film supprimer');
    }
    public function storeActeurFilm(Request $request)
    {
        try{
      $acteur = Personne::find($request->acteur_id);
        $film = Film::find($request->film_id);

        if($acteur->films->contains($film))
        {
            Log::debug("L'acteur est deja dans le film");
        }
        else
        {
            $acteur->films()->attach($film);
            $acteur->save();
        }
        return redirect()->route('Films.show');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('Films.index');
        }

    }
    public function attach(Request $request)
    {
        $film = Film::find($request->film_id);
        $film->acteurs()->attach($request->acteur_id);
        return redirect()->route('Films.edit', $request->film_id);

    }
    public function detach(Request $request)
    {
        $film = Film::find($request->film_id);
        $film->acteurs()->detach($request->acteur_id);
        return redirect()->route('Films.edit', $request->film_id);
    }
}
