<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('nombre', 'Nombre') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-upc" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                        </svg>
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
                        @error('nombre')
                        <small class="text-danger">
                            Ingrese el nombre del producto
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
                <label class="col-md-4 control-label" >{!! Form::label('cod_prod', 'Codigo') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-upc" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                        </svg>
                        {!! Form::text('cod_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del producto']) !!}
                        @error('cod_prod')
                        <small class="text-danger">
                            El campo codigo es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('fabri_prod', 'Fabricante') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::text('fabri_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el fabricante del producto']) !!}
                        @error('fabri_prod')
                        <small class="text-danger">
                            El campo fabricante es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('model_prod', 'Modelo') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                        </svg>
                        {!! Form::text('model_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el modelo del producto']) !!}
                        @error('model_prod')
                        <small class="text-danger">
                            El campo codigo es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('tipo_prod', 'Tipo') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        {!! Form::select('tipo_prod', $tipo_prod, null, ['class' => 'form-control']) !!}
                        @error('tipo_prod')
                        <small class="text-danger">
                            El campo tipo es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('descripcion', 'Descripcion') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del producto']) !!}
                        @error('descripcion')
                        <small class="text-danger">
                            El campo precio de compra es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('prec_prod', 'Precio de compra') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                        </svg>
                        {!! Form::text('prec_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio de compra']) !!}
                        @error('prec_prod')
                        <small class="text-danger">
                            El campo precio de compra es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('vent_prod', 'Precio de costo') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                        </svg>
                        {!! Form::text('vent_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio de venta']) !!}
                        @error('vent_prod')
                        <small class="text-danger">
                            El campo precio de venta es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('unidades_prod', 'Unidades') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-caret-down-square" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M3.626 6.832A.5.5 0 0 1 4 6h8a.5.5 0 0 1 .374.832l-4 4.5a.5.5 0 0 1-.748 0l-4-4.5z"/>
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2z"/>
                        </svg>
                        {!! Form::number('unidades_prod', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las unidades']) !!}
                        @error('unidades_prod')
                        <small class="text-danger">
                            El campo unidades es requerido
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                        </svg>
                        {!! Form::select('estado', $estado, null, ['class' => 'form-control']) !!}
                        @error('estado')
                        <small class="text-danger">
                            El campo estado es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('tipo', 'Tipo (Producto/Servicio)') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::select('tipo', $tipo, null, ['class' => 'form-control']) !!}
                        @error('tipo')
                        <small class="text-danger">
                            El campo unidades es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('proveedor', 'Ruc Proveedor') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-field">
                        {!! Form::text('proveedor', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el RUC']) !!}
                        @error('proveedor')
                        <small class="text-danger">
                            El campo unidades es requerido
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
                <label class="col-md-4 control-label" >{!! Form::label('razon_social', 'Razón Social') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::text('razon_social', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la razon social']) !!}
                        @error('razon_social')
                        <small class="text-danger">
                            El campo unidades es requerido
                        </small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

