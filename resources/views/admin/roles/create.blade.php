@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear un nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            From{!! Form::open(['route' => 'admin.roles.store']) !!}
                
                @include('admin.roles.parts.form')

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