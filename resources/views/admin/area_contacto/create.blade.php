@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar area de contacto</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.areacontacto.store']) !!}

        @include('admin.area_contacto.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop