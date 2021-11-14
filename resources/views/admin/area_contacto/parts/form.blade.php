{!! Form::label('area', 'Area de ccontacto') !!}
{!! Form::text('area', null, ['class' => 'form-control' ]) !!}

@error('area')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror