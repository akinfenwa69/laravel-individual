<x-app-layout>
    <main class="card">
        <div class="card-header">
            <h1>Teams</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            <a href="{{ route('teams.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mb-6 w-fit">Crear</a>
            <div class="grid grid-cols-1 sm:grid-cols-2! lg:grid-cols-3! xl:grid-cols-4! gap-8">
                @foreach ($teams as $team)
                    <div class="relative bg-(--accent) border border-(--border) p-6 rounded-xl shadow-sm hover:shadow-md transition hover:scale-105">
                        <div class="absolute right-3 top-3 flex gap-2">
                            <a href="{{ route('teams.show', $team) }}"
                                class="px-3 py-1.5 rounded bg-gray-500/80 border border-gray-500 hover:bg-gray-500 text-white text-sm font-medium transition">
                                Mostrar
                            </a>
                            <a href="{{ route('teams.edit', $team) }}"
                                class="px-3 py-1.5 rounded bg-blue-500/80 border border-blue-500 hover:bg-blue-500 text-white text-sm font-medium transition">
                                Editar
                            </a>
                            <form action="{{ route('teams.destroy', $team) }}" method="post" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="px-3 py-1.5! rounded bg-red-500/80 border border-red-500 hover:bg-red-500 text-white text-sm font-medium transition">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold">#{{ $team->id }}</h3>
                        </div>
                        <h2 class="text-2xl font-bold mb-2">{{ $team->name }}</h2>
                        @if($team->description)
                            <p class="text-(--muted-foreground) mb-3 truncate">{{ $team->description }}</p>
                        @endif
                        <div class="flex items-center gap-2 mb-3">
                            <div class="w-6 h-6 rounded-lg border border-(--border)" style="background-color: {{ $team->color }}"></div>
                            <span class="text-sm text-(--muted-foreground)">{{ $team->color }}</span>
                        </div>
                        <div>
                            <span class="text-sm font-medium text-(--muted-foreground)">Jugador: </span>
                            @foreach ($players as $player)
                                @if ($player->id === $team->player_id)
                                    <span class="font-medium">{{ $player->name }}</span>
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-app-layout>
