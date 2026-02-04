@extends('layout')
@section('title', 'Create player')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Crear Player</h1>
        </div>
        <div class="card-content">
            <form action="{{ route('players.store') }}" method="POST">
                @csrf
                @include('players._form')
            </form>
        </div>
    </div>

@endsection
