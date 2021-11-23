<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('ruc', 'RUC Proveedor') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <div class="input-field col-md-11 inputGroupContainer">
                            {!! Form::text('ruc', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                            @error('ruc')
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
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('responsable', 'Responsable') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16" style="margin-right: 20px;">
                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                        </svg>
                        {!! Form::select('responsable', $users, auth()->user()->name, ['class' => 'custom-select mr-sm-2']) !!}
                        @error('responsable')
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

<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('tiempo_entrega', 'Tiempo de entrega') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="margin-right: 20px;">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                        {!! Form::select('tiempo_entrega', $tiempo_entrega, null, ['class' => 'custom-select mr-sm-2']) !!}
                        @error('tiempo_entrega')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('contacto', 'Contacto') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16" style="margin-right: 20px;"> >
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                    </svg>
                        {!! Form::text('contacto', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('contacto')
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

<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('estado', 'Estado') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16" style="margin-right: 20px;">
                       <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                    </svg>
                        {!! Form::select('estado', $estado, null, ['class' => 'custom-select mr-sm-2']) !!}
                        @error('estado')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('moneda', 'Moneda') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                      <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                      <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                      <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                    </svg>
                        {!! Form::select('moneda', $moneda, null, ['class' => 'custom-select mr-sm-2']) !!}
                        @error('moneda')
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

<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('razon_social', 'Razon social') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::text('razon_social', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('razon_social')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('direccion', 'Direccion') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-signpost-split-fill" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5v5z"/>
                    </svg>
                        {!! Form::text('direccion', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('direccion')
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

<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('cot_proveedor', 'COT Proveedor') !!}</label> 
                <div class="col-md-5 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                    </svg>
                        {!! Form::text('cot_proveedor', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('cot_proveedor')
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
<br>
<input type="hidden" name="proveedor_id" id="proveedor_id">