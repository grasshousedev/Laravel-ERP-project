{!! Form::label('ruc', 'RUC') !!}
{!! Form::text('ruc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del RUC']) !!}

{!! Form::label('razon', 'Razon social') !!}
{!! Form::text('razon', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la razon social']) !!}

{!! Form::label('descripcion', 'Descripcion') !!}
{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}

{!! Form::label('cot', 'Cotizacion') !!}
{!! Form::text('cot', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el godigod e la cotizacion']) !!}

{!! Form::label('tiempo_entrega', 'Tiempo de entrega') !!}
{!! Form::text('tiempo_entrega', null, ['class' => 'form-control']) !!}

{!! Form::label('archivo', 'Adjuntar archivo') !!}
{!! Form::file('archivo', null, ['class' => 'form-control']) !!}