<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pokémons</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="p-10 flex flex-col gap-5">
        <a href="/" class="absolute left-3 top-3">&larr; Back</a>
        <div class="text-center flex gap-1 flex-col">
            <h1 class="text-3xl">Pokémons</h1>
            <p>Llistat de Pokémons</p>
        </div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>description</td>
                    <td>HP</td>
                    <td>ATK</td>
                    <td>DEF</td>
                    <td>SP. ATK</td>
                    <td>SP. DEF</td>
                    <td>SPD</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->hp }}</td>
                        <td>{{ $p->atk }}</td>
                        <td>{{ $p->def }}</td>
                        <td>{{ $p->sp_atk }}</td>
                        <td>{{ $p->sp_def }}</td>
                        <td>{{ $p->spd }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <style>
        table {
            td {
                padding: 8px;
                border: 1px solid black;
            }
        }
    </style>
</body>

</html>
