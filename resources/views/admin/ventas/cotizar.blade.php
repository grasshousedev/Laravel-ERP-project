@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cotizacion</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.ventas.store']) !!}

        @include('admin.ventas.parts.form')

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop