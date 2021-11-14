<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('condiciones', 'Condiciones') !!}</label> 
                <div class="col-md-3 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chevron-bar-contract" viewBox="0 0 16 16" style="margin-right: 20px;">
                          <path fill-rule="evenodd" d="M3.646 14.854a.5.5 0 0 0 .708 0L8 11.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708zm0-13.708a.5.5 0 0 1 .708 0L8 4.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zM1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8z"/>
                        </svg>
                        {!! Form::text('condiciones', null, ['class' => 'form-control' ]) !!}
                        @error('condiciones')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>