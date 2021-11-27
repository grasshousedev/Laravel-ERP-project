<div class="form-row" style="margin-left: 10px;">

    {{-- @foreach ($cotizacion as $value)
    <?//php $id = $value->id; ?>
    @endforeach --}}
    <input name="codigo" type="hidden" id="validationDefault01" value="COT000">
    <div class="input-field" style="max-width: 210px;">
        {!! Form::label('cliente', 'Cliente') !!}
        {!! Form::text('cliente', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
        @error('cliente')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    <div class="col-md-2 my-1" style="margin-left: 60px;">
        {!! Form::label('asignado', 'Asignado') !!}
        {!! Form::select('asignado', $users, auth()->user()->name, ['class' => 'custom-select mr-sm-2']) !!}
        @error('asignado')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

</div>

<div class="form-row" style="margin-left: 10px;">

    {!! Form::hidden('cliente_id', null, ['class' => 'custom-select mr-sm-2', 'autocomplete'=>'off']) !!}

    <div class="col-md-1 my-1">
        {!! Form::label('encargado', 'Encargado') !!}
        {!! Form::select('encargado', $users, auth()->user()->name, ['class' => 'custom-select mr-sm-2']) !!}
        @error('encargado')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    
    <div class="col-md-1 my-1" style="margin-left: 19px;">
        {!! Form::label('moneda', 'Moneda') !!}
        {!! Form::select('moneda', $moneda, null, ['class' => 'custom-select mr-sm-2']) !!}
        @error('moneda')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    <div class="col-md-1.8 my-1" style="margin-left: 19px;">
        {!! Form::label('tiempo_expiracion', 'Expiracion') !!}
        {!! Form::select('tiempo_expiracion', $expiracion, null, ['class' => 'custom-select mr-sm-2']) !!}
        @error('tiempo_expiracion')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

</div>

<div class="form-row" style="margin-left: 10px;">

    <div class="col-md-1 my-1">
        {!! Form::label('estado', 'Estado') !!}
        {!! Form::select('estado', $estado, null, ['class' => 'custom-select mr-sm-2']) !!}
        @error('estado')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="col-auto my-1" >
        {!! Form::label('forma_pago', 'Pago') !!}
        {!! Form::select('forma_pago', $forma_pago, null, ['class' => 'custom-select mr-sm-2']) !!}
        @error('forma_pago')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="col-auto my-1">
        {!! Form::label('tiempo_entrega', 'Entrega') !!}
        {!! Form::select('tiempo_entrega', $tiempo_entrega, null, ['class' => 'custom-select mr-sm-2']) !!}
        @error('tiempo_entrega')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

</div>

<div class="form-group col-md-4">

    <div class="col-14 my-1">
        {!! Form::label('condiciones', 'Condiciones generales') !!}
        {!! Form::text('condiciones', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
        @error('condiciones')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="col-14 my-1">
        {!! Form::label('direccion', 'Direccion') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
        @error('direccion')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="col-15 my-3">
        {!! Form::label('pie_pagina', 'Pie de pagina') !!}
        {!! Form::text('pie_pagina', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
        @error('pie_pagina')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

</div>