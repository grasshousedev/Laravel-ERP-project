@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar proveedor</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.proveedores.store']) !!}

        @include('admin.proveedores.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop