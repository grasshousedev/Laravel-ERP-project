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

    <h1>{{ $cotizacion->codigo }}</h1>

<table class="table table-striped" id="customers">
    <tr>
        <th>Codigo</th>
        <th>Cliente</th>
        <th>Asignado</th>
    </tr>
    <tr>
        <td>{{ $cotizacion->codigo }}</td>
        <td>{{ $cotizacion->cliente }}</td>
        <td>{{ $cotizacion->asignado }}</td>
    </tr>
    <tr>
        <th>moneda</th>
        <th>Expiracion</th>
        <th>Estado</th>
    </tr>
    <tr>
        <td>{{ $cotizacion->moneda }}</td>
        <td>{{ $cotizacion->tiempo_expiracion }}</td>
        <td>{{ $cotizacion->estado }}</td>
    </tr>
    <tr>
        <th>Forma de pago</th>
        <th>Tiempo de entrega</th>
        <th>Condiciones</th>
    </tr>
    <tr>
        <td>{{ $cotizacion->forma_pago }}</td>
        <td>{{ $cotizacion->tiempo_entrega }}</td>
        <td>{{ $cotizacion->condiciones }}</td>
    </tr>
    <tr>
        <th>Direccion</th>
        <th>Pie de pagina</th>
        <th>Cliende ID</th>
    </tr>
    <tr>
        <td>{{ $cotizacion->direccion }}</td>
        <td>{{ $cotizacion->pie_pagina }}</td>
        <td>{{ $cotizacion->cliente_id }}</td>
    </tr>
    <tr>
        <th>Creado</th>
        <th>Editado</th>
    </tr>
    <tr>
        <td>{{ $cotizacion->created_at }}</td>
        <td>{{ $cotizacion->updated_at }}</td>
    </tr>
</table>

</body>
</html>
