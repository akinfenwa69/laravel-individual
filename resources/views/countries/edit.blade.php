@extends('layout')
@section('title', 'Edit Country')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Editar Country</h1>
        </div>
        <div class="card-content">
            <form action="{{ route('countries.update', $country) }}" method="post">
                @csrf
                @method('PUT')
                @include('countries._form', ['countries' => $country])
            </form>
        </div>
    </div>

@endsection
