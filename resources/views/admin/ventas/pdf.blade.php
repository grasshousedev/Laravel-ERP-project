<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
        {{-- <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css"> --}}
        <title>PDF</title>
        <style>
            thead{
                background-color: #246355;
                border-bottom: solid 1px #0F362D;
                color: white;
            }
            th, td {    
                border: 1px solid black;
                padding: 10px;
                text-align: left;
            }
            .cotizar{
                background-color: white;
                border-collapse: collapse;
                text-align: left;
                width: 100%;
                font-size: 13px;
                font-family: sans-serif;
            }
            h2{
                font-family: sans-serif;
                font-weight: bold;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>Lista de cotizaciones</h2>
        <table class="cotizar">
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

