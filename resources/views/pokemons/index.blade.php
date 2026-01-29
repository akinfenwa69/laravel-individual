@extends('layout')
@section('title', 'Pokémons')
@section('content')

    <link rel="stylesheet" href="/styles/pokemons.css">
    <main class="card">
        <div class="card-header">
            <h1>Pokémons</h1>
            <p>Llistat de Pokémons</p>
        </div>
        <div class="card-content">
            <ul class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-3">
                @foreach ($pokemons as $p)
                    <li class="bg-(--accent) border border-(--border) p-3 rounded-xl">
                        <div class="grid gap-2 mb-4">
                            <div class="flex gap-1 items-center">
                                <h2 class="text-2xl">{{ $p->name }}</h2>
                                <span class="text-xs self-start text-yellow-500">{{ $p->shiny ? 'shiny' : null }}</span>
                            </div>
                            <p class="text-sm text-(--muted-foreground)">{{ $p->description }}</p>
                        </div>
                        <div class="grid grid-cols-3 gap-1">
                            <div class="stat hp">
                                <span>{{ $p->hp }}</span>
                                <p>HP</p>
                            </div>
                            <div class="stat atk">
                                <span>{{ $p->atk }}</span>
                                <p>ATK</p>
                            </div>
                            <div class="stat def">
                                <span>{{ $p->def }}</span>
                                <p>DEF</p>
                            </div>
                            <div class="stat sp_atk">
                                <span>{{ $p->sp_atk }}</span>
                                <p>SP. ATK</p>
                            </div>
                            <div class="stat sp_def">
                                <span>{{ $p->sp_def }}</span>
                                <p>SP. DEF</p>
                            </div>
                            <div class="stat spd">
                                <span>{{ $p->spd }}</span>
                                <p>SPD</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card-footer">
            <p>footer</p>
        </div>
    </main>
@endsection
