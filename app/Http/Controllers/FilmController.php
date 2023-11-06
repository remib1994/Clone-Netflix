<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use Illuminate\Support\Facades\Log;

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
        

        return view('Films.index',
            [
                'films'=>$films,
                'filmsCanada'=>$filmsCanada,
                'filmsGenre'=>$filmsGenre,
                'filmsUnivers'=>$filmsUnivers,
                'films18'=>$films18,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $realisateur = Personne::where('role', 'realisateur')->get();
        $producteur = Personne::where('role', 'producteur')->get();
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
            $film = new Film($request->all());
            
            $film->save();
            
        }
        catch(\Throwable $e){
           Log::debug($e);
        }
        return redirect()->route('films.index');
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
        return redirect()->route('films.show');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('films.index');
        }
        
    }
}
