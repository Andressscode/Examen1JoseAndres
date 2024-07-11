<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Apuestas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-3">
        <h1>Lista de Apuestas</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Juego</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apuestas as $apuesta)
                <tr>
                    <td>{{ $apuesta->id }}</td>
                    <td>{{ $apuesta->juego->nombre }}</td>
                    <td>{{ $apuesta->fecha }}</td>
                    <td>{{ $apuesta->monto }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
