<x-app-layout>
    <main class="card">
        <div class="card-header">
            <h1>Countries</h1>
            <p>...</p>
        </div>
        <div class="card-content">
            @if ($user->role == "ADMIN")
            <a href="{{ route('countries.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mb-6 w-fit">Crear</a>
            @endif
            <div class="grid grid-cols-1 sm:grid-cols-2! lg:grid-cols-3! xl:grid-cols-4! gap-8">
                @foreach ($countries as $country)
                    <div class="relative bg-(--accent) border border-(--border) p-6 rounded-xl shadow-sm hover:shadow-md transition hover:scale-105">
                        @if ($user->role == "ADMIN")
                        <div class="absolute right-3 top-3 flex gap-2">
                            <a href="{{ route('countries.edit', $country) }}"
                                class="px-3 py-1.5 rounded bg-blue-500/80 border border-blue-500 hover:bg-blue-500 text-white text-sm font-medium transition">
                                Editar
                            </a>
                            <form action="{{ route('countries.destroy', $country) }}" method="post" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="px-3 py-1.5! rounded bg-red-500/80 border border-red-500 hover:bg-red-500 text-white text-sm font-medium transition">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        @endif
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold">#{{ $country->id }}</h3>
                        </div>
                        <h2 class="text-2xl font-bold mb-1">{{ $country->name }}</h2>
                        <p class="text-lg text-(--muted-foreground) mb-3">{{ $country->continent }}</p>
                        <div class="mb-4">
                            <span class="text-sm font-medium text-(--muted-foreground)">Jugador: </span>
                            @foreach ($players as $player)
                                @if ($player->id === $country->player_id)
                                    <p
                                        class="font-medium">{{ $player->name }}</p>
                                    @break
                                @endif
                            @endforeach
                            @if(!$country->player_id)
                                <span class="text-(--muted-foreground)">Sin asignar</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-app-layout>
