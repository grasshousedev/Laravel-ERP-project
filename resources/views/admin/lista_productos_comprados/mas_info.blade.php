@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista detallada del item {{ $item->id }}</h1>
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
                        <h5 class="card-title">OP:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->codigo }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Item:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->producto }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notas:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->notas }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->cantidad_prod }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Proveedor:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->proveedor }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Moneda:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->moneda }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Precio:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->precio_prod }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">COT:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->codigo_cotizacion }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tiempo de entrega:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->tiempo_entrega }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Responsable:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->asignado }}</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">OCP:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $item->ocp }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<a href="{{ route('admin.ingresosAlmacen.index') }}" class="btn btn-primary">Volver</a>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet"> --}}
@stop

@section('js')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#ingresos').DataTable();
        });
    </script> --}}
@stop