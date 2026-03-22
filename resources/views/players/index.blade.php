<x-app-layout>
    <main class="card">
        <div class="card-header">
            <h1>Players</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <a href="{{ route('players.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mb-6 w-fit">Crear</a>
<div class="grid grid-cols-1 sm:grid-cols-2! lg:grid-cols-3! xl:grid-cols-4! gap-8">
                @foreach ($players as $player)
                    <div class="relative bg-(--accent) border border-(--border) p-6 rounded-xl shadow-sm hover:shadow-md transition hover:scale-105">
                        <div class="absolute right-3 top-3 flex gap-2">
                            <a href="{{ route('players.edit', $player) }}"
                                class="px-3 py-1.5 rounded bg-blue-500/80 border border-blue-500 hover:bg-blue-500 text-white text-sm font-medium transition">
                                Editar
                            </a>
                            <form action="{{ route('players.destroy', $player) }}" method="post" class="inline"
                                onsubmit="confirm('Elimniar al jugador comporta eliminar els seus equips. Estàs segur?')">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="px-3 py-1.5! rounded bg-red-500/80 border border-red-500 hover:bg-red-500 text-white text-sm font-medium transition">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold">#{{ $player->id }}</h3>
                        </div>
                        <h2 class="text-2xl font-bold mb-4">{{ $player->name }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-app-layout>
