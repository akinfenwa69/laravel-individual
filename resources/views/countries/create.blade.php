@extends('layout')
@section('title', 'Create country')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Crear Country</h1>
        </div>
        <div class="card-content">
            <form action="{{ route('countries.store') }}" method="POST">
                @csrf
                @include('countries._form')
            </form>
        </div>
    </div>

@endsection
