{!! Form::label('ruc', 'RUC') !!}
{!! Form::text('ruc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del RUC']) !!}
@error('ruc')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('razon', 'Razon social') !!}
{!! Form::text('razon', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la razon social']) !!}
@error('razon')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('descripcion', 'Descripcion') !!}
{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}
@error('descripcion')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('cot', 'Cotizacion') !!}
{!! Form::text('cot', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el godigod e la cotizacion']) !!}
@error('cot')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('tiempo_entrega', 'Tiempo de entrega') !!}
{!! Form::text('tiempo_entrega', null, ['class' => 'form-control']) !!}
@error('tiempo_entrega')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror

{!! Form::label('archivo', 'Adjuntar archivo') !!}
{!! Form::file('archivo', null, ['class' => 'form-control']) !!}
@error('archivo')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror