{!! Form::label('entrega', 'Tiempo de entrega') !!}
{!! Form::text('entrega', null, ['class' => 'form-control' ]) !!}

@error('entrega')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror