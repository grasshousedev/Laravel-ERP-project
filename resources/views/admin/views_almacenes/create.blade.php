@extends('adminlte::page')

@section('title', 'Agregar Lote')

@section('content_header')
    <h1>Agregar Lote</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.rutaLote.store']) !!}

        @include('admin.views_lotes.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop