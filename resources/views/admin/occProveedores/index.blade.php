@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- @can('Crear productos') --}}
        <a href="{{ route('admin.occProveedores.create') }}" class="btn btn-secondary btn-sm float-right">Registrar O.C.</a>
    {{-- @endcan --}}
    
    <h1>O. C. Proveedores</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="occ">
            <thead>
                <th id="">RUC</th>
                <th id="">Razon social</th>
                <th id="">Descripcion</th>
                <th id="">Cotizacion</th>
                <th id=""></th>
                <th id=""></th>
                <th id=""></th>
            </thead>
            <tbody>
                @foreach ($orden_compras as $orden_compra)
                    <tr>
                        <td>{{ $orden_compra->ruc }}</td>
                        <td>{{ $orden_compra->razon }}</td>
                        <td>{{ $orden_compra->descripcion }}</td>
                        <td>{{ $orden_compra->cot }}</td>
                        <td>{{ $orden_compra->tiempo_entrega }}</td>

                        <td width="10px">
                            <a href="{{ route('admin.occClientes.edit', $orden_compra->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        
                        <td width="10px">
                            <form action="{{ route('admin.occClientes.destroy', $orden_compra) }}" method="POST">
        
                                @csrf
                                @method('DELETE')
        
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro de eliminar este registro?'); false">Eliminar</button>
                            </form>
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
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#occ').DataTable();
        });
    </script>
@stop