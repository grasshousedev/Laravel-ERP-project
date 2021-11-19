@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar moneda</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($modelos, ['route' => ['admin.modeloProducto.update', $modelos], 'method' => 'put']) !!}
            
                @include('admin.views_modelos.parts.form')

                {!! Form::submit('Editar Modelo', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop