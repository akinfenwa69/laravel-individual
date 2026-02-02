@extends('layout')
@section('title', 'Guide')
@section('content')

    <main class="card">
        <h1 class="text-3xl text-center">Guia</h1>
        <hr>
        <div>
            <p class="text-2xl my-3">Pokémon N:M Team</p>
            <p class="text-muted-foreground">Un Pokémon pot estar en molts equips. Els equips poden tindre molts Pokémon.
                L'equip té un màxim (<code>limit()</code>) de 6 Pokémon.</p>
            <p class="text-2xl my-3">Player 1:N Team</p>
            <p class="text-muted-foreground">Un jugador pot tindre molts equips. Un equip pot pertànyer a un sol jugador.</p>
            <p class="text-2xl my-3">Player 1:1 Country</p>
            <p class="text-muted-foreground">Un jugador pot representar a un país. Un país pot ser representat per un
                jugador. És <code>unique()</code> perquè un jugador no pot pertànyer a més d'un país.</p>
        </div>
    </main>

@endsection
