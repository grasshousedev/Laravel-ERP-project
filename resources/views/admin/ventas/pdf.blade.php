<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
        <title>PDF</title>
    </head>
    <body>
        <h2>Lista de cotizaciones</h2>
        <table class="table table-striped table-hover" id="cotizaciones">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Cliente</th>
                    <th>Asignado</th>
                    <th>Creado</th>
                    <th>Editado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cotizacion as $cot)
                <tr>
                    <td>{{ $cot->codigo }}</td>
                    <td>{{ $cot->cliente }}</td>
                    <td>{{ $cot->asignado }}</td>
                    <td>{{ $cot->created_at }}</td>
                    <td>{{ $cot->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>

