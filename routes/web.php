<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pokemons', PokemonController::class);

Route::resource('teams', TeamController::class);
