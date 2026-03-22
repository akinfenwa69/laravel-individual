<x-app-layout>
    <link rel="stylesheet" href="/styles/pokemons.css">
    <main class="card">
        <div class="card-header">
            <h1>Pokémons</h1>
            <p>Llistat de Pokémons global</p>
        </div>
        <div class="card-content">
            <a href="{{ route('pokemons.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mb-6 w-fit">Crear</a>
            <div class="grid grid-cols-1 sm:grid-cols-2! lg:grid-cols-3! xl:grid-cols-4! gap-8">
                @foreach ($pokemons as $p)
                    <div class="relative bg-(--accent) border border-(--border) p-6 rounded-xl shadow-sm hover:shadow-md transition hover:scale-105">
                        <div class="absolute right-3 top-3 flex gap-2">
                            <a href="{{ route('pokemons.edit', $p) }}"
                                class="px-3 py-1.5 rounded bg-blue-500/80 border border-blue-500 hover:bg-blue-500 text-white text-sm font-medium transition">
                                Editar
                            </a>
                            <form action="{{ route('pokemons.destroy', $p) }}" method="POST" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="px-3 py-1.5! rounded bg-red-500/80 border border-red-500 hover:bg-red-500 text-white text-sm font-medium transition">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold">#{{ $p->id }}</h3>
                        </div>
                        <div class="mb-3">
                            <h2 class="text-2xl font-bold flex items-center gap-2">
                                {{ $p->name }}
                            </h2>
                            @if($p->description)
                                <p class="text-(--muted-foreground) mt-2 truncate">{{ $p->description }}</p>
                            @endif
                        </div>
                        <div class="grid grid-cols-3 gap-1">
                            <div class="stat hp">
                                <span>{{ $p->hp }}</span>
                                <p>HP</p>
                            </div>
                            <div class="stat atk">
                                <span>{{ $p->atk }}</span>
                                <p>ATK</p>
                            </div>
                            <div class="stat def">
                                <span>{{ $p->def }}</span>
                                <p>DEF</p>
                            </div>
                            <div class="stat sp_atk">
                                <span>{{ $p->sp_atk }}</span>
                                <p>SP. ATK</p>
                            </div>
                            <div class="stat sp_def">
                                <span>{{ $p->sp_def }}</span>
                                <p>SP. DEF</p>
                            </div>
                            <div class="stat spd">
                                <span>{{ $p->spd }}</span>
                                <p>SPD</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-app-layout>
