@extends('layout')
@section('title', 'Edit team')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Edit team</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <form action="{{ route('teams.update', $team) }}" method="post">
                @csrf
                @method('put')
                @include('teams._form', ['teams' => $team])
            </form>
        </div>
    </div>

@endsection
