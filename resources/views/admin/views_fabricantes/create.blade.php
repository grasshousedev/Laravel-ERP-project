@extends('adminlte::page')

@section('title', 'Agregar Fabricante')

@section('content_header')
    <h1>Agregar Fabricante</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.rutaFabricante.store']) !!}

        @include('admin.views_fabricantes.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop