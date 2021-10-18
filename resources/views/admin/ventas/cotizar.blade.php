@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cotizacion</h1>
@stop

@section('content')
    <form>
        <div class="form-row">
            <div class="col-md-2 my-1">
                <label for="validationDefault01">CLIENTE</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="CLIENTE" value="" required>
            </div>
            <div class="col-md-2 my-1">
                <label for="validationDefault02">ASIGNADO</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>{{ auth()->user()->name }}</option>

                        @foreach ($users as $user)
                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                        @endforeach
                
                </select>
            </div>
            
        </div>

        <div class="form-row">

            <div class="col-md-1 my-1">
                <label for="validationDefaultUsername">MONEDA</label>

                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option value="" selected>Elija...</option>

                        @foreach ($moneda as $mone)
                            <option value="{{ $mone->moneda }}">{{ $mone->moneda }}</option>
                        @endforeach

                    </select>
            </div>

            <div class="col-md-1.8 my-1">
                <label for="validationDefault03">EXPIRA</label>

                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Elija...</option>

                        @foreach ($expiracion as $expi)
                            <option value="{{ $expi->expiracion }}">{{ $expi->expiracion }}</option>
                        @endforeach
                </select>

            </div>

            <div class="col-md-1 my-1">
                <label for="validationDefault05">ESTADO</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Elija...</option>
                    @foreach ($estado as $est)
                        <option value="{{ $est->estado }}">{{ $est->estado }}</option>
                    @endforeach
                    
                </select>
            </div>

        </div>

        <div class="form-row">

            <div class="col-auto my-1">
                <label for="validationDefault03">FORMA DE PAGO</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Elija...</option>

                        @foreach ($forma_pago as $pago)
                            <option value="{{ $pago->tipo_pago }}">{{ $pago->tipo_pago }}</option>
                        @endforeach
                  </select>
            </div>

            <div class="col-auto my-1">
                <label for="validationDefault04">TIEMPO DE ENTREGA</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Elija...</option>

                        @foreach ($tiempo_entrega as $entrega)
                            <option value="{{ $entrega->entrega }}">{{ $entrega->entrega }}</option>
                        @endforeach
                  </select>
            </div>
            
        </div>

        <div class="form-group col-md-4">

            <div class="col-auto my-1">
                <label for="validationDefault04">CONDICIONES GENERALES</label>
                <input type="text" class="form-control" id="validationDefault04" placeholder="Ingrese las condiciones" required>
            </div>

            <div class="col-auto my-1">
                <label for="validationDefault05">DIRECCION</label>
                <input type="text" class="form-control" id="validationDefault05" placeholder="Ingrese la direccion" required>
            </div>

            <div class="col-auto my-3">
                <label for="validationDefault05">PIE DE PAGINA</label>
                <textarea class="form-control" id="validationDefault05" required></textarea>
            </div>

        </div>
        
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop