<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\UsagersController;
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
    return view('Auth.login');
});

Route::controller(UsagersController::class)->prefix('login')->group(function () {
    Route::get('', 'create')->name('login');
    Route::post('', 'store');
});
Route::post('logout', [UsagersController::class, 'destroy'])->name('logout');

Route::get('Pokemons',
    [PokemonsController::class,'index'])->name('pokemons.index');
Route::resource('Films',FilmController::class);

Route::resource('Personnes',PersonneController::class)->only(['index', 'edit','update','destroy', 'create', 'store','show']);
Route::controller(PersonneController::class)->prefix('Personnes')->group(function () {
    Route::post('attach', 'attach')->name('ActeurFilm.attach');
    Route::post('detach', 'detach')->name('ActeurFilm.detach');
});



