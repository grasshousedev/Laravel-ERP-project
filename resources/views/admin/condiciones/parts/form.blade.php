{!! Form::label('condiciones', 'Condiciones') !!}
{!! Form::text('condiciones', null, ['class' => 'form-control' ]) !!}

@error('condiciones')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror