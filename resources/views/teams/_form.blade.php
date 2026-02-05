<div class="flex flex-col gap-5">
    <div class="flex flex-col gap-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $team->name ?? '') }}"
            placeholder="Team Meta..." class="border border p-2 rounded">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Combinació per vèncer al TOP 1..."
            class="border border p-2 rounded">{{ old('description', $team->description ?? '') }}</textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <label for="color">Color (HEX)</label>
        <div class="flex items-center gap-3">
            <span id="color_preview"
                class="border border-white rounded w-8 h-8 text-xs flex items-center justify-center text-red-500">N/A</span>
            <input type="text" name="color" id="color" placeholder="#FFF / #FFFFFF"
                class="border border p-2 rounded" value="{{ old('color', $team->color ?? '') }}"
                oninput="changeColor()">
        </div>
        @error('color')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <label for="player_id">Player ID</label>
        <select name="player_id" id="player_id" class="border border p-2 rounded cursor-pointer">
            @foreach ($players as $player)
                @php
                    $player_id = old('player_id', $team->player_id ?? '');
                @endphp
                <option value="{{ $player->id }}" {{ $player_id === $player->id ? 'selected' : null }}>
                    {{ $player->name }}</option>
            @endforeach
        </select>
        @error('player_id')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <button type="submit"
            class="w-fit px-5 py-3 bg-blue-500 hover:bg-blue-600 transition cursor-pointer rounded">Enviar</button>
        <a href="{{ route('teams.index') }}">&larr; Tornar</a>
    </div>
</div>
<script>
    function changeColor() {
        const colorInp = document.getElementById('color');
        const colorPreview = document.getElementById('color_preview');
        if (colorInp.value[0] === '#' && colorInp.value.length === 4 || colorInp.value.length === 7) {
            colorPreview.style.background = colorInp.value;
            colorPreview.textContent = '';
            return true
        } else {
            colorPreview.style.background = 'transparent';
            colorPreview.textContent = 'N/A';
            return false
        }
    }
    changeColor()
</script>
