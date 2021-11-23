@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('admin.ingresosAlmacen.create') }}" class="btn btn-secondary btn-sm float-right">Agregar Ingreso</a>
    <h1>Ingresos Almacen</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="ingresos">
            <thead>
                <th id="">Almacen</th>
                <th id="">Fabricante</th>
                <th id="">Modelo</th>
                <th id="">Categoria</th>
                <th id="">Lote</th>
                <th id="">Unidades</th>
                <th id=""></th>
                <th id=""></th>
                <th id=""></th>
            </thead>
            <tbody>
                @foreach ($almaceningreso as $ingreso)
                    <tr>
                        <td>{{ $ingreso->almacen }}</td>
                        <td>{{ $ingreso->fabricante }}</td>
                        <td>{{ $ingreso->modelo }}</td>
                        <td>{{ $ingreso->categoria }}</td>
                        <td>{{ $ingreso->lote }}</td>
                        <td>{{ $ingreso->unidades }}</td>

                        <td width="10px">
                            <a href="{{ route('admin.ingresosAlmacen.show', $ingreso->id) }}" class="btn btn-sm btn-primary">
                                <span class="material-icons-outlined">
                                    visibility
                                </span>
                            </a>
                        </td>

                        <td width="10px">
                            <a href="{{ route('admin.ingresosAlmacen.edit', $ingreso->id) }}" class="btn btn-sm btn-primary">
                                <span class="material-icons-outlined">
                                    edit
                                </span>
                            </a>
                        </td>
                        
                        <td width="10px">
                            <form action="{{ route('admin.ingresosAlmacen.destroy', $ingreso) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('ESTAS SEGURO'); false">
                                    <span class="material-icons-outlined">
                                        delete
                                    </span>
                                </button>
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
            $('#ingresos').DataTable();
        });
    </script>
@stop