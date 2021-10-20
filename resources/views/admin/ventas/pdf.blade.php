<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
        {{-- <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css"> --}}
        <title>PDF</title>
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
        </style>
    </head>
    <body>
        <h2>Lista de cotizaciones</h2>
        <table class="table table-striped table-hover" id="customers">
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

