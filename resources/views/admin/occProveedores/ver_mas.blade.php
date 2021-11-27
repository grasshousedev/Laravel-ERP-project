@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista detallada de la orden de compra del proveedor Nº {{ $orden_compras->id }}</h1>
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
                        <p class="card-text">{{ $orden_compras->ruc }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Responsable:  </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->responsable }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tiempo de entrega:  </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->tiempo_entrega }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contacto:  </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->contacto }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Estado:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->estado }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Moneda: </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->moneda }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Razon social: </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->razon_social }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Direccion:  </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->direccion }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Cotizacion de Proveedor: </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $orden_compras->cot_proveedor }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="productos">
    <table class="table table-sm bg-dark" id="table_t">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Observaciones</th>
            </tr>
        </thead>
        <tbody id="table_data">

            @foreach ($producto as $item)
            <tr>
                <th scope="row">
                    {{ $item->producto }}
                </th>
                <th scope="row">
                    {{ $item->cantidad_prod }}
                </th>
                <th scope="row">
                    {{ $item->notas }}
                </th>
            </tr>            
            @endforeach
        
        </tbody>
    </table>
</div>

<a href="{{ route('admin.occProveedores.index') }}" class="btn btn-primary">Volver</a>

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