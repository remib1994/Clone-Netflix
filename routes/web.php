<?php

use Illuminate\Support\Facades\Route;
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
//Route Login
Route::get('/', function () {
    return view('Auth.login');
});
//Route Usager
Route::resource('Usagers',UsagersController::class)->only(['index','show','create','store']);
Route::controller(UsagersController::class)->prefix('Usagers')->group(function () {
    Route::get('destroy/{id}', 'destroy')->name('Usagers.destroy')->middleware('CheckRole:admin');
    Route::get('edit/{id}', 'edit')->name('Usagers.edit')->middleware('Auth');
    Route::post('update/{id}', 'update')->name('Usagers.update')->middleware('Auth');

});
Route::controller(UsagersController::class)->prefix('login')->group(function () {
    Route::get('', 'showLoginForm')->name('showLoginForm');
    Route::post('', 'login')->name('login');
    Route::post('logout','logout')->name('logout');
});
/*Route::post('destroy', [UsagersController::class, 'destroy'])->name('logout');*/

//Route Films
Route::resource('Films',FilmController::class)->only(['index', 'edit','update', 'create', 'store','show'])->middleware('CheckRole');
Route::get('Films/{film}/');
Route::controller(FilmController::class)->prefix('Films')->group(function () {
    Route::post('attach', 'attach')->name('FilmActeur.attach');
    Route::post('detach', 'detach')->name('FilmActeur.detach');
});

    Route::get('Films.create',[FilmController::class,'create'])->name('Films.create')->middleware('CheckRole:admin');

    Route::post('Films.store',[FilmController::class,'store'])->name('Films.store')->middleware('CheckRole:admin');

Route::get('Films/{film}/edit',
    [FilmController::class,'edit'])->name('Films.edit') ->middleware('CheckRole:admin');
Route::delete('Films/{id}',
    [FilmController::class,'destroy'])->name('Films.destroy')->middleware('CheckRole:admin');

//Route Personne
Route::resource('Personnes',PersonneController::class)->only(['index','update', 'create', 'store','show'])->middleware('CheckRole');
Route::controller(PersonneController::class)->prefix('Personnes')->group(function () {
    Route::post('attach', 'attach')->name('ActeurFilm.attach')->middleware('CheckRole:admin');
    Route::post('detach', 'detach')->name('ActeurFilm.detach')->middleware('CheckRole:admin');
    Route::get('destroy/{id}', 'destroy')->name('Personnes.destroy')->middleware('CheckRole:admin');
    Route::get('edit/{id}', 'edit')->name('Personnes.edit')->middleware('CheckRole:admin');

});

