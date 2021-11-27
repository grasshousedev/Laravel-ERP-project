@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Cotizacion</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.ventas.store', 'autocomplete'=>'off']) !!}

                @include('admin.ventas.parts.form')
                
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
                url: "{{route('admin.ventas.search')}}",
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
                            $('#cliente_id').val(dataCust2[reqdata]['id']);
                            $('#direccion').val(dataCust2[reqdata]['direccion']);
                            $('#cliente').val(dataCust2[reqdata]['razon_social']);
                        }
                    });
                }
            });
        });
    </script>

@stop