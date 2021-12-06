<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cliente_producto;
use App\Models\Cotizacione;
use App\Models\Orden_pedido;
use App\Models\Listado;
use PDF;

class EvaluacionesPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $cotizacion           = Cotizacione::find($id);
        $cliente_producto     = Cliente_producto::where('cotizacion_id', '=', $cotizacion['id'])->get();;

        $pdf = PDF::loadView('admin.evaluaciones.pdf', compact('cotizacion', 'cliente_producto'));

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
        //CAMBIA LISTADO EN ORDEN DE PEDIDO JAMIRLOHIZO
        $cotizacion = Orden_pedido::find($id);
        $cotizacion->listado = "btn-primary";
        $cotizacion->save();

        Listado::where('cotizacion_id', '=', $cotizacion->cotizacion_id)->update(['listado' => 'btn-primary']);
        
        return redirect()->route('admin.logistica.index');
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
