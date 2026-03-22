<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = User::all();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =  $request->validate([
            'name'  =>  'required|string|max:255|unique:users,name',
        ]);

        Player::create($validated);
        return redirect()->route('players.index')->with('status','Player created!');
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
    public function edit(User $player)
    {
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $player)
    {
        $validated = $request->validate([
            'name'  =>  'required|string|max:255|unique:users,name,'.$player->id,
        ]);

        $player->update($validated);
        return redirect()->route('players.index')->with('status', 'Player updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $player)
    {
        $player->delete();
        return redirect()->route('players.index')->with('status', 'Player deleted!');
    }
}