<div class="form-group">
    {!! Form::label('cod_prod', 'Codigo') !!}
    {!! Form::text('cod_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del producto']) !!}
    @error('cod_prod')
    <small class="text-danger">
        El campo codigo es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('fabri_prod', 'Fabricante') !!}
    {!! Form::text('fabri_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el fabricante del producto']) !!}
    @error('fabri_prod')
    <small class="text-danger">
        El campo fabricante es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('model_prod', 'Modelo') !!}
    {!! Form::text('model_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el modelo del producto']) !!}
    @error('model_prod')
    <small class="text-danger">
        El campo codigo es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('tipo_prod', 'Tipo') !!}
    {!! Form::select('tipo_prod', $tipo_prod, null, ['class' => 'form-control']) !!}
    @error('tipo_prod')
    <small class="text-danger">
        El campo tipo es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio de compra']) !!}
    @error('descripcion')
    <small class="text-danger">
        El campo precio de compra es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('prec_prod', 'Precio de compra') !!}
    {!! Form::text('prec_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio de compra']) !!}
    @error('prec_prod')
    <small class="text-danger">
        El campo precio de compra es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('vent_prod', 'Precio de venta') !!}
    {!! Form::text('vent_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio de venta']) !!}
    @error('vent_prod')
    <small class="text-danger">
        El campo precio de venta es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('unidades_prod', 'Unidades') !!}
    {!! Form::text('unidades_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las unidades']) !!}
    @error('unidades_prod')
    <small class="text-danger">
        El campo unidades es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('estado', 'Estado') !!}
    {!! Form::select('estado', $estado, null, ['class' => 'form-control']) !!}
    @error('estado')
    <small class="text-danger">
        El campo estado es requerido
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('proveedor', 'Proveedor') !!}
    {!! Form::text('proveedor', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el proveedor']) !!}
    @error('proveedor')
    <small class="text-danger">
        El campo unidades es requerido
    </small>
    @enderror
</div>