@extends('adminlte::page')

@section('title', 'Dashboard 3D Printer')

@section('content_header')
<div class="row">
    <div class="col-4 mx-auto text-center">
        <img src="vendor/adminlte/dist/img/SENATI-logo.png" alt="logo">
    </div>
</div><br><br>
@stop

@section('content')
<h1 class="text-center text-uppercase">Dashboard Impresoras 3D</h1>

<div class="row justify-content-center align-items-center">
    <div class="col-md text-center">
        {{-- <h2>{{ $cotizaciones_aprobadas }}</h2> --}}
        <h4>Cotizaciones Aprobadas</h4>
    </div>

    <div class="col-md text-center">
        <h2>{{ $num_productos }}</h2>
        <h4>Productos</h4>
    </div>

    <div class="col-md text-center">
        <h2>{{ $num_cot_aprobadas }}</h2>
        <h4>Ordenes de Trabajo</h4>
    </div>

    <div class="col-md text-center">
        <h2>{{ $num_op }}</h2>
        <h4>Ordenes de Pedido</h4>
    </div>
</div>
<br><br>
<div class="row justify-content-center align-items-center">
    <div class="col-md text-center">
        <h2>S/.{{ $total_ventas }}</h2>
        <h4>Ventas</h4>
    </div>

    <div class="col-md text-center">
        <h2>S/.{{ $total_productos }}</h2>
        <h4>Compras</h4>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop