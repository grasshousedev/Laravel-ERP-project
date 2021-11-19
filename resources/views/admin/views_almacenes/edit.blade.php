@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Lote</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($registro, ['route' => ['admin.rutaLote.update', $registro], 'method' => 'put']) !!}
            
                @include('admin.views_lotes.parts.form')

                {!! Form::submit('Editar Lote', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop