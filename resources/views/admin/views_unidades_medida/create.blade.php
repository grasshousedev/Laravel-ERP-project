@extends('adminlte::page')

@section('title', 'Agregar Unidad de Medida')

@section('content_header')
    <h1>Agregar Unidad de Medida</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.rutaUnidadesMedida.store']) !!}

        @include('admin.views_unidades_medida.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop