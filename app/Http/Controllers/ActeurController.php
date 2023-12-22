<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActeurRequest;
use Illuminate\Http\Request;
use App\Models\Personne;
use Illuminate\Support\Facades\Log;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActeurRequest $request)
    {
     try{
            $acteur = new Personne($request->all());
            
            $acteur->save();
            
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
        //
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
