<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/globals.css">
    <title>Index</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="/styles/globals.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="dark bg-(--background) text-(--foreground)">
    <x-navbar />
    <header class="h-screen bg-blue-500/20 -mt-18 flex items-center justify-center">
        <div class="flex flex-col gap-2 text-center">
            <h1 class="text-6xl">Laravel Individual</h1>
            <p class="text-(--muted-foreground)">Pol Poblet Pallisé</p>
            <a href="/dashboard"
                class="mt-5 px-7 py-3 bg-blue-500 hover:bg-blue-600 hover:scale-105 transition rounded-lg text-lg w-fit mx-auto">
                Començar
            </a>
        </div>
    </header>
    <main class="p-10 flex flex-col gap-5">
        <section id="pokemons" class="max-w-300 mx-auto w-full">
            <h2 class="text-3xl">Pokémons</h2>
            <p class="text-(--muted-foreground)">...</p>
        </section>
        <section id="teams" class="max-w-300 mx-auto w-full">
            <h2 class="text-3xl">Teams</h2>
            <p class="text-(--muted-foreground)">...</p>
        </section>
        <section id="players" class="max-w-300 mx-auto w-full">
            <h2 class="text-3xl">Players</h2>
            <p class="text-(--muted-foreground)">...</p>
        </section>
        <section id="countries" class="max-w-300 mx-auto w-full">
            <h2 class="text-3xl">Countries</h2>
            <p class="text-(--muted-foreground)">...</p>
        </section>
    </main>
</body>

</html>
