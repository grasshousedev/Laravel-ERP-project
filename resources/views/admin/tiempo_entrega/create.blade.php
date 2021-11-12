@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar tiempo de entrega</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.tiempoentrega.store']) !!}

        @include('admin.tiempo_entrega.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop