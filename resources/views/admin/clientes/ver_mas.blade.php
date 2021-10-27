@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles de Cliente</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-sm bg-dark">
                <tbody>
                    <tr>
                        <td>
                            <label for="ruc">Ruc</label>
                        </td>
                        <td>
                            <input type="text" id="ruc" class="bg-dark text-white border-0" readonly="readonly" value="{{$clientes->ruc}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="razon_social">Razon social</label>
                        </td>
                        <td>
                            <input type="text" id="razon_social" class="bg-dark text-white border-0" readonly="readonly" value="{{$clientes->razon_social}}">                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="direccion"> Dirección </label>
                        </td>
                        <td>
                            <input type="text" id="direccion" class="bg-dark text-white border-0" readonly="readonly" value="{{$clientes->direccion}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="celular1"> Celular 1 </label>
                        </td>
                        <td>
                            <input type="text" id="celular1" class="bg-dark text-white border-0" readonly="readonly" value="{{$clientes->celular1}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="celular2"> Celular 2 </label>
                        </td>
                        <td>
                            <input type="text" id="celular2" class="bg-dark text-white border-0" readonly="readonly" value="{{$clientes->celular2}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email1"> Email 1 </label>
                        </td>
                        <td>
                            <input type="text" id="email1" class="bg-dark text-white border-0" readonly="readonly" value="{{$clientes->email1}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email2"> Email 2 </label>
                        </td>
                        <td>
                            <input type="text" id="email2" value="{{$clientes->email2}}" class="bg-dark text-white border-0" readonly="readonly">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pagina_web"> Pagina Web </label>
                        </td>
                        <td>
                            <input type="text" id="pagina_web" value="{{$clientes->paginaweb}}" class="bg-dark text-white border-0" readonly="readonly">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="area"> Area </label>
                        </td>
                        <td>
                            <input type="text" id="area" value="{{$clientes->area}}" class="bg-dark text-white border-0" readonly="readonly">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="estado"> Estado </label>
                        </td>
                        <td>
                            <input type="text" id="estado" value="{{$clientes->estado}}" class="bg-dark text-white border-0" readonly="readonly">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="asignado"> Asignado </label>
                        </td>
                        <td>
                            <input type="text" id="asignado" value="{{$clientes->asignado}}" class="bg-dark text-white border-0" readonly="readonly">
                        </td>
                    </tr>
                </tbody>

            </table>

            <a href="{{ route('admin.clientes.index') }}" class="btn btn-sm btn-primary">Volver</a>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop