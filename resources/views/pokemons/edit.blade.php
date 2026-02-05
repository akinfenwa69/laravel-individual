@extends('layout')
@section('title', 'Edit pokémon')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Editar Pokémon</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <form action="{{ route('pokemons.update', $pokemon) }}" method="POST">
                @csrf
                @method('put')
                @include('pokemons._form')
            </form>
        </div>
    </div>

@endsection
