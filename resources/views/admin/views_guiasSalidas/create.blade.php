@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar guia</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.rutaGuiaSalida.store', 'enctype' => 'multipart/form-data']) !!}
    
        @include('admin.views_guiasSalidas.parts.form')
        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop