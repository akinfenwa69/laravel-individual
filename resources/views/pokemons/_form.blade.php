<div class="flex flex-col gap-5">
    <div class="flex flex-col gap-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Pikachu..."
            value="{{ old('name', $pokemon->name ?? '') }}">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-3">
        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="This pokémon can...">{{ old('description', $pokemon->description ?? '') }}</textarea>
        @error('description')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="shiny">Shiny?</label>
        <input type="checkbox" name="shiny" id="shiny" {{ old('shiny') ? 'checked' : '' }}>
        <p class="text-sm text-(--muted-foreground)">Deixar-ho en false</p>
        @error('shiny')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="grid grid-cols-3 gap-5">
        <h2 class="col-span-3 text-2xl">Stats</h2>
        <div class="flex flex-col gap-3">
            <label for="hp">HP (Health Points)</label>
            <input type="number" name="hp" id="hp" value="{{ old('hp', $pokemon->hp ?? 0) }}"
                min="0" max="255">
            @error('hp')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-3">
            <label for="atk">ATK (Attack)</label>
            <input type="number" name="atk" id="atk" value="{{ old('atk', $pokemon->atk ?? 0) }}"
                min="0" max="255">
            @error('atk')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-3">
            <label for="def">DEF (Defense)</label>
            <input type="number" name="def" id="def" value="{{ old('def', $pokemon->def ?? 0) }}"
                min="0" max="255">
            @error('def')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-3">
            <label for="sp_atk">SP. ATK (Special Attack)</label>
            <input type="number" name="sp_atk" id="sp_atk" value="{{ old('sp_atk', $pokemon->sp_atk ?? 0) }}"
                min="0" max="255">
            @error('sp_atk')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-3">
            <label for="sp_def">SP. DEF (Special Defense)</label>
            <input type="number" name="sp_def" id="sp_def" value="{{ old('sp_def', $pokemon->spd_def ?? 0) }}"
                min="0" max="255">
            @error('sp_def')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-3">
            <label for="spd">SPD (Speed)</label>
            <input type="number" name="spd" id="spd" value="{{ old('spd', $pokemon->spd ?? 0) }}"
                min="0" max="255">
            @error('spd')
                <span>{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="flex flex-col gap-3">
        <button type="submit"
            class="w-fit px-5 py-3 bg-blue-500 hover:bg-blue-600 border border-blue-800 cursor-pointer rounded">Enviar</button>
        <a href="{{ route('pokemons.index') }}">&larr; Tornar</a>
    </div>
</div>
