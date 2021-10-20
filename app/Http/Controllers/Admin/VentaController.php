<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\estado_entrega;
use App\Models\Forma_pago;
use App\Models\Tiempo_entrega;
use App\Models\Tiempo_expiracione;
use App\Models\Tipo_moneda;
use App\Models\User;
use App\Models\Cotizacione;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $estado         = estado_entrega::pluck('estado', 'estado');
        $forma_pago     = Forma_pago::pluck('tipo_pago', 'tipo_pago');
        $tiempo_entrega = Tiempo_entrega::pluck('entrega', 'entrega');
        $expiracion     = Tiempo_expiracione::pluck('expiracion', 'expiracion');
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $users          = User::pluck('name', 'name');
        $cotizacion     = Cotizacione::all();

        return view('admin.ventas.cotizar', compact('estado', 'expiracion', 'forma_pago', 'moneda', 'tiempo_entrega', 'users', 'cotizacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ventas.cotizar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate = ([
            'codigo'            => 'required',
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

        $datoscot = request()->except('_token');
        Cotizacione::insert($datoscot);
        //return response()->json($datoscot);

        $cotizacion = Cotizacione::all();
        return redirect()->route('admin.ventas-index.index', compact('cotizacion'))->with('info', 'La cotizacion fue creada correctamente.');
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
        $cotizacion     = Cotizacione::find($id);
        $estado         = estado_entrega::pluck('estado', 'estado');
        $forma_pago     = Forma_pago::pluck('tipo_pago', 'tipo_pago');
        $tiempo_entrega = Tiempo_entrega::pluck('entrega', 'entrega');
        $expiracion     = Tiempo_expiracione::pluck('expiracion', 'expiracion');
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $users          = User::pluck('name', 'name');

        return view('admin.ventas.edit', compact('cotizacion', 'estado', 'expiracion', 'forma_pago', 'moneda', 'tiempo_entrega', 'users'));
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
        $request->validate = ([
            'codigo'            => 'required',
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

        $datoscot = request()->except('_token', '_method');

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
        Cotizacione::destroy($id);

        $cotizacion = Cotizacione::all();
        return redirect()->route('admin.ventas-index.index', compact('cotizacion'))->with('info', 'La cotizacion fue eliminada correctamente.');
    }

    function downloadPDF($id)
    {
        $venta = $this->venta->get();
        $cotizacion = Cotizacione::find($id);
        $pdf = PDF::loadView('ventas.pdf', compact('cotizacion'));
        return $pdf->download('archivo.pdf');
    }
}
