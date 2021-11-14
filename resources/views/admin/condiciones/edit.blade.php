@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar condicion</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($condiciones, ['route' => ['admin.condiciones.update', $condiciones], 'method' => 'put']) !!}
            
                @include('admin.condiciones.parts.form')

                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop