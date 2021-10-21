<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
        {{-- <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css"> --}}
        <title>PDF</title>
        <style>
            h1{
                text-align: left;
                font-family: sans-serif;
            }
            .cotizar{
                background-color: white;
                border-collapse: collapse;
                text-align: left;
                width: 100%;
                font-size: 13px;
                font-family: sans-serif;
            }
            th, td {    
                border: 1px solid black;
                padding: 10px;
                text-align: left;
            }            
            thead{
                background-color: #246355;
                border-bottom: solid 1px #0F362D;
                color: white;
            }
            .coti{
                border-collapse: collapse;
                text-align: right;
                margin-left: 600px;
            }
            .descripcion{
                width: 500px;
                font-family: sans-serif;
            }
        </style>
    </head>
<body>
    <h1>NOMBRE DE LA EMPRESA.SAC</h1>
    <div class="descripcion"> 
    <label>Telefono: 888-8888</label><br>
    <label>Email: Empresa@gmail.com</label><br>
    </div>   
    <table class="coti">
    <thead>
        <tr>
            <th>Cotizacion</th>
        </tr>
    </thead>
    <tr>
        <td>{{ $cotizacion->codigo }}</td>
    </tr>
    </table>
    <br>
    <hr style="border:1px;">
    <br>
<table class="cotizar">
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Cliente</th>
        <th>Asignado</th>
        <th>moneda</th>
        <th>Expiracion</th>
        <th>Estado</th>
        <th>Forma de pago</th>
    </tr>
    </thead>
    <tr>
        <td>{{ $cotizacion->codigo }}</td>
        <td>{{ $cotizacion->cliente }}</td>
        <td>{{ $cotizacion->asignado }}</td>
        <td>{{ $cotizacion->moneda }}</td>
        <td>{{ $cotizacion->tiempo_expiracion }}</td>
        <td>{{ $cotizacion->estado }}</td>
        <td>{{ $cotizacion->forma_pago }}</td>
    </tr>
    <thead>
    <tr>
        <th>Tiempo de entrega</th>
        <th>Condiciones</th>
        <th>Direccion</th>
        <th>Pie de pagina</th>
        <th>Cliende ID</th>
        <th>Creado</th>
        <th>Editado</th>
    </tr>
    </thead>
    <tr>
        <td>{{ $cotizacion->tiempo_entrega }}</td>
        <td>{{ $cotizacion->condiciones }}</td>
        <td>{{ $cotizacion->direccion }}</td>
        <td>{{ $cotizacion->pie_pagina }}</td>
        <td>{{ $cotizacion->cliente_id }}</td>
        <td>{{ $cotizacion->created_at }}</td>
        <td>{{ $cotizacion->updated_at }}</td>
    </tr>
</table>

</body>
</html>
