@extends('adminlte::page')

@section('title', 'Agregar Modelo')

@section('content_header')
    <h1>Agregar Modelo</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.modeloProducto.store']) !!}

        @include('admin.views_modelos.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop