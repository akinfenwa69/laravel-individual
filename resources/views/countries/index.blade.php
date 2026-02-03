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
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->name }}</td>
                            <td>{{ $country->continent }}</td>
                            <td>{{ $country->player_id }}</td>
                            <td class="flex">
                                <a href="{{ route('countries.edit', $country) }}"
                                    class="p-3 rounded bg-blue-500/50 border-2 border-blue-500 hover:bg-blue-500">
                                    Editar
                                </a>
                                <form action="{{ route('countries.destroy', $country) }}">
                                    @csrf
                                    @method('DELETE')
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
