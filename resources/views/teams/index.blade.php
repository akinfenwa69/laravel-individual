@extends('layout')
@section('title', 'Teams')
@section('content')

    <main class="card">
        <div class="card-header">
            <h1>Teams</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <a href="{{ route('teams.create') }}">Crear</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Color</th>
                        <th>Player</th>
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->description }}</td>
                            <td class="text-[{{ $team->color }}]">{{ $team->color }}</td>
                            <td>
                                @foreach ($players as $player)
                                    @if ($player->id === $team->player_id)
                                        {{ $player->name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="flex">
                                <a href="{{ route('teams.show', $team) }}"
                                    class="p-3 bg-(--accent)/50 hover:bg-(--accent) border border-(--border) rounded">Mostrar</a>
                                <a href="{{ route('teams.edit', $team) }}"
                                    class="p-3 bg-blue-500 hover:bg-blue-600 border border-blue-800 rounded">Editar</a>
                                <form action="{{ route('teams.destroy', $team) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="p-3 bg-red-500 hover:bg-red-600 cursor-pointer rounded border border-red-800">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
