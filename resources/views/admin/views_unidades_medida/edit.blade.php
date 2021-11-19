@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Unidad de Medida</hh1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($registro, ['route' => ['admin.rutaUnidadesMedida.update', $registro], 'method' => 'put']) !!}
            
                @include('admin.views_unidades_medida.parts.form')

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