<div class="form-row" style="">
    <div class="input-field" style="max-width: 210px;">
        {!! Form::label('ruc_cliente', 'Ruc Cliente') !!}
        {!! Form::text('ruc_cliente', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
        @error('ruc_cliente')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="input-field" style="max-width: 210px;">
        {!! Form::label('cliente', 'Razon social') !!}
        {!! Form::text('cliente', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
        @error('cliente')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    <div class="col-md-2 my-1" style="margin-left: 60px;">
        {!! Form::label('asignado', 'Vendedor') !!}
        {!! Form::select('asignado', $users, auth()->user()->name, ['class' => 'custom-select mr-sm-2']) !!}
        @error('asignado')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

</div>

<div class="form-row" style="margin-left: 10px;">

    <div class="col-md-1 my-1">
        {!! Form::label('cliente_id', 'Cliente ID') !!}
        {!! Form::text('cliente_id', null, ['class' => 'custom-select mr-sm-2', 'autocomplete'=>'off']) !!}
        @error('cliente_id')
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
        <label for="condiciones">Condiciones</label>
        <textarea name="condiciones" id="condiciones" class="form-control"> @foreach ($condiciones as $cond) {{ $cond->condiciones }}&#13;&#10; @endforeach </textarea>
        @error('pie_pagina')
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
        <label for="pie_pagina">Pie de pagina</label>
        <textarea name="pie_pagina" id="pie_pagina" class="form-control"> @foreach ($pie_pagina as $pie) {{ $pie->pie_pagina }}&#13;&#10; @endforeach </textarea>
        @error('pie_pagina')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
</div>

<input name="codigo" type="hidden" id="validationDefault01" value="COT000">