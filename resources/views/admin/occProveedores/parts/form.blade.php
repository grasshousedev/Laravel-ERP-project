<div class="input-field"">
    {!! Form::label('ruc', 'RUC Proveedor') !!}
    {!! Form::text('ruc', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('ruc')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

{!! Form::label('responsable', 'Responsable') !!}
{!! Form::text('responsable', null, ['class' => 'custom-select mr-sm-2', 'autocomplete'=>'off']) !!}
@error('responsable')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('tiempo_entrega', 'Tiempo de entrega') !!}
{!! Form::select('tiempo_entrega', $tiempo_entrega, null, ['class' => 'custom-select mr-sm-2']) !!}
@error('tiempo_entrega')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('contacto', 'Contacto') !!}
{!! Form::text('contacto', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
@error('contacto')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('estado', 'Estado') !!}
{!! Form::select('estado', $estado, null, ['class' => 'custom-select mr-sm-2']) !!}
@error('estado')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('moneda', 'Moneda') !!}
{!! Form::select('moneda', $moneda, null, ['class' => 'custom-select mr-sm-2']) !!}
@error('moneda')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('razon_social', 'Razon social') !!}
{!! Form::text('razon_social', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
@error('razon_social')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('direccion', 'Direccion') !!}
{!! Form::text('direccion', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
@error('direccion')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('cot_proveedor', 'COT Proveedor') !!}
{!! Form::text('cot_proveedor', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
@error('cot_proveedor')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

<input type="hidden" name="proveedor_id" id="proveedor_id">