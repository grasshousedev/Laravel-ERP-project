@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- @can('Crear productos') --}}
        <a href="{{ route('admin.rutaGuia.create') }}" class="btn btn-secondary btn-sm float-right">Agregar guia</a>
    {{-- @endcan --}}
    
    <h1>Guias</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="guia">
            <thead>
                <th id="">RUC</th>
                <th id="">Razon social</th>
                <th id="">Direccion</th>
                <th id="">Fecha de llegada</th>
                <th id="">Hora de llegada</th>
                <th id="">Opp</th>
                <th id="">Numero de guia</th>
                <th id="">Archivo</th>
                <th id=""></th>
                <th id=""></th>
            </thead>
            <tbody>
                @foreach ($reguistros_guias as $guia)
                    <tr>
                        <td>{{ $guia->ruc }}</td>
                        <td>{{ $guia->razon }}</td>
                        <td>{{ $guia->direccion }}</td>
                        <td>{{ $guia->fecha_llegada }}</td>
                        <td>{{ $guia->hora_llegada }}</td>
                        <td>{{ $guia->oop }}</td>
                        <td>{{ $guia->numero_guia }}</td>
                        <td> <a href="/uploads/REGISTRO-GUIAS/{{ $guia->archivo }}" target="_blank">Ver archivo</a></td>

                        <td width="10px">
                            <a href="{{ route('admin.rutaGuia.edit', $guia->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        
                        <td width="10px">
                            <form action="{{ route('admin.rutaGuia.destroy', $guia) }}" method="POST">
        
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
            $('#guia').DataTable();
        });
    </script>
@stop