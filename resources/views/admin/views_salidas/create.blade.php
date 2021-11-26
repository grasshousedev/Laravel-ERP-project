@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Salida de almacen</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.rutaSalidas.store']) !!}
            
                @include('admin.views_salidas.parts.form')

                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            console.log('test');
            $.ajax({
                type: 'get', 
                url: "{{ route('admin.rutaSalidas.search') }}",
                success:function(response){
                    console.log(response);

                    var custArray = response;
                    var dataCust = {};
                    var dataCust2 = {};

                    for (var i = 0; i < custArray.length; i++){
                        dataCust[custArray[i].nombre] = null;
                        dataCust2[custArray[i].nombre] = custArray[i];
                    }
                    console.log("dataCust2");
                    console.log(dataCust2);

                    $('input#nombre').autocomplete({
                        data: dataCust,
                        onAutocomplete:function(reqdata){
                            console.log(reqdata);
                            $('#fabricante').val(dataCust2[reqdata]['fabricante']);
                            $('#modelo').val(dataCust2[reqdata]['modelo']);
                            $('#categoria').val(dataCust2[reqdata]['categoria']);
                            $('#lote').val(dataCust2[reqdata]['lote']);
                            $('#unidad_medida').val(dataCust2[reqdata]['unidad_medida']);
                            $('#descripcion').val(dataCust2[reqdata]['descripcion']);
                            $('#razon_social').val(dataCust2[reqdata]['razon_social']);
                            $('#guia').val(dataCust2[reqdata]['guia']);
                            $('#almacen').val(dataCust2[reqdata]['almacen']);
                            $('#moneda').val(dataCust2[reqdata]['moneda']);
                            $('#id_ingreso').val(dataCust2[reqdata]['id']);
                            $('#unidades').attr('max', dataCust2[reqdata]['unidades']);
                        }
                    });
                }
            });

            $.ajax({
                type: 'get', 
                url: "{{ route('admin.rutaSalidas.searchCliente') }}",
                success:function(response){
                    console.log(response);

                    var custArray = response;
                    var dataCust = {};
                    var dataCust2 = {};

                    for (var i = 0; i < custArray.length; i++){
                        dataCust[custArray[i].ruc] = null;
                        dataCust2[custArray[i].ruc] = custArray[i];
                    }
                    console.log("dataCust2");
                    console.log(dataCust2);

                    $('input#ruc_cliente').autocomplete({
                        data: dataCust,
                        onAutocomplete:function(reqdata){
                            console.log(reqdata);
                            $('#razon_social').val(dataCust2[reqdata]['razon_social']);
                        }
                    });
                }
            });
        });
    </script>

@stop