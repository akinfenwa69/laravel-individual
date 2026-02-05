@extends('layout')
@section('title', 'Players')
@section('content')

    <main class="card">
        <div class="card-header">
            <h1>Players</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <a href="{{ route('players.create') }}">Crear</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->name }}</td>
                            <td class="flex">
                                <a href="{{ route('players.edit', $player) }}"
                                    class="p-3 rounded bg-blue-500/50 border-2 border-blue-500 hover:bg-blue-500">
                                    Editar
                                </a>
                                <form action="{{ route('players.destroy', $player) }}" method="post"
                                    onsubmit="confirm('Elimniar al jugador comporta eliminar els seus equips. Estàs segur?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="p-3 rounded transition cursor-pointer border-2 border-red-500 bg-red-500/50 hover:bg-red-500">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
