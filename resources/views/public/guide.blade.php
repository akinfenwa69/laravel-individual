<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Guide</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="p-10 flex flex-col gap-3">
        <a href="/" class="absolute left-3 top-3">&larr; Back</a>
        <div class="text-center flex gap-1 flex-col">
            <h1 class="text-3xl">Guia</h1>
            <p>...</p>
        </div>
        <div>
            <p class="text-2xl my-3">Pokémon N:M Team</p>
            <p class="text-muted-foreground">Un Pokémon pot estar en molts equips. Els equips poden tindre molts
                Pokémon.
                L'equip té un màxim (<code>limit()</code>) de 6 Pokémon.</p>
            <p class="text-2xl my-3">Player 1:N Team</p>
            <p class="text-muted-foreground">Un jugador pot tindre molts equips. Un equip pot pertànyer a un sol
                jugador.
            </p>
            <p class="text-2xl my-3">Player 1:1 Country</p>
            <p class="text-muted-foreground">Un jugador pot representar a un país. Un país pot ser representat per un
                jugador. És <code>unique()</code> perquè un jugador no pot pertànyer a més d'un país.</p>
        </div>
    </main>
</body>

</html>
