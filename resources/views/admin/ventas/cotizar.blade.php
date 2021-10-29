@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Cotizacion</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.ventas.store', 'autocomplete'=>'off']) !!}

        @include('admin.ventas.parts.form')
        @include('admin.ventas.parts.form_tabla')
        
    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}
    
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
                url: "{{route('admin.ventas.search')}}",
                success:function(response){
                    console.log(response);

                    var custArray = response;
                    var dataCust = {};
                    var dataCust2 = {};

                    for (var i = 0; i < custArray.length; i++){
                        dataCust[custArray[i].contacto] = null;
                        dataCust2[custArray[i].contacto] = custArray[i];
                    }
                    console.log("dataCust2");
                    console.log(dataCust2);

                    $('input#cliente').autocomplete({
                        data: dataCust,
                        onAutocomplete:function(reqdata){
                            console.log(reqdata);
                            $('#cliente_id').val(dataCust2[reqdata]['id']);
                            $('#direccion').val(dataCust2[reqdata]['direccion']);
                        }
                    });
                }
            });

            $.ajax({
                type: 'get', 
                url: "{{route('admin.ventas.searchProduct')}}",
                success:function(response){
                    console.log(response);

                    var custArray = response;
                    var dataCust = {};
                    var dataCust2 = {};

                    for (var i = 0; i < custArray.length; i++){
                        dataCust[custArray[i].model_prod] = null;
                        dataCust2[custArray[i].model_prod] = custArray[i];
                    }
                    console.log("dataCust2");
                    console.log(dataCust2);

                    $('input#item').autocomplete({
                        data: dataCust,
                        onAutocomplete:function(reqdata){
                            console.log(reqdata);
                            $('#precio_venta').val(dataCust2[reqdata]['vent_prod']);
                        }
                    });
                }
            });
        });
    </script>

@stop