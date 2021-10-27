@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{ route('admin.proveedores.create') }}" role="button">Agregar proveedor</a>
    <h1>Ventas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="cotizaciones">
            <thead>
                <th id="">RUC</th>
                <th id="">Razon social</th>
                <th id="">Dirección</th>
                <th id="">Estado</th>
                <th id=""></th>
                <th id=""></th>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->ruc }}</td>
                        <td>{{ $proveedor->razon_social }}</td>
                        <td>{{ $proveedor->direccion }}</td>
                        <td>{{ $proveedor->estado }}</td>

                        <td width="80px">
                            <form action="{{ route('admin.proveedores.show', $proveedor) }}" method="GET">
                                <button type="submit" class="btn btn-sm btn-success">Ver mas</button>
                            </form>
                        </td>

                        <td width="10px">
                            <a href="{{ route('admin.proveedores.edit', $proveedor->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        
                        <td width="10px">
                            <form action="{{ route('admin.proveedores.destroy', $proveedor) }}" method="POST">
        
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
            $('#cotizaciones').DataTable();
        });
    </script>
    
@stop