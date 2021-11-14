@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar pie de pagina</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($piepaginas, ['route' => ['admin.piedepagina.update', $piepaginas], 'method' => 'put']) !!}
            
                @include('admin.pie_pagina.parts.form')

                {!! Form::submit('Editar cliente', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop