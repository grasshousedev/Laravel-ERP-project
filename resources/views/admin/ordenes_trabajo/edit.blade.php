@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar orden de trabajo</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($cotizacion, ['route' => ['admin.ordenestrabajo.update', $cotizacion], 'method' => 'put']) !!}
            
                @include('admin.ordenes_trabajo.parts.form')

                {!! Form::submit('Editar cotizacion', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop