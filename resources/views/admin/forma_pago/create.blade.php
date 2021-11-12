@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar forma de pago</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.formapago.store']) !!}

        @include('admin.forma_pago.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop