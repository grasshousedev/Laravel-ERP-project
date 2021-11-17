<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listado;
use App\Models\Productos_occp;

class Proveedores_productos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtro = $request->get('id');
        $productos = \DB::table('productos_occps')
                    ->select('productos_occps.*')
                    ->where('codigo', $filtro)
                    ->get();
        return view('admin.occProveedores.productos_provee', compact('productos'));
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
        $request->validate([
            'producto'          => 'required',
            'codigo'            => 'required',
            'notas'             => '',
            'proveedor'         => 'required',
            'moneda'            => 'required',
            'cantidad_prod'     => 'required',
            'precio_prod'       => 'required',
            'total_prod'        => '',
            'codigo_cotizacion' => '',
            'tiempo_entrega'    => 'required',
            'oc_proveedor_id'   => 'required',
        ]);
        
        $datosprods = request()->except('_token');

        Productos_occp::insert($datosprods);

        //return $request->cotizacion_id;
        
        //return response()->json($datosprods); //para debug
        return redirect()->route('admin.productos_provee.index', 'id='.$request->codigo);
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
    public function edit(Request $request, $id)
    {
        $productos     = Cliente_producto::find($id);

        return view('admin.ventas.productos_cli', compact('productos'));
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
    public function destroy(Request $request, $id)
    {
        Productos_occp::destroy($id);

        $orden_compras = Ocproveedore::all();
        //return view('admin.occProveedores.index', compact('productos'));
        return redirect()->route('admin.occProveedores.index', compact('orden_compras'))->with('info', 'Se elimino correctamente.');
    }
}
