@extends('layout')
@section('title', 'Edit player')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Edit Player</h1>
        </div>
        <div class="card-content">
            <form action="{{ route('players.update', $player) }}" method="POST">
                @csrf
                @method('put')
                @include('players._form', ['players' => $player])
            </form>
        </div>
    </div>

@endsection
