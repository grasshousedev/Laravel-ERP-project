<div class="form-row">

    <?php foreach ($cotizacion as $value) {
        $id = $value->id;
    } ?>
    <input name="codigo" type="hidden" id="validationDefault01" value="COT000<?= $id ?>">

    <div class="col-md-2 my-1">
        {!! Form::label('cliente', 'Cliente') !!}
        {!! Form::text('cliente', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-2 my-1">
        {!! Form::label('asignado', 'Asignado') !!}
        {!! Form::select('asignado', $users, auth()->user()->name, ['class' => 'custom-select mr-sm-2']) !!}
    </div>

</div>

<div class="form-row">

    <div class="col-md-1 my-1">
        {!! Form::label('moneda', 'Moneda') !!}
        {!! Form::select('moneda', $moneda, null, ['class' => 'custom-select mr-sm-2']) !!}
    </div>

    <div class="col-md-1.8 my-1">
        {!! Form::label('tiempo_expiracion', 'Expiracion') !!}
        {!! Form::select('tiempo_expiracion', $expiracion, null, ['class' => 'custom-select mr-sm-2']) !!}
    </div>

    <div class="col-md-1 my-1">
        {!! Form::label('estado', 'Estado') !!}
        {!! Form::select('estado', $estado, null, ['class' => 'custom-select mr-sm-2']) !!}
    </div>

</div>

<div class="form-row">

    <div class="col-auto my-1">
        {!! Form::label('forma_pago', 'Pago') !!}
        {!! Form::select('forma_pago', $forma_pago, null, ['class' => 'custom-select mr-sm-2']) !!}
    </div>

    <div class="col-auto my-1">
        {!! Form::label('tiempo_entrega', 'Entrega') !!}
        {!! Form::select('tiempo_entrega', $tiempo_entrega, null, ['class' => 'custom-select mr-sm-2']) !!}
    </div>

</div>

<div class="form-group col-md-4">

    <div class="col-auto my-1">
        {!! Form::label('condiciones', 'Condiciones generales') !!}
        {!! Form::text('condiciones', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-auto my-1">
        {!! Form::label('direccion', 'Direccion') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-auto my-3">
        {!! Form::label('pie_pagina', 'Pie de pagina') !!}
        {!! Form::text('pie_pagina', null, ['class' => 'form-control']) !!}
    </div>

</div>