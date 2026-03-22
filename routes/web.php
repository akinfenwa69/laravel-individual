<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//
// PUBLIC. Ho pot veure tothom
//

Route::get('/pokemons', [PokemonController::class, 'public']);
Route::get('/countries', [CountryController::class, 'public']);
Route::get('/guide', function() {
    return view('public.guide');
});

//
// USER. Accessible per a usuaris registrats
//

Route::resource('/dashboard/pokemons', PokemonController::class)
->parameters(['pokemons' => 'pokemon'])
->middleware(['auth']);
Route::resource('/dashboard/teams', TeamController::class)
->parameters(['teams' => 'team'])
->middleware(['auth']);
Route::resource('/dashboard/countries', CountryController::class)
->parameters(['pokemons' => 'pokemon'])
->middleware(['auth']);

//
// ADMIN. Accessible per a usuaris amb rol superior
//

Route::resource('/dashboard/players', PlayerController::class)
->parameters(['players' => 'player'])
->middleware(['auth', 'role:ADMIN']);

require __DIR__.'/auth.php';
