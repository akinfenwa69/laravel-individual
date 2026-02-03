<div class="flex flex-col gap-5">
    <div class="flex flex-col">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Spain..." class="px-3 py-2 rounded border">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col">
        <label for="continent">Continent</label>
        <select name="continent" id="continent" class="px-3 py-2 rounded border cursor-pointer">
            <option value="Africa">Africa</option>
            <option value="Antartica">Antartica</option>
            <option value="Asia">Asia</option>
            <option value="Europe">Europe</option>
            <option value="North America">North America</option>
            <option value="Oceania">Oceania</option>
            <option value="South America">South America</option>
            <option value="Zealandia">Zealandia</option>
        </select>
        @error('continent')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col">
        <label for="player_id">Player ID</label>
        <input type="text" name="player_id" id="player_id" placeholder="1..." class="border rounded py-2 px-3">
        <p class="text-gray-400">Sense jugador? <a href="{{ route('players.create') }}"
                class="hover:text-white transition underline">Crear jugador</a></p>
        @error('player_id')
            <span>{{ $message }}</span>
        @enderror
    </div>
</div>
