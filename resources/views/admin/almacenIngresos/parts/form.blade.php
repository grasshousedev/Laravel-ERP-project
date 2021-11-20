<div class="input-field">
    {!! Form::label('codigo', 'Codigo') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('codigo')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="select-field">
    {!! Form::label('fabricante', 'Fabricante') !!}
    {!! Form::select('fabricante', $fabricante, null, ['class' => 'form-control']) !!}
    @error('fabricante')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="select-field">
    {!! Form::label('modelo', 'Modelo') !!}
    {!! Form::select('modelo', $modelo ,null, ['class' => 'form-control']) !!}
    @error('modelo')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="select-field">
    {!! Form::label('categoria', 'Categoria') !!}
    {!! Form::select('categoria', $categoria, null, ['class' => 'form-control']) !!}
    @error('categoria')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('precio_costo', 'Precio costo') !!}
    {!! Form::text('precio_costo', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('precio_costo')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="select-field">
    {!! Form::label('lote', 'Lote') !!}
    {!! Form::select('lote', $lote ,null, ['class' => 'form-control']) !!}
    @error('lote')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="select-field">
    {!! Form::label('unidad_medida', 'Unidad de medida') !!}
    {!! Form::select('unidad_medida', $unidades_med ,null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('unidad_medida')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('unidades', 'Unidades') !!}
    {!! Form::text('unidades', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('unidades')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('descripcion', 'Descripcion') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('descripcion')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('ruc_provee', 'RUC Proveedor') !!}
    {!! Form::text('ruc_provee', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('ruc_provee')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('razon_social', 'Razon social') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('razon_social')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('guia', 'Guia') !!}
    {!! Form::text('guia', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('guia')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="select-field">
    {!! Form::label('almacen', 'Almacen') !!}
    {!! Form::select('almacen', $almacen, null, ['class' => 'form-control']) !!}
    @error('almacen')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('oc_proveedor', 'O.C. Proveedor') !!}
    {!! Form::text('oc_proveedor', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('oc_proveedor')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="input-field">
    {!! Form::label('orden_pedido', 'Orden pedido') !!}
    {!! Form::text('orden_pedido', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
    @error('orden_pedido')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

<div class="select-field">
    {!! Form::label('moneda', 'Moneda') !!}
    {!! Form::select('moneda', $moneda, null, ['class' => 'custom-select mr-sm-2']) !!}
    @error('moneda')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>

