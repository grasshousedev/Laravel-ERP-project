@extends('adminlte::page')

@section('title', 'Fabricantes')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{ route('admin.rutaFabricante.create') }}" role="button">Agregar Fabricante</a>
    <h1>Fabricante</h1>
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
                    <th id="">ID</th>
                    <th id="">Fabricante</th>
                    <th id=""></th>
                    <th id=""></th>
                </thead>
                <tbody>
                    @foreach ($all_registros as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->fabricante }}</td>
                        
                        <td width="10px">
                            <a href="{{ route('admin.rutaFabricante.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                <span class="material-icons-outlined">
                                    edit
                                </span>
                            </a>
                        </td>
    
                        <td width="10px">
                            
                            <form action="{{ route('admin.rutaFabricante.destroy', $item->id) }}" method="POST">
    
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro de eliminar este registro?'); false">
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
            $('#estado_entrega').DataTable();
        });
    </script>
    
@stop