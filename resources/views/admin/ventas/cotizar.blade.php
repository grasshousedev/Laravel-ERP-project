@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cotizacion</h1>
@stop

@section('content')
    <form>
        <div class="form-row">
            <div class="col-auto my-1">
                <label for="validationDefault01">CLIENTE</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="CLIENTE" value="" required>
            </div>
            <div class="col-auto my-1">
                <label for="validationDefault02">ASIGNADO</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="ASIGNADO" value="" required>
            </div>
            <div class="col-auto my-1">
                <label for="validationDefaultUsername">MONEDA</label>
                <div class="input-group">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
            </div>
            
        </div>

        <div class="form-row">

            <div class="col-auto my-1">
                <label for="validationDefault03">EXPIRA</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>

            <div class="col-auto my-1">
                <label for="validationDefault04">CONDICIONES GENERALES</label>
                <input type="text" class="form-control" id="validationDefault04" placeholder="CONDICIONES GENERALES" required>
            </div>

            <div class="col-auto my-1">
                <label for="validationDefault05">ESTADO</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>

        </div>

        <div class="form-row">

            <div class="col-auto my-1">
                <label for="validationDefault03">FORMA DE PAGO</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>

            <div class="col-auto my-1">
                <label for="validationDefault04">TIEMPO DE ENTREGA</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            
        </div>

        <div class="form-row">

            <div class="col-auto my-1">
                <label for="validationDefault05">DIRECCION</label>
                <input type="text" class="form-control" id="validationDefault05" placeholder="ESTADO" required>
            </div>

            <div class="col-auto my-1">
                <label for="validationDefault05">PIE DE PAGINA</label>
                <input type="text" class="form-control" id="validationDefault05" placeholder="ESTADO" required>
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