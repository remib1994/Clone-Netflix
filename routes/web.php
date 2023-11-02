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


Route::resource('Personnes', PersonneController::class);


