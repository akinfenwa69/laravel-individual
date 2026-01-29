@extends('layout')
@section('content')
    <main class="card">
        <div class="card-header">
            <h1>Title</h1>
            <p>Description</p>
        </div>
        <div class="card-content">
            <a href="/pokemons">Pokémons</a>
            <a href="/teams">Teams</a>
        </div>
        <div class="card-footer">
            <p>Footer</p>
        </div>
    </main>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
@endsection
