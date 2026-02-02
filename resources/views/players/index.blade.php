@extends('layout')
@section('title', 'Players')
@section('content')

    <main class="card">
        <div class="card-header">
            <h1>Players</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
