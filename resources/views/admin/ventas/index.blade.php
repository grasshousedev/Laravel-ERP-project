@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ventas</h1>
@stop

@section('content')

    <a class="btn btn-primary" href="{{ route('admin.users.index') }}" role="button">Cotizar</a>

    <a class="btn btn-primary" href="{{ route('admin.users.index') }}" role="button">Clientes</a>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop