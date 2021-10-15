@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('Crear productos')
        <a href="{{ route('admin.productos.create') }}" class="btn btn-secondary btn-sm float-right">Agregar producto</a>
    @endcan
    
    <h1>Productos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="productos">
            <thead>
                <th>ID</th>
                <th>Codigo</th>
                <th>Fabricante</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Precio-compra</th>
                <th>Precio-venta</th>
                <th>Unidades</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->cod_prod }}</td>
                        <td>{{ $producto->fabri_prod }}</td>
                        <td>{{ $producto->model_prod }}</td>
                        <td>{{ $producto->tipo_prod }}</td>
                        <td>S/.{{ $producto->prec_prod }}</td>
                        <td>S/.{{ $producto->vent_prod }}</td>
                        <td>{{ $producto->unidades_prod }}</td>
                        @can('Editar productos')
                            <td width="10px">
                                <a href="{{ route('admin.productos.edit', $producto->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                        @endcan
                            
                        @can('Eliminar productos')
                            <td width="10px">
                                <form action="{{ route('admin.productos.destroy', $producto) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('ESTAS SEGURO'); false">Eliminar</button>
                                </form>
                            </td>
                        @endcan
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
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#productos').DataTable();
        });
    </script>
@stop