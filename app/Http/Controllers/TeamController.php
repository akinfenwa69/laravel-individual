<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Pokemon;
use App\Models\PokemonTeam;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $players = Player::all();
        return view('teams.index', compact('teams','players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $players = Player::all();
        return view('teams.create', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name'          =>  'required|string|max:255|unique:teams,name',
            'description'   =>  'required|string|max:255',
            'color'         =>  'required|string|max:7|min:4',
            'player_id'     =>  'nullable|integer'
        ]);

        Team::create($validated);
        return redirect()->route('teams.index')->with('status',' Team created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        $pokemon_team = PokemonTeam::all();
        $pokemons = Pokemon::all();
        return view('teams.show', compact('team', 'pokemon_team', 'pokemons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $players = Player::all();
        return view('teams.edit', compact('team', 'players'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name'          =>  'required|string|max:255|unique:teams,name,' . $team->id,
            'description'   =>  'required|string|max:255',
            'color'         =>  'required|string|max:7|min:4',
            'player_id'     =>  'nullable|integer'
        ]);

        $team->update($validated);
        return redirect()->route('teams.index')->with('status',' Team updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('status', 'Team deleted!');
    }
}
