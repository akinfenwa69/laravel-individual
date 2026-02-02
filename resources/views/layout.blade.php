<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="/styles/globals.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="dark bg-(--background) text-(--foreground) flex h-screen w-screen">
    <nav class="w-80 p-3 flex flex-col gap-3 text-(--sidebar-foreground)">
        <div>
            <div class="px-3 py-5 bg-(--sidebar-accent) border border-(--border) rounded-lg flex items-center gap-2">
                <span class="material-symbols-outlined">person</span>
                <p>Pol Poblet Pallisé</p>
            </div>
        </div>
        <div class="flex flex-col gap-1 flex-1">
            <p class="text-(--muted-foreground) text-sm">Content</p>
            <a href="/pokemons" class="flex items-center gap-2 p-2 rounded-xl transition hover:bg-(--sidebar-accent)">
                <span class="material-symbols-outlined">bug_report</span>
                <p>Pokémons</p>
            </a>
            <a href="/teams" class="flex items-center gap-2 p-2 rounded-xl transition hover:bg-(--sidebar-accent)">
                <span class="material-symbols-outlined">group</span>
                <p>Teams</p>
            </a>
            <a href="/players" class="flex items-center gap-2 p-2 rounded-xl transition hover:bg-(--sidebar-accent)">
                <span class="material-symbols-outlined">person</span>
                <p>Players</p>
            </a>
            <a href="/countries" class="flex items-center gap-2 p-2 rounded-xl transition hover:bg-(--sidebar-accent)">
                <span class="material-symbols-outlined">globe</span>
                <p>Countries</p>
            </a>
        </div>
        <div>
            <a href="/guide" class="flex items-center gap-2 p-4 rounded-xl transition hover:bg-(--sidebar-accent)">
                <span class="material-symbols-outlined">help</span>
                <p>Guia</p>
            </a>
        </div>
    </nav>
    <div class="flex-1 flex flex-col p-5 overflow-auto h-screen">
        <div class="pb-5">
            Toggle Dashboard
        </div>
        @yield('content')
    </div>
</body>

</html>
