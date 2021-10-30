@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Producto / Servicio</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.productos.store']) !!}
    
        @include('admin.productos.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop