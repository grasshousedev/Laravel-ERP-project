@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Ingreso a almacen</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.rutaSalidas.store']) !!}
            
                @include('admin.views_salidas.parts.form')

                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop