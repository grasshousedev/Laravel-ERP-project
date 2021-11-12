{!! Form::label('tipo_pago', 'Forma de pago') !!}
{!! Form::text('tipo_pago', null, ['class' => 'form-control' ]) !!}

@error('tipo_pago')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror