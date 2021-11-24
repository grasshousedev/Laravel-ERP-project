<div class="row g-2">
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" >{!! Form::label('serial', 'Serial') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-upc" viewBox="0 0 16 16" style="margin-right: 20px;">
                          <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                        </svg>
                        {!! Form::text('serial', null, ['class' => 'form-control']) !!}
                        @error('serial')
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
                <label class="col-md-4 control-label" >{!! Form::label('nombre', 'Nombre') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 20px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        @error('nombre')
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
                <label class="col-md-4 control-label" >{!! Form::label('fabricante', 'Fabricante') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                      <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                    </svg>
                        {!! Form::select('fabricante', $fabricante, null, ['class' => 'form-control']) !!}
                        @error('fabricante')
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
                <label class="col-md-4 control-label" >{!! Form::label('modelo', 'Modelo') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16" style="margin-right: 20px;">
                    <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                    </svg>
                        {!! Form::select('modelo', $modelo ,null, ['class' => 'form-control']) !!}
                         @error('modelo')
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
                <label class="col-md-4 control-label" >{!! Form::label('categoria', 'Categoria') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16" style="margin-right: 20px;">
                     <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                      <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                    </svg>
                        {!! Form::select('categoria', $categoria, null, ['class' => 'form-control']) !!}
                        @error('categoria')
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
                <label class="col-md-4 control-label" >{!! Form::label('precio_costo', 'Precio costo (Unitario)') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16" style="margin-right: 20px;">
                     <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                      <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                    </svg>
                        {!! Form::number('precio_costo', null, ['class' => 'form-control', 'autocomplete'=>'off', 'min' => '3400']) !!}
                        @error('precio_costo')
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
                <label class="col-md-4 control-label" >{!! Form::label('lote', 'Lote') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                        {!! Form::select('lote', $lote ,null, ['class' => 'form-control']) !!}
                        @error('lote')
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
                <label class="col-md-4 control-label" >{!! Form::label('unidad_medida', 'Unidad de medida') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16" style="margin-right: 20px;">
                     <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                    </svg>
                        {!! Form::select('unidad_medida', $unidades_med ,null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('unidad_medida')
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
                <label class="col-md-4 control-label" >{!! Form::label('unidades', 'Unidades') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                    </svg>
                        {!! Form::number('unidades', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('unidades')
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
                <label class="col-md-4 control-label" >{!! Form::label('descripcion', 'Descripcion') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                      <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                        {!! Form::text('descripcion', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('descripcion')
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
                <label class="col-md-4 control-label" >{!! Form::label('ruc_provee', 'RUC Proveedor') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                    </svg>
                        {!! Form::text('ruc_provee', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                         @error('ruc_provee')
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
                <label class="col-md-4 control-label" >{!! Form::label('guia', 'Guia Ingreso') !!}</label>
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                      <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
                    </svg>
                        {!! Form::text('guia', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('guia')
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
                <label class="col-md-4 control-label" >{!! Form::label('almacen', 'Almacen') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
                    </svg>
                        {!! Form::select('almacen', $almacen, null, ['class' => 'form-control']) !!}
                        @error('almacen')
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
                <label class="col-md-4 control-label" > {!! Form::label('oc_proveedor', 'O.C. Proveedor') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16" style="margin-right: 20px;">
                     <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                    </svg>
                        {!! Form::text('oc_proveedor', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('oc_proveedor')
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
                <label class="col-md-4 control-label" >{!! Form::label('orden_pedido', 'Orden pedido') !!}</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                      <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
                    </svg>
                        {!! Form::text('orden_pedido', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                        @error('orden_pedido')
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
                <label class="col-md-4 control-label" for="fecha_ingreso">Fecha Ingreso</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                        <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" min="2021-11-01" max="2023-11-01">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <div class="form-group">
                <label class="col-md-4 control-label" for="hora_ingreso">Hora Ingreso</label> 
                <div class="col-md-11 inputGroupContainer">
                    <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="margin-right: 20px;">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                        <input type="time" name="hora_ingreso" id="hora_ingreso" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<input type="hidden" name="codigo" value="temp">