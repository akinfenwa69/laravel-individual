<div class="flex flex-col gap-5">
    <div class="flex flex-col">
        <label for="name">Name</label>
        <input type="text" value="{{ old('name', $country->name ?? '') }}" name="name" id="name"
            placeholder="Spain..." class="px-3 py-2 rounded border">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col">
        <label for="continent">Continent</label>
        <select name="continent" id="continent" class="px-3 py-2 rounded border cursor-pointer">
            @php
                $continent = old('continent', $country->continent ?? '');
            @endphp
            <option {{ $continent === 'Africa' ? 'selected' : null }} value="Africa">Africa</option>
            <option {{ $continent === 'Antartica' ? 'selected' : null }} value="Antartica">Antartica</option>
            <option {{ $continent === 'Asia' ? 'selected' : null }} value="Asia">Asia</option>
            <option {{ $continent === 'Europe' ? 'selected' : null }} value="Europe">Europe</option>
            <option {{ $continent === 'North America' ? 'selected' : null }} value="North America">North
                America</option>
            <option {{ $continent === 'Oceania' ? 'selected' : null }} value="Oceania">Oceania</option>
            <option {{ $continent === 'South America' ? 'selected' : null }} value="South America">South
                America</option>
            <option {{ $continent === 'Zealandia' ? 'selected' : null }} value="Zealandia">Zealandia</option>
        </select>
        @error('continent')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col">
        <label for="player_id">Player ID</label>
        <select name="player_id" id="player_id" class="border rounded py-2 px-3 cursor-pointer">
            @php
                $player_id = old('player_id', $country->player_id ?? '');
            @endphp
            <option value="">-</option>
            @foreach ($players as $player)
                <option value="{{ $player->id }}" {{ $player_id === $player->id ? 'selected' : null }}>
                    {{ $player->name }}
                </option>
            @endforeach
        </select>
        @error('player_id')
            <span>{{ $message }}</span>
        @enderror
        <p class="text-gray-400">
            Sense jugador?
            <a href="{{ route('players.create') }}" class="hover:text-white transition underline">
                Crear jugador
            </a>
        </p>
    </div>

    <div class="flex flex-col items-center gap-2">
        <input type="submit" value="Enviar"
            class="cursor-pointer w-fit bg-blue-500 hover:bg-blue-600 transition rounded py-2 px-5" />
        <a href="{{ route('countries.index') }}">&larr; Tornar</a>
    </div>
</div>
