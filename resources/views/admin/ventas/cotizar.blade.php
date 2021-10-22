@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Cotizacion</h1>
@stop

@section('content')

{!! Form::open(['route' => 'admin.ventas.store']) !!}

@include('admin.ventas.parts.form')
@include('admin.ventas.parts.form_tabla')

{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}


{!! Form::close() !!}

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    function add_row() {
        const item = document.getElementById("item");
        const cant = document.getElementById("cantidad");
        const pventa = document.getElementById("precio_venta");
        const total = document.getElementById("total");
        const pneto = document.getElementById("precio_neto");

        console.log(item);

        const table = document.getElementsByTagName("table")[0];
        const new_row = table.insertRow(1);
        new_row.insertCell(0).innerHTML = item.value;
        new_row.insertCell(1).innerHTML = cant.value;
        new_row.insertCell(2).innerHTML = pventa.value;
        new_row.insertCell(3).innerHTML = total.value;
        new_row.insertCell(4).innerHTML = pneto.value;
    }
    var res;
    function total(cantidad, precio_venta){
        res = parseInt(cantidad) * parseInt(precio_venta);
        document.getElementById('total').innerHTML = res
        console.log(res)
    }

    function igv() {
        const table = document.getElementsByTagName("table")[0];

        const column_length = table.rows.length;
        return column_length;
    }

    function todos(){
        add_row();
        total(document.getElementById('cantidad').value, document.getElementById('precio_venta').value);
    }
</script>
@stop