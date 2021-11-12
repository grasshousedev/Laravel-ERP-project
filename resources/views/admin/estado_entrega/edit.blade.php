@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar estado de entrega</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($estado_entregas, ['route' => ['admin.estadoentrega.update', $estado_entregas], 'method' => 'put']) !!}
            
                @include('admin.estado_entrega.parts.form')

                {!! Form::submit('Editar estado de entrega', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop