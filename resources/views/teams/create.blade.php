@extends('layout')
@section('title', 'Create team')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Create team</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <form action="{{ route('teams.store') }}" method="post">
                @csrf
                @include('teams._form')
            </form>
        </div>
    </div>

@endsection
