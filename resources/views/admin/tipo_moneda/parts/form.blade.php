{!! Form::label('moneda', 'Tipo de moneda') !!}
{!! Form::text('moneda', null, ['class' => 'form-control' ]) !!}

@error('moneda')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror