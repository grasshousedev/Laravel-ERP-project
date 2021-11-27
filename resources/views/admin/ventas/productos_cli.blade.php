@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>Productos / Servicios</h1>

@stop

@section('content')

<div class="row">
    <div class="col-sm-2">
        <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => "admin.productos_cli.store", 'autocomplete'=>'off']) !!}

            @include('admin.ventas.parts.form_prods_cli')

            {{-- {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!} --}}
            <input type="submit" class="btn btn-primary" onclick="calcular()" value="Crear">
            <a href="{{ route('admin.evaluaciones.index') }}" class="btn btn-primary">Volver</a>
            {!! Form::close() !!}
        </div>
        </div>
    </div>

  <div class="col-sm-10">
    <div class="card" >
      <div class="card-body" >
      <table class="table table-borderless table-striped" id="cotizaciones" >
                <thead class="table-dark">
                    <th id="">Producto</th>
                    <th id="">Notas</th>
                    <th id="">Cantidad</th>
                    <th id=""></th>
                    <th id=""></th>
                </thead>
                <tbody>
                    <?php 
                        $total_productos = 0;
                    ?>
                    @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->producto }}</td>
                        <td>{{ $producto->notas }}</td>
                        <td>{{ $producto->cantidad_prod }}</td>

                        <td style="width: 150px;">
                            <a href="{{ route('admin.productos_cli.edit', $producto->id) }}" class="btn btn-sm btn-primary" >
                                <span class="material-icons-outlined">
                                edit
                                </span>
                            </a>
                        </td>
                        <td width="10px">
                        
                            <form action="{{ route('admin.productos_cli.destroy', $producto->id) }}" method="POST">
    
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro de eliminar este registro?'); false">
                                    <span class="material-icons-outlined">
                                        delete
                                    </span>
                                </button>
                            </form>
                            
                        </td>
                        
                        <?php $producto = $producto->total_prod; ?>
                        <?php $total_productos = $total_productos + $producto; ?>
                    </tr>
                    @endforeach
                    <tr class="table-bordered">
                        <td><strong>Sub total</strong></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?php echo $total_productos; ?>
                        </td>
                    </tr>
                    <tr class="table-bordered">
                        <td><strong>IGV</strong></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?php $igv = $total_productos * 18/100; ?>
                            <?php echo $igv;?>
                        </td>
                    </tr>
                    <tr class="table-bordered">
                        <td><strong>Total</strong></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?php echo $total_productos + $igv; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


@stop

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        console.log('test');
        $.ajax({
            type: 'get', 
            url: "{{ route('admin.ventas.searchProduct') }}",
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

                $('input#producto').autocomplete({
                    data: dataCust,
                    onAutocomplete:function(reqdata){
                        console.log(reqdata);
                        $('#precio_prod').val(dataCust2[reqdata]['vent_prod']);
                        $('#proveedor').val(dataCust2[reqdata]['proveedor']);
                    }
                });
            }
        });
    });

    function calcular() {
        const cant = document.getElementById("cantidad_prod");
        const pventa = document.getElementById("precio_prod");
        const total = parseFloat(document.getElementById("cantidad_prod").value) * parseFloat(document.getElementById("precio_prod").value);

        // TOTALES
        let sub_total = total;

        document.getElementById("total_prod").value = sub_total;
    }
</script>
@stop