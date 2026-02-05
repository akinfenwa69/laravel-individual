@extends('layout')
@section('title', 'Mostra equip')
@section('content')

    <link rel="stylesheet" href="/styles/pokemons.css">
    <div class="card">
        <div class="card-header">
            <h1 class="text-[{{ $team->color }}]">{{ $team->name }}</h1>
            <p>{{ $team->description }}</p>
        </div>
        <div class="card-content">
            <ul class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-3">
                @foreach ($pokemon_team as $pt)
                    @foreach ($pokemons as $p)
                        @if ($pt->team_id === $team->id && $pt->pokemon_id === $p->id)
                            <li class="bg-(--accent) border border-(--border) p-3 rounded-xl">
                                <div class="grid gap-2 mb-4">
                                    <div class="flex gap-1 items-center">
                                        <h2 class="text-2xl">{{ $p->name }}</h2>
                                        <span
                                            class="text-xs self-start text-yellow-500">{{ $p->shiny ? 'shiny' : null }}</span>
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
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>

@endsection
