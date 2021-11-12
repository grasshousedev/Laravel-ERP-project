@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles de Cliente</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-5 g-4" style="max-width: 100rem;">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">RUC</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->ruc}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Razon Social</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->razon_social}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Direccion</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->direccion}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Celular 1</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->celular1}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Celular 2</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->celular2}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Email 1</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->email1}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Email 2</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->email2}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pagina Web</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->paginaweb}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Area</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->area}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Estado</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->estado}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Asignado</h5>
                            <br>
                            <hr style="background-color: white;">
                            <p class="card-text">{{$clientes->asignado}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('admin.clientes.index') }}" class="btn btn-sm btn-primary">Volver</a>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop