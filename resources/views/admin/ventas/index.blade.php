@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-primary float-right" href="{{ route('admin.ventas.pdf') }}" role="button">PDF</a>
<a class="btn btn-primary float-right" href="{{ route('admin.ventas.index') }}" role="button">Cotizar</a>
<a class="btn btn-primary float-right" href="{{ route('admin.clientes.index') }}" role="button">Clientes</a>
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
                <th>Codigo</th>
                <th>Cliente</th>
                <th>Asignado</th>
                <th>Creado</th>
                <th>Editado</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($cotizacion as $cot)
                <tr>
                    <td>{{ $cot->codigo }}</td>
                    <td>{{ $cot->cliente }}</td>
                    <td>{{ $cot->asignado }}</td>
                    <td>{{ $cot->created_at }}</td>
                    <td>{{ $cot->updated_at }}</td>

                    <td width="80px">
                        <form action="{{ route('admin.ventas.show', $cot) }}" method="GET">
                            <button type="submit" class="btn btn-sm btn-success">PDF</button>
                        </form>
                    </td>
                    
                    {{-- @can('Editar productos') --}}
                    <td width="10px">
                        <a href="{{ route('admin.ventas.edit', $cot->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                    {{-- @endcan --}}

                    {{-- @can('Eliminar productos') --}}
                    <td width="10px">
                        <form action="{{ route('admin.ventas.destroy', $cot) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro de eliminar este registro?'); false">Eliminar</button>
                        </form>
                    </td>
                    {{-- @endcan --}}
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
    $(document).ready(function() {
        $('#cotizaciones').DataTable();
    });
</script>



@stop