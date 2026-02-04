<div class="flex flex-col gap-5">
    <div class="flex flex-col">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $player->name ?? '') }}"
            placeholder="Ash Ketchum..." class="px-3 py-2 rounded border">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col items-center gap-2">
        <input type="submit" value="Enviar"
            class="cursor-pointer w-fit bg-red-500 hover:bg-blue-600 transition rounded py-2 px-5" />
        <a href="{{ route('players.index') }}">&larr; Tornar</a>
    </div>
</div>
