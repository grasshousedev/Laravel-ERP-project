<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del usuario']) !!}
    @error('name')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido del usuario']) !!}
    @error('apellido')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('dni', 'DNI') !!}
    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el DNI del usuario']) !!}
    @error('dni')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del usuario']) !!}
    @error('email')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
    @error('password')
    <small class="text-danger">
        {{ $message }}
    </small>
    @enderror
</div>
