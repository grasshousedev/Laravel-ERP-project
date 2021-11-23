<div class="input-field" style="max-width: 210px;">
    {!! Form::label('producto', 'Producto / servicio') !!}
    {!! Form::text('producto', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('producto')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field" style="max-width: 210px;">
    {!! Form::label('notas', 'Notas') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('notas')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field" style="max-width: 210px;">
    {!! Form::label('cantidad_prod', 'Cantidad') !!}
    {!! Form::text('cantidad_prod', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('cantidad_prod')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field" style="max-width: 210px;">
    {!! Form::label('precio_prod', 'Precio') !!}
    {!! Form::text('precio_prod', null, ['class' => 'form-control', 'autocomplete'=>'off', 'readonly']) !!}
    @error('precio_prod')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>
<br>
<input type="text" name="codigo" value="{{ ($_GET['id']) }}">
<input type="text" name="oc_proveedor_id" value="{{ ltrim($_GET['id'], 'OP00') }}">
{{-- ltrim($str, 'g') --}}
<input name="total_prod" type="text" id="total_prod">

<input type="text" name="proveedor" id="proveedor">
<input type="text" name="moneda" id="moneda">
<input type="text" name="codigo_cotizacion" id="codigo_cotizacion">
<input type="text" name="tiempo_entrega" id="tiempo_entrega">
<br>