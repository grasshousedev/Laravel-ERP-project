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
use PDF;

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

    public function pdf()
    {
        $estado         = estado_entrega::pluck('estado', 'estado');
        $forma_pago     = Forma_pago::pluck('tipo_pago', 'tipo_pago');
        $tiempo_entrega = Tiempo_entrega::pluck('entrega', 'entrega');
        $expiracion     = Tiempo_expiracione::pluck('expiracion', 'expiracion');
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $users          = User::pluck('name', 'name');
        $cotizacion     = Cotizacione::all();

        $pdf = PDF::loadView('admin.ventas.pdf', ['estado'=>$estado, 'expiracion'=>$forma_pago, 'forma_pago'=>$tiempo_entrega, 'moneda'=>$expiracion, 'tiempo_entrega'=>$moneda, 'users'=>$users, 'cotizacion'=>$cotizacion]);
        // return $pdf->stream(); //<== para ver en el navegador
        $nombre         = date('Y-m-d');
        return $pdf->download('COTIZACIONES_'.$nombre.'.pdf');
        // return view('admin.ventas.pdf', compact('estado', 'expiracion', 'forma_pago', 'moneda', 'tiempo_entrega', 'users', 'cotizacion')); // <== retorna la vista HTML
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
        $request->validate([
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
            'cliente_id'        => '',
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
        $cotizacion     = Cotizacione::find($id);

        // return view('admin.ventas.mas_info', compact('cotizacion'));

        $pdf = PDF::loadView('admin.ventas.mas_info', compact('cotizacion'));

        $nombre         = date('Y-m-d');
        return $pdf->stream('CLIENTE-'.$nombre.'.pdf');
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
        $request->validate([
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

}
