<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'          =>  'required|string|max:255|unique:pokemons,name',
            'description'   =>  'required|string|max:255',
            'shiny'         =>  'boolean',
            'hp'            =>  'required|integer|min:0|max:255',
            'atk'           =>  'required|integer|min:0|max:255',
            'def'           =>  'required|integer|min:0|max:255',
            'sp_atk'        =>  'required|integer|min:0|max:255',
            'sp_def'        =>  'required|integer|min:0|max:255',
            'spd'           =>  'required|integer|min:0|max:255',
        ]);

        Pokemon::create($validate);
        return redirect()->route('pokemons.index')->with('status', 'Pokémon created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemons.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
    {
          $validate = $request->validate([
            'name'          =>  'required|string|max:255|unique:pokemons,name,' . $pokemon->id,
            'description'   =>  'required|string|max:255',
            'shiny'         =>  'boolean',
            'hp'            =>  'required|integer|min:0|max:255',
            'atk'           =>  'required|integer|min:0|max:255',
            'def'           =>  'required|integer|min:0|max:255',
            'sp_atk'        =>  'required|integer|min:0|max:255',
            'sp_def'        =>  'required|integer|min:0|max:255',
            'spd'           =>  'required|integer|min:0|max:255',
        ]);

        $pokemon->update($validate);
        return redirect()->route('pokemons.index')->with('status', 'Pokémon updates!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->route('pokemons.index')->with('status', 'Pokémon deleted!');
    }
}
