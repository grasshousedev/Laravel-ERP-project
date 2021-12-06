<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cotizacione;
use App\Models\Ordenes_compra;
use App\Classes\CustomCodeGenerator;
use App\Models\Forma_pago;
use App\Models\estado_entrega;
use App\Models\Tiempo_entrega;
use App\Models\Tiempo_expiracione;
use App\Models\Tipo_moneda;
use App\Models\User;
use App\Models\Condicione;
use App\Models\Pie_pagina;
use App\Models\Cliente_producto;
use PDF;

class EvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filtro = 'Aprobado';
        $cotizacion = \DB::table('cotizaciones')
                    ->select('cotizaciones.*')
                    ->where('estado', 'like','%'.$filtro.'%')
                    ->get();
        
        //return ($cotizacion);
        return view('admin.evaluaciones.index', compact('cotizacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotizacion = Cotizacione::find($id);
        $cotizacion['codigo'] = ltrim($cotizacion['codigo'], "C");

        $registro = new Ordenes_compra;
        $registro->codigo = $cotizacion['codigo'];
        $registro->cliente = $cotizacion['cliente'];
        $registro->ruc_cliente = $cotizacion['ruc_cliente'];
        $registro->asignado = $cotizacion['asignado'];
        $registro->moneda = $cotizacion['moneda'];
        $registro->tiempo_expiracion = $cotizacion['tiempo_expiracion'];
        $registro->estado = $cotizacion['estado'];
        $registro->forma_pago = $cotizacion['forma_pago'];
        $registro->tiempo_entrega = $cotizacion['tiempo_entrega'];
        $registro->condiciones = $cotizacion['condiciones'];
        $registro->direccion = $cotizacion['direccion'];
        $registro->pie_pagina = $cotizacion['pie_pagina'];
        $registro->cotizacion_id = $id;
        $registro->cliente_id = $cotizacion['cliente_id'];
        $registro->save();

        return redirect()->route('admin.ordenestrabajo.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacion     = Cotizacione::find($id);
        $estado         = estado_entrega::pluck('estado', 'estado');
        $forma_pago     = Forma_pago::pluck('tipo_pago', 'tipo_pago');
        $tiempo_entrega = Tiempo_entrega::pluck('entrega', 'entrega');
        $expiracion     = Tiempo_expiracione::pluck('expiracion', 'expiracion');
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $users          = User::pluck('name', 'name');
        $condiciones    = Condicione::all();
        $pie_pagina     = Pie_pagina::all();

        $producto = Cliente_producto::where('cotizacion_id', '=', $cotizacion->id)->get();

        return view('admin.evaluaciones.edit', compact('cotizacion', 'estado', 'expiracion', 'forma_pago', 'moneda', 'tiempo_entrega', 'users', 'condiciones', 'pie_pagina', 'producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datoscot = request()->except('_token', '_method', 'codigo');

        Cotizacione::where('id', '=', $id)->update($datoscot);

        $cotizacion = Cotizacione::findOrFail($id);

        return redirect()->route('admin.ventas-index.index', $cotizacion)->with('info', 'La cotizacion fue actualizada correctamente.');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
