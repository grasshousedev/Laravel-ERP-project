@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.productos.store']) !!}
    
        <div class="form-group">
            {!! Form::label('nombre', 'Codigo') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fabricante', 'Fabricante') !!}
            {!! Form::text('fabricante', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el fabricante del producto']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('modelo', 'Modelo') !!}
            {!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el modelo del producto']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::text('tipo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('preciocompra', 'Precio-compra') !!}
            {!! Form::text('preciocompra', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio de compra']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('precioventa', 'Precio-venta') !!}
            {!! Form::text('precioventa', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio de venta']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('unidades', 'Unidades') !!}
            {!! Form::text('unidades', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las unidades']) !!}
        </div>
        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop