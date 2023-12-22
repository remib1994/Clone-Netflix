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
Route::controller(UsagersController::class)->prefix('login')->group(function () {
    Route::get('', 'showLoginForm')->name('showLoginForm');
    Route::post('', 'login')->name('login');
    Route::post('logout','logout')->name('logout');
});
/*Route::post('destroy', [UsagersController::class, 'destroy'])->name('logout');*/

//Route Films
Route::resource('Films',FilmController::class);
Route::get('Films/{film}/',[FilmController::class,'show'])->name('films.show');


//Route Personne
Route::resource('Personnes',PersonneController::class)->only(['index', 'edit','update', 'create', 'store','show']);
Route::controller(PersonneController::class)->prefix('Personnes')->group(function () {
    Route::post('attach', 'attach')->name('ActeurFilm.attach');
    Route::post('detach', 'detach')->name('ActeurFilm.detach');
    Route::get('destroy/{id}', 'destroy')->name('Personnes.destroy');
});



