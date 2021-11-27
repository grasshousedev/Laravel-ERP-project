<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('ruc_cliente', 'Ruc Cliente') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::text('ruc_cliente', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('ruc_cliente')
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
                <label class="col-md-4 control-label" >{!! Form::label('cliente', 'Razon social') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::text('cliente', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('cliente')
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
                <label class="col-md-4 control-label" > {!! Form::label('asignado', 'Vendedor') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::select('asignado', $users, auth()->user()->name, ['class' => 'custom-select mr-sm-2']) !!}
                        @error('asignado')
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
                <label class="col-md-4 control-label" >{!! Form::label('cliente_id', 'Cliente ID') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    </svg>
                        {!! Form::text('cliente_id', null, ['class' => 'custom-select mr-sm-2', 'autocomplete'=>'off']) !!}
                        @error('cliente_id')
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
                <label class="col-md-4 control-label" >{!! Form::label('moneda', 'Moneda') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
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
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('tiempo_expiracion', 'Expiracion') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                        {!! Form::select('tiempo_expiracion', $expiracion, null, ['class' => 'custom-select mr-sm-2']) !!}
                        @error('tiempo_expiracion')
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
                <label class="col-md-4 control-label" > {!! Form::label('forma_pago', 'Pago') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                      <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                      <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                      <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                    </svg>
                        {!! Form::select('forma_pago', $forma_pago, null, ['class' => 'custom-select mr-sm-2']) !!}
                        @error('forma_pago')
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
                <label class="col-md-4 control-label" >{!! Form::label('tiempo_entrega', 'Entrega') !!}</label> 
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
                <label class="col-md-4 control-label" >Condiciones</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                        <textarea name="condiciones" id="condiciones" class="form-control"> @foreach ($condiciones as $cond) {{ $cond->condiciones }}&#13;&#10; @endforeach </textarea>
                        @error('pie_pagina')
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
                <label class="col-md-4 control-label" >{!! Form::label('direccion', 'Direccion') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-signpost-split" viewBox="0 0 16 16" style="margin-right: 20px;">
                     <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"/>
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
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >Pie de pagina</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16" style="margin-right: 20px;">
                          <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                         <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <textarea name="pie_pagina" id="pie_pagina" class="form-control"> @foreach ($pie_pagina as $pie) {{ $pie->pie_pagina }}&#13;&#10; @endforeach </textarea>
                        @error('pie_pagina')
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

<input name="codigo" type="hidden" id="validationDefault01" value="COT000">