<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salida;
use App\Models\Tipo_moneda;
use App\Models\Almacene;
use App\Models\Modelo;
use App\Models\Fabricante;
use App\Models\Categoria;
use App\Models\Lote;
use App\Models\UnidadesMedida;

class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almaceningreso = Salida::all();
        return view('admin.views_salidas.index', compact('almaceningreso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $almacen        = Almacene::pluck('almacen', 'almacen');
        $modelo         = Modelo::pluck('modelo', 'modelo');
        $fabricante     = Fabricante::pluck('fabricante', 'fabricante');
        $categoria      = Categoria::pluck('categoria', 'categoria');
        $lote           = Lote::pluck('lote', 'lote');
        $unidades_med   = UnidadesMedida::pluck('unidad', 'unidad');

        return view('admin.views_salidas.create', compact('moneda', 'almacen', 'modelo', 'fabricante', 'categoria', 'lote', 'unidades_med'));
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
            'fabricante'        => 'required',
            'modelo'            => 'required',
            'categoria'         => 'required',
            'precio_costo'      => 'required',
            'lote'              => 'required',
            'unidad_medida'     => 'required',
            'unidades'          => 'required',
            'descripcion'       => 'required',
            'ruc_provee'        => 'required',
            'razon_social'      => 'required',
            'guia'              => 'required',
            'almacen'           => 'required',
            'oc_proveedor'      => 'required',
            'orden_pedido'      => 'required',
            'moneda'            => 'required',
        ]);
        $datosingreso = request()->except('_token');
        Salida::insert($datosingreso);

        $almaceningreso = Salida::all();
        //return response()->json($datosingreso);
        return redirect()->route('admin.rutaSalidas.index', compact('almaceningreso'))->with('info', 'El registro de salida fue creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $almaceningreso = Salida::find($id);

        return view('admin.views_salidas.ver_mas', compact('almaceningreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $almaceningreso     = Salida::find($id);
        $moneda             = Tipo_moneda::pluck('moneda', 'moneda');
        return view('admin.views_salidas.edit', compact('moneda', 'almaceningreso'));
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
            'fabricante'        => 'required',
            'modelo'            => 'required',
            'categoria'         => 'required',
            'precio_costo'      => 'required',
            'lote'              => 'required',
            'unidad_medida'     => 'required',
            'unidades'          => 'required',
            'descripcion'       => 'required',
            'ruc_provee'        => 'required',
            'razon_social'      => 'required',
            'guia'              => 'required',
            'almacen'           => 'required',
            'oc_proveedor'      => 'required',
            'orden_pedido'      => 'required',
            'moneda'            => 'required',
        ]);
        $datosingreso = request()->except('_token', '_method');

        Salida::where('id', '=', $id)->update($datosingreso);
        $almaceningreso = Salida::all();
        //return response()->json($datosingreso);
        return redirect()->route('admin.rutaSalidas.index', compact('almaceningreso'))->with('info', 'El registro de salida fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Salida::destroy($id);

        $almaceningreso = Salida::all();
        return redirect()->route('admin.rutaSalidas.index', compact('almaceningreso'))->with('info', 'El registro de salida fue eliminado correctamente.');
    }
}
