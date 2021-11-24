<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
        {{-- <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css"> --}}
        <title>PDF</title>
        <style>
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
            .p{
	            font-size:13px;
                margin: auto;
                float: left;
                margin-left: 5px;
                text-align: left;
                width: 400px;
            }
            .cuadro{
                border: 1px solid black;
                width: 180px;
                height: 20px;
                text-align: center;
                background-color: #246355;
                color: white;
            }
            .cuadro_1{
                border: 1px solid black;
                width: 180px;
                height: 20px;
                text-align: center;
            }
            .cuadro2{
                border: 1px solid black;
                width: 220px;
                margin-left: 230px;
                position: fixed;
                height: 20px;
                margin-top: 120px;
                text-align: center;
                background-color: #246355;
                color: white;
                top: 0%;
            }
            .cuadro3{
                border: 1px solid black;
                width: 220px;
                margin-left: 230px;
                position: fixed;
                height: 20px;
                margin-top: 140px;
                text-align: center;
                top: 0%;

            }
            .cuadro4{
                border: 1px solid black;
                width: 220px;
                margin-left: 480px;
                position: fixed;
                height: 20px;
                text-align: center;
                margin-top: 120px;
                background-color: #246355;
                color: white;
                top: 0%;
            }
            .cuadro5{
                border: 1px solid black;
                width: 220px;
                margin-left: 480px;
                position: fixed;
                height: 20px;
                margin-top: 140px;
                text-align: center;
                top: 0%;
            }
            .cuadro6{
                border: 1px solid black;
                width: 700px;
                text-align: center;
                background-color: #246355;
                color: white;
            }
            .cuadro6_1{
                border: 1px solid black;
                width: 700px;
                text-align: center;
            }
            .cuadro7{
                border: 1px solid black;
                width: 100px;
                text-align: center;
                top: 22%;
                position: fixed;
                height: 20px;
                background-color: #246355;
                color: white;
            }
            .cuadro8{
                border: 1px solid black;
                width: 100px;
                text-align: center;
                top: 24%;
                position: fixed;
                height: 20px;
            }
            .cuadro9{
                border: 1px solid black;
                width: 110px;
                margin-left: 130px;
                height: 20px;
                top: 22%;
                text-align: center;
                position: fixed;
                background-color: #246355;
                color: white;
            }
            .cuadro10{
                border: 1px solid black;
                width: 110px;
                margin-left: 130px;
                height: 20px;
                top: 24%;
                text-align: center;
                position: fixed;
            }
            .cuadro11{
                border: 1px solid black;
                width: 110px;
                margin-left: 270px;
                height: 20px;
                top: 22%;
                text-align: center;
                position: fixed;
                background-color: #246355;
                color: white;
            }
            .cuadro12{
                border: 1px solid black;
                width: 110px;
                margin-left: 270px;
                height: 20px;
                top: 24%;
                text-align: center;
                position: fixed;
            }
            .cuadro13{
                border: 1px solid black;
                width: 110px;
                margin-left: 410px;
                height: 20px;
                top: 22%;
                text-align: center;
                position: fixed;
                background-color: #246355;
                color: white;
            }
            .cuadro14{
                border: 1px solid black;
                width: 110px;
                margin-left: 410px;
                height: 20px;
                top: 24%;
                text-align: center;
                position: fixed;
            }
            .cuadro15{
                border: 1px solid black;
                width: 150px;
                margin-left: 550px;
                height: 20px;
                top: 22%;
                text-align: center;
                position: fixed;
                background-color: #246355;
                color: white;
            }
            .cuadro16{
                border: 1px solid black;
                width: 150px;
                margin-left: 550px;
                height: 20px;
                top: 24%;
                text-align: center;
                position: fixed;
            }
            .producto{
                height: 300px;
            }
            .condiciones{
                border: 1px solid black;
                height: 210px;
            }
            .pie_de_pagina{
                border: 1px solid black;
                height: 120px;
            }
        </style>
    </head>
<body>
    <div class="p">
    <p style="font-size: 20px;">NOMBRE DE LA EMPRESA</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa iusto ul
    m labore consequuntur perspiciatis velit dolorem culpa, sunt dolorum nemo!</p> 
    </div> 
    <br>
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
    <div class="cuadro">
        Fecha
    </div>
    <div class="cuadro_1">
        {{ $cotizacion->created_at }}
    </div>
    <br>
    <div class="cuadro2">
        Cliente
    </div>
    <div class="cuadro3">
        {{ $cotizacion->cliente }}
    </div>
    <div class="cuadro4">
        Asignado
    </div>
    <div class="cuadro5">
        {{ $cotizacion->asignado }}
    </div>
    <div class="cuadro6">
        Direccion
    </div>
    <div class="cuadro6_1">
        {{ $cotizacion->direccion }}
    </div>
    <br>
    <div class="cuadro7">
        Moneda
    </div>
    <div class="cuadro8">
        {{ $cotizacion->moneda }}
    </div>
    <div class="cuadro9">
        Forma de Pago
    </div>
    <div class="cuadro10">
        {{ $cotizacion->forma_pago }}
    </div>
    <div class="cuadro11">
        Expiracion
    </div>
    <div class="cuadro12">
        {{ $cotizacion->tiempo_expiracion }}
    </div>
    <div class="cuadro13">
        Estado
    </div>
    <div class="cuadro14">
        {{ $cotizacion->estado }}
    </div>
    <div class="cuadro15">
        Tiempo de Entrega
    </div>
    <div class="cuadro16">
        {{ $cotizacion->tiempo_entrega }}
    </div>
<br>
<br>
<br>
<br>
    <div class="producto">
        <table class="table table-sm bg-dark" id="table_t" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th scope="col" style="width: 117px;">Item</th>
                    <th scope="col" style="width: 117px;">Notas</th>
                    <th scope="col" style="width: 117px;">Cantidad</th>
                    <th scope="col" style="width: 117px;">Precio</th>
                    <th scope="col" style="width: 117px;">Total producto</th>    
                </tr>
            </thead>
            <tbody id="table_data">
                <?php 
                    $total_productos = 0;
                ?>
                @foreach($cliente_producto as $item)
                <tr>
                    <th scope="row">
                        {{ $item->producto }}
                    </th>
                    <th scope="row">
                        {{ $item->notas }}
                    </th>
                    <th scope="row">
                        {{ $item->cantidad_prod }}
                    </th>
                    <th scope="row">
                        {{ $item->precio_prod }}
                    </th>
                    <th scope="row" style="text-align: right">
                        {{ $item->total_prod }}
                    </th>
                </tr>
                
                <?php $producto = $item->total_prod; ?>
                <?php $total_productos = $total_productos + $producto; ?>
                @endforeach
                <tr class="table-bordered">
                    <td><strong>Sub total</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: right">
                        <?php echo $total_productos; ?>
                    </td>
                </tr>
                <tr class="table-bordered">
                    <td><strong>IGV</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: right">
                        <?php $igv = $total_productos * 18/100; ?>
                        <?php echo $igv;?>
                    </td>
                </tr>
                <tr class="table-bordered">
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: right">
                        <?php echo $total_productos + $igv; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="condiciones">
        {{ $cotizacion->condiciones }}
    </div>
    <br>
    <div class="pie_de_pagina">
        {{ $cotizacion->pie_pagina }}
    </div>
</body>
</html>
