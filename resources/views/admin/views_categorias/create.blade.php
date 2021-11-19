@extends('adminlte::page')

@section('title', 'Agregar Categoria')

@section('content_header')
    <h1>Agregar Categoria</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.rutaCategoria.store']) !!}

        @include('admin.views_categorias.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop