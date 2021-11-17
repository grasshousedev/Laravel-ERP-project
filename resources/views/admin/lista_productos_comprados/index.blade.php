@extends('adminlte::page')

@section('title', 'Logistica')

@section('content_header')
    <h1>Lista de item's</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="estado_entrega">
                <thead>
                    <th id="">Codigo de cotizacion</th>
                    <th id="">Item</th>
                    <th id="">Notas</th>
                    <th id="">Cantidad</th>
                    <th id="">Proveedor</th>
                    <th id="">Opciones</th>
                </thead>
                <tbody>
                    @foreach ($lista_productos as $producto)
                    <tr>
                        <td>{{ $producto->codigo }}</td>
                        <td>{{ $producto->producto }}</td>
                        <td>{{ $producto->notas }}</td>
                        <td>{{ $producto->cantidad_prod }}</td>
                        <td></td>
                        
                        <td width="10px">
                            <a href="{{ route('admin.tiempoexpiracion.edit', $producto->id) }}" class="btn btn-sm btn-primary">
                                <span class="material-icons-outlined">
                                    edit
                                </span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#estado_entrega').DataTable();
        });
    </script>
    
@stop