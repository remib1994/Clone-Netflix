<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

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
        return View('Films.Create');
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
    public function show(Film $film)
    {
        
        return View('Films.show', compact('film'));

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
