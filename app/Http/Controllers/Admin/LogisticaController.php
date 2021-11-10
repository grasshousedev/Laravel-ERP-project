<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ordenes_compra;
use App\Models\estado_entrega;
use App\Models\Forma_pago;
use App\Models\Tiempo_entrega;
use App\Models\Tiempo_expiracione;
use App\Models\Tipo_moneda;
use App\Models\User;
use App\Models\Cotizacione;
use App\Models\Area_provee_cliente;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Orden_pedido;
use App\Models\Cliente_producto;
use App\Classes\CustomCodeGenerator;

class LogisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizacion = Orden_pedido::all();
        return view('admin.logistica.index', compact('cotizacion'));
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
        $cotizacion = Ordenes_compra::find($id);
        $cotizacion['codigo'] = str_replace("T", "P", $cotizacion['codigo']);

        $registro = new Orden_pedido;
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
        $registro->cliente_id = $cotizacion['cliente_id'];
        $registro->save();

        return redirect()->route('admin.logistica.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacion     = Orden_pedido::find($id);
        $estado         = estado_entrega::pluck('estado', 'estado');
        $forma_pago     = Forma_pago::pluck('tipo_pago', 'tipo_pago');
        $tiempo_entrega = Tiempo_entrega::pluck('entrega', 'entrega');
        $expiracion     = Tiempo_expiracione::pluck('expiracion', 'expiracion');
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $users          = User::pluck('name', 'name');

        return view('admin.logistica.edit', compact('cotizacion', 'estado', 'expiracion', 'forma_pago', 'moneda', 'tiempo_entrega', 'users'));
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
        $request->validate([
            'cliente'           => 'required',
            'asignado'          => 'required',
            'moneda'            => 'required',
            'tiempo_expiracion' => 'required',
            'estado'            => 'required',
            'forma_pago'        => 'required',
            'tiempo_entrega'    => 'required',
            'condiciones'       => 'required',
            'direccion'         => 'required',
            'pie_pagina'        => 'required',
        ]);

        $datoscot = request()->except('_token', '_method', 'codigo');

        Orden_pedido::where('id', '=', $id)->update($datoscot);
        $cotizacion = Orden_pedido::findOrFail($id);

        return redirect()->route('admin.logistica.index', $cotizacion)->with('info', 'La orden de pedido fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orden_pedido::destroy($id);

        $cotizacion = Orden_pedido::all();
        return redirect()->route('admin.ordenestrabajo.index', compact('cotizacion'))->with('info', 'La orden de pedido fue eliminada correctamente.');
    }
}
