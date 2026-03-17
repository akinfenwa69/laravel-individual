<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Countries</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="p-10 flex flex-col gap-5">
        <a href="/" class="absolute left-3 top-3">&larr; Back</a>
        <div class="text-center flex gap-1 flex-col">
            <h1 class="text-3xl">Countries</h1>
            <p>Llistat de Countries</p>
        </div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Country</td>
                    <td>Continent</td>
                    <td>Player ID</td>
                    <td>Player Name</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->continent }}</td>
                        <td>{{ $c->player->id }}</td>
                        <td>{{ $c->player->name ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <style>
        table td {
            padding: 8px;
            border: 1px solid black;
        }
    </style>
</body>

</html>
