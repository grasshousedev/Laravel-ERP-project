{{-- @foreach ($cotizacion as $value)
    <?//php $id = $value->id; ?>
    @endforeach --}}
    <input name="codigo" type="hidden" id="validationDefault01" value="COT000">
<div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('cliente', 'Cliente') !!}</a></h4>
            <p class="description">
            {!! Form::text('cliente', null, ['class' => 'form-control border-0', 'autocomplete'=>'off', 'readonly']) !!}
            @error('cliente')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror 
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('asignado', 'Asignado') !!}</a></h4>
            <p class="description">
            {!! Form::select('asignado', $users, auth()->user()->name, ['class' => 'custom-select mr-sm-2']) !!}
            @error('asignado')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror 
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('cliente_id', 'Cliente ID') !!}</a></h4>
            <p class="description">
            {!! Form::text('cliente_id', null, ['class' => 'custom-select mr-sm-2 border-0', 'autocomplete'=>'off', 'readonly']) !!}
            @error('cliente_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror  
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('moneda', 'Moneda') !!}</a></h4>
            <p class="description">
            {!! Form::select('moneda', $moneda, null, ['class' => 'custom-select mr-sm-2 border-0', 'disabled']) !!}
            @error('moneda')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror 
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('tiempo_expiracion', 'Expiracion') !!}</a></h4>
            <p class="description">
            {!! Form::select('tiempo_expiracion', $expiracion, null, ['class' => 'custom-select mr-sm-2 border-0', 'disabled']) !!}
            @error('tiempo_expiracion')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('estado', 'Estado') !!}</a></h4>
            <p class="description">
            {!! Form::select('estado', $estado, null, ['class' => 'custom-select mr-sm-2 border-0', 'disabled']) !!}
            @error('estado')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('forma_pago', 'Pago') !!}</a></h4>
            <p class="description">
            {!! Form::select('forma_pago', $forma_pago, null, ['class' => 'custom-select mr-sm-2 border-0', 'disabled']) !!}
            @error('forma_pago')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href=""> {!! Form::label('tiempo_entrega', 'Entrega') !!}</a></h4>
            <p class="description">
            {!! Form::select('tiempo_entrega', $tiempo_entrega, null, ['class' => 'custom-select mr-sm-2 border-0', 'disabled']) !!}
            @error('tiempo_entrega')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('condiciones', 'Condiciones generales') !!}</a></h4>
            <p class="description">
            {!! Form::text('condiciones', null, ['class' => 'form-control border-0', 'autocomplete'=>'off', 'readonly']) !!}
            @error('condiciones')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('direccion', 'Direccion') !!}</a></h4>
            <p class="description">
            {!! Form::text('direccion', null, ['class' => 'form-control border-0', 'autocomplete'=>'off', 'readonly']) !!}
            @error('direccion')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </p>
          </div>
        </div>
</div>
@include('admin.logistica.parts.producto_cliente')

<div class="col-md-6 col-lg-6 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">{!! Form::label('pie_pagina', 'Pie de pagina') !!}</a></h4>
            <p class="description">
            {!! Form::text('pie_pagina', null, ['class' => 'form-control border-0', 'autocomplete'=>'off', 'readonly']) !!}
            @error('pie_pagina')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </p>
          </div>
    </div>
    <br>