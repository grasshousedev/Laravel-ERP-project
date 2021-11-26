@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Ingreso a almacen</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.ingresosAlmacen.store']) !!}
            
                @include('admin.almacenIngresos.parts.form')

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
                url: "{{ route('admin.ingresosAlmacen.searchProveedor') }}",
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

                    $('input#ruc_provee').autocomplete({
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