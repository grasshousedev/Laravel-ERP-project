<div class="form-group">
    {!! Form::label('ruc', 'RUC *') !!}
    {!! Form::text('ruc', null, ['class' => 'form-control' ]) !!}
    @error('ruc')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('razon_social', 'Razon social *') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control' ]) !!}
    @error('razon_social')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Dirección *') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control' ]) !!}
    @error('direccion')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('contacto', 'Contacto *') !!}
    {!! Form::text('contacto', null, ['class' => 'form-control' ]) !!}
    @error('contacto')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('celular1', 'Celular 1 *') !!}
    {!! Form::text('celular1', null, ['class' => 'form-control' ]) !!}
    @error('celular1')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('celular2', 'Calular 2') !!}
    {!! Form::text('celular2', null, ['class' => 'form-control' ]) !!}
    @error('celular2')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email1', 'Email 1 *') !!}
    {!! Form::text('email1', null, ['class' => 'form-control' ]) !!}
    @error('email1')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email2', 'Email 2') !!}
    {!! Form::text('email2', null, ['class' => 'form-control' ]) !!}
    @error('email2')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('paginaweb', 'Pagina web') !!}
    {!! Form::text('paginaweb', null, ['class' => 'form-control' ]) !!}
    @error('paginaweb')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('area', 'Area *') !!}
    {!! Form::text('area', null, ['class' => 'form-control' ]) !!}
    @error('area')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('estado', 'Estado *') !!}
    {!! Form::text('estado', null, ['class' => 'form-control' ]) !!}
    @error('estado')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('asignado', 'Asignado *') !!}
    {!! Form::text('asignado', null, ['class' => 'form-control' ]) !!}
    @error('asignado')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>