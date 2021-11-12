{!! Form::label('estado', 'Estado de cliente o proveedor') !!}
{!! Form::text('estado', null, ['class' => 'form-control' ]) !!}

@error('estado')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror