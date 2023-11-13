<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PersonneController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Pokemons',
    [PokemonsController::class,'index'])->name('pokemons.index');
Route::resource('Films',FilmController::class);

Route::get('Films/{film}/',
    [FilmController::class,'show'])->name('films.show');

    Route::get('Films.create',[FilmController::class,'create'])->name('films.create');

    Route::post('Films.store',[FilmController::class,'store'])->name('films.store');

Route::get('Films/{film}/edit',
    [FilmController::class,'edit'])->name('films.edit');

Route::resource('Personnes', PersonneController::class);

Route::delete('Films/{id}',
    [FilmController::class,'destroy'])->name('films.destroy');
