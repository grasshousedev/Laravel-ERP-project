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
use App\Models\Cliente_producto;
use App\Classes\CustomCodeGenerator;

class OrdenesTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizacion = Ordenes_compra::all();
        return view('admin.ordenes_trabajo.index', compact('cotizacion'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacion     = Ordenes_compra::find($id);
        $estado         = estado_entrega::pluck('estado', 'estado');
        $forma_pago     = Forma_pago::pluck('tipo_pago', 'tipo_pago');
        $tiempo_entrega = Tiempo_entrega::pluck('entrega', 'entrega');
        $expiracion     = Tiempo_expiracione::pluck('expiracion', 'expiracion');
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $users          = User::pluck('name', 'name');

        return view('admin.ordenes_trabajo.edit', compact('cotizacion', 'estado', 'expiracion', 'forma_pago', 'moneda', 'tiempo_entrega', 'users'));
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

        Ordenes_compra::where('id', '=', $id)->update($datoscot);
        $cotizacion = Ordenes_compra::findOrFail($id);

        return redirect()->route('admin.ordenestrabajo.index', $cotizacion)->with('info', 'La orden de compra fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ordenes_compra::destroy($id);

        $cotizacion = Ordenes_compra::all();
        return redirect()->route('admin.ordenestrabajo.index', compact('cotizacion'))->with('info', 'La orden de compra fue eliminada correctamente.');
    }
}
