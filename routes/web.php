<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pokemons', PokemonController::class);
Route::resource('teams', TeamController::class);
Route::get('guide', function () {
    return view('guide.index');
});
Route::resource('countries', CountryController::class);
Route::resource('players', PlayerController::class);
