@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{ route('admin.clientes.create') }}" role="button">Agregar cliente</a>
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
                <th>RUC</th>
                <th>Razon social</th>
                <th>Dirección</th>
                <th>Contacto</th>
                <th>Celular 1</th>
                <th>Calular 2</th>
                <th>Email 1</th>
                <th>Email 2</th>
                <th>Pagina web</th>
                <th>Area</th>
                <th>Estado</th>
                <th>Asignado</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->ruc }}</td>
                        <td>{{ $cliente->razon_social }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->contacto }}</td>
                        <td>{{ $cliente->celular1 }}</td>
                        <td>{{ $cliente->celular2 }}</td>
                        <td>{{ $cliente->email1 }}</td>
                        <td>{{ $cliente->email2 }}</td>
                        <td>{{ $cliente->paginaweb }}</td>
                        <td>{{ $cliente->area }}</td>
                        <td>{{ $cliente->estado }}</td>
                        <td>{{ $cliente->asignado }}</td>

                        <td width="10px">
                            <a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        
                        <td width="10px">
                            <form action="{{ route('admin.clientes.destroy', $cliente) }}" method="POST">
        
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