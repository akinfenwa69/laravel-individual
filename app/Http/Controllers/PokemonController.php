<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PokemonController extends Controller
{
    public function index(): View {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }
}
