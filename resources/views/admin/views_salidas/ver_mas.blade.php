@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista detallada de la salida Nº {{ $almaceningreso->id }}</h1>
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
            Codigo: {{ $almaceningreso->codigo }}
        </div>

        <div>
            Fabricante:  {{ $almaceningreso->fabricante }}
        </div>

        <div>
            Modelo: {{ $almaceningreso->modelo }}
        </div>

        <div>
            Categoria: {{ $almaceningreso->categoria }}
        </div>

        <div>
            Precio de costo: {{ $almaceningreso->precio_costo }}
        </div>

        <div>
            Lote: {{ $almaceningreso->lote }}
        </div>

        <div>
            Unidad de medida: {{ $almaceningreso->unidad_medida }}
        </div>        

        <div>
            Unidades: {{ $almaceningreso->unidades }}
        </div>

        <div>
            Descripcion: {{ $almaceningreso->descripcion }}
        </div>

        <div>
            RUC proveedor: {{ $almaceningreso->ruc_provee }}
        </div>

        <div>
            Razon social: {{ $almaceningreso->razon_social }}
        </div>

        <div>
            Guia: {{ $almaceningreso->guia }}
        </div>

        <div>
            Almacen: {{ $almaceningreso->almacen }}
        </div>

        <div>
            O.C. proveedor: {{ $almaceningreso->oc_proveedor }}
        </div>

        <div>
            Orden de pedido: {{ $almaceningreso->orden_pedido }}
        </div>

        <div>
            Moneda: {{ $almaceningreso->moneda }}
        </div>
        <a href="{{ route('admin.rutaSalidas.index') }}" class="btn btn-primary">Volver</a>
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