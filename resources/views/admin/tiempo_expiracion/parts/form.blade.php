{!! Form::label('expiracion', 'Tiempo de expiracion') !!}
{!! Form::text('expiracion', null, ['class' => 'form-control' ]) !!}

@error('expiracion')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror