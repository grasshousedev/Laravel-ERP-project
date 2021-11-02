<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente_producto;
use App\Models\Cotizacione;

class Cliente_productos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtro = $request->get('id');
        $productos = \DB::table('cliente_productos')
                    ->select('cliente_productos.*')
                    ->where('cotizacion_id', $filtro)
                    ->get();
        return view('admin.ventas.productos_cli', compact('productos'));
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
            'producto'            => 'required',
            'cantidad_prod'       => 'required',
            'precio_prod'         => 'required',
            'cotizacion_id'       => '',
            'total_prod'          => ''
        ]);
            
        $datosprods = request()->except('_token');

        Cliente_producto::insert($datosprods);

        //return $request->cotizacion_id;
        
        //return response()->json($datosprods); //para debug
        return redirect()->route('admin.productos_cli.index', 'id='.$request->cotizacion_id);
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
