<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pokemons', PokemonController::class)->parameters([
    'pokemons'=>'pokemon'
]);
Route::resource('teams', TeamController::class)->parameters([
    'teams'=>'team'
]);
Route::get('guide', function () {
    return view('guide.index');
});
Route::resource('countries', CountryController::class)->parameters([
    'countries'=>'country'
]);
Route::resource('players', PlayerController::class)->parameters([
    'players'=>'player'
]);
