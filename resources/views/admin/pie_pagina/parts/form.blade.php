{!! Form::label('pie_pagina', 'Pie de pagina') !!}
{!! Form::text('pie_pagina', null, ['class' => 'form-control' ]) !!}

@error('pie_pagina')
    <small class="text-danger">
        {{ $message }}
    </small>
@enderror