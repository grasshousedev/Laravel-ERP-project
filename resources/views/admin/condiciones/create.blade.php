@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar condicion</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.condiciones.store']) !!}

        @include('admin.condiciones.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop