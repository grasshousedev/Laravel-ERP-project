<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cotizacione;
use App\Models\Ordenes_compra;
use App\Classes\CustomCodeGenerator;
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
        $filtro = 'Proceso';
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
        //
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
        //
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
