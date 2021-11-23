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
        <div>
            RUC: {{ $orden_compras->ruc }}
        </div>

        <div>
            Responsable:  {{ $orden_compras->responsable }}
        </div>

        <div>
            Tiempo de entrega: {{ $orden_compras->tiempo_entrega }}
        </div>

        <div>
            Contacto: {{ $orden_compras->contacto }}
        </div>

        <div>
            Estado: {{ $orden_compras->estado }}
        </div>

        <div>
            Moneda: {{ $orden_compras->moneda }}
        </div>

        <div>
            Razon social: {{ $orden_compras->razon_social }}
        </div>        

        <div>
            Direccion: {{ $orden_compras->direccion }}
        </div>

        <div>
            Cotizacion de Proveedor: {{ $orden_compras->cot_proveedor }}
        </div>
        <a href="{{ route('admin.occProveedores.index') }}" class="btn btn-primary">Volver</a>
</div>
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