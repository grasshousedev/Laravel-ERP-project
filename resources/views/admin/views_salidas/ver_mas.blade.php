@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista detallada del salidas de almacen Nº {{ $almaceningreso->id }}</h1>
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
                        <h5 class="card-title">Codigo:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->codigo }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Nombre:  </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->nombre }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Fabricante:  </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->fabricante }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Modelo: </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->modelo }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categoria: </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->categoria }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Precio de costo:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->precio_costo }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lote:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->lote }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Unidad de medida:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->unidad_medida }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Unidades:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->unidades }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Descripcion:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->descripcion }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">RUC proveedor: </h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->ruc_provee }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Razon social:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->razon_social }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Guia:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->guia }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Almacen:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->almacen }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> O.C. proveedor:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->oc_proveedor }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Orden de pedido:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->orden_pedido }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Moneda:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->moneda }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Fecha Salida:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->fecha_salida }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hora Salida:</h5>
                        <br>
                        <hr style="background-color: white;">
                        <p class="card-text">{{ $almaceningreso->hora_salida }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{ route('admin.rutaSalidas.index') }}" class="btn btn-primary">Volver</a>

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