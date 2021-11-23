@extends('adminlte::page')

@section('title', 'Evaluaciones')

@section('content_header')
<a class="btn btn-primary float-right" href="{{ route('admin.ventas.pdf') }}" role="button">PDF</a>
{{-- <a class="btn btn-primary float-right" href="{{ route('admin.ventas.index') }}" role="button">Cotizar</a>
<a class="btn btn-primary float-right" href="{{ route('admin.clientes.index') }}" role="button">Clientes</a> --}}
    <h1>Orden de trabajo</h1>
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
                <th id="">Codigo</th>
                <th id="">Cliente</th>
                <th id="">Asignado</th>
                <th id="">Creado</th>
                <th id="">Editado</th>
                {{-- <th id=""></th> --}}
            </thead>
            <tbody>
                @foreach ($cotizacion as $cot)
                <tr>
                    <td>{{ $cot->codigo }}</td>
                    <td>{{ $cot->cliente }}</td>
                    <td>{{ $cot->asignado }}</td>
                    <td>{{ $cot->created_at }}</td>
                    <td>{{ $cot->updated_at }}</td>

                    {{-- <td width="10px">
                        <form action="{{ route('admin.ordenestrabajo.show', $cot->id) }}" method="GET">
                            <button type="submit" class="btn btn-sm btn-warning">
                                <span class="material-icons-outlined md-48">
                                    picture_as_pdf
                                </span>
                            </button>
                        </form>
                    </td> --}}
                    
                    {{-- <td width="10px">
                        <a href="{{ route('admin.ordenestrabajo.edit', $cot->id) }}" class="btn btn-sm btn-primary">
                            <span class="material-icons-outlined">
                                edit
                            </span>
                        </a>
                    </td>

                    <td width="10px">
                        <a href="{{ route('admin.logistica.show', $cot->id) }}" class="btn btn-sm btn-primary">
                            <span class="material-icons-outlined">
                                check_circle
                            </span>
                        </a>
                    </td>

                    <td width="10px">
                        
                        <form action="{{ route('admin.ordenestrabajo.destroy', $cot->id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro de eliminar este registro?'); false">
                                <span class="material-icons-outlined">
                                    delete
                                </span>
                            </button>
                        </form>
                        
                    </td> --}}
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
            $('#cotizaciones').DataTable();
        });
    </script>
    
@stop