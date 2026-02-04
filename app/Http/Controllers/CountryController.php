<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Player;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        $players = Player::all();
        return view('countries.index', compact('countries', 'players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $players = Player::all();
        return view('countries.create', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      =>  'required|string|max:255|unique:countries,name',
            'continent' =>  'required|string',
            'player_id' =>  'nullable|unique:countries,player_id',
        ]);

        Country::create($validated);
        return redirect()->route('countries.index')->with('status', 'Country created!');
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
    public function edit(Country $country)
    {
        $players = Player::all();
        return view('countries.edit', compact('country', 'players'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
         $validated = $request->validate([
            'name'      =>  'required|string|max:255|unique:countries,name,' . $country->id,
            'continent' =>  'required|string',
            'player_id' =>  'nullable|unique:countries,player_id,' . $country->id,
        ]);

        $country->update($validated);
        return redirect()->route('countries.index')->with('status', 'Country updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('status', 'Country eliminated!');
    }
}
