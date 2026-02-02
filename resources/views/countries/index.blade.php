@extends('layout')
@section('title', 'Countries')
@section('content')

    <main class="card">
        <div class="card-header">
            <h1>Country</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Continent</th>
                        <th>Player ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->name }}</td>
                            <td>{{ $country->continent }}</td>
                            <td>{{ $country->player_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
