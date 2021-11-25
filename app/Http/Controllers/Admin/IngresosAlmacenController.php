<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Almacen_ingreso;
use App\Models\Tipo_moneda;
use App\Models\Almacene;
use App\Models\Modelo;
use App\Models\Fabricante;
use App\Models\Categoria;
use App\Models\Lote;
use App\Models\UnidadesMedida;

use App\Classes\CustomCodeGenerator;


class IngresosAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almaceningreso = Almacen_ingreso::all();
        return view('admin.almacenIngresos.index', compact('almaceningreso'));
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

        return view('admin.almacenIngresos.create', compact('moneda', 'almacen', 'modelo', 'fabricante', 'categoria', 'lote', 'unidades_med'));
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
            'serial'            => 'required',
            'nombre'        => 'required',
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
            'fecha_ingreso'            => 'required',
            'hora_ingreso'            => 'required',
        ]);

        $datosingreso = request()->except('_token');
        Almacen_ingreso::insert($datosingreso);

        $last = Almacen_ingreso::all()->last();
        $last = isset($last) ? $last : 0;

        $codigo = new CustomCodeGenerator("ALM", $last->id - 1); #resta uno porque dentro de la clase sumará 1
        $datosingreso['codigo'] = $codigo->generar;
        Almacen_ingreso::where('id', '=', $last->id)->update($datosingreso);

        $almaceningreso = Almacen_ingreso::all();
        //return response()->json($datosingreso);
        return redirect()->route('admin.ingresosAlmacen.index', compact('almaceningreso'))->with('info', 'El registro de ingreso fue creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $almaceningreso = Almacen_ingreso::find($id);

        return view('admin.almacenIngresos.ver_mas', compact('almaceningreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $almaceningreso     = Almacen_ingreso::find($id);
        $moneda             = Tipo_moneda::pluck('moneda', 'moneda');
        $fabricante     = Fabricante::pluck('fabricante', 'fabricante');
        $almacen        = Almacene::pluck('almacen', 'almacen');
        $modelo         = Modelo::pluck('modelo', 'modelo');
        $categoria      = Categoria::pluck('categoria', 'categoria');
        $lote           = Lote::pluck('lote', 'lote');
        $unidades_med   = UnidadesMedida::pluck('unidad', 'unidad');

        return view('admin.almacenIngresos.edit', compact('almaceningreso', 'moneda', 'almacen', 'modelo', 'fabricante', 'categoria', 'lote', 'unidades_med'));
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
            'fabricante'        => 'required',
            'nombre'        => 'required',
            'serial'            => 'required',
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
            'fecha_ingreso'            => 'required',
            'hora_ingreso'            => 'required',
        ]);
        $datosingreso = request()->except('_token', '_method', 'codigo');

        Almacen_ingreso::where('id', '=', $id)->update($datosingreso);
        $almaceningreso = Almacen_ingreso::all();
        //return response()->json($datosingreso);
        return redirect()->route('admin.ingresosAlmacen.index', compact('almaceningreso'))->with('info', 'El registro de ingreso fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Almacen_ingreso::destroy($id);

        $almaceningreso = Almacen_ingreso::all();
        return redirect()->route('admin.ingresosAlmacen.index', compact('almaceningreso'))->with('info', 'El registro de ingreso fue eliminado correctamente.');
    }
}
