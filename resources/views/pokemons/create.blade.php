@extends('layout')
@section('title', 'Crear pokémon')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Crear Pokémon</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <form action="{{ route('pokemons.store') }}" method="POST">
                @csrf
                @include('pokemons._form')
            </form>
        </div>
    </div>

@endsection
