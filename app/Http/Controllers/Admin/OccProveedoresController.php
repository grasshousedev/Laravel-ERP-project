<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estadoproveedor;
use App\Models\Forma_pago;
use App\Models\Tiempo_entrega;
use App\Models\Tiempo_expiracione;
use App\Models\Tipo_moneda;
use App\Models\User;
use App\Models\Ocproveedore;
use App\Models\Proveedore;
use App\Models\Productos_occp;

class OccProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orden_compras = Ocproveedore::all();
        return view('admin.occProveedores.index', compact('orden_compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado         = Estadoproveedor::pluck('estado', 'estado');
        $forma_pago     = Forma_pago::pluck('tipo_pago', 'tipo_pago');
        $tiempo_entrega = Tiempo_entrega::pluck('entrega', 'entrega');
        $expiracion     = Tiempo_expiracione::pluck('expiracion', 'expiracion');
        $moneda         = Tipo_moneda::pluck('moneda', 'moneda');
        $users          = User::pluck('name', 'name');

        return view('admin.occProveedores.create', compact('estado', 'expiracion', 'forma_pago', 'moneda', 'tiempo_entrega', 'users'));
    }

    public function search()
    {
        $proveedor     = Proveedore::all();
        return response()->json($proveedor);
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
            'ruc'               => 'required',
            'responsable'       => 'required',
            'tiempo_entrega'    => 'required',
            'contacto'          => 'required',
            'estado'            => 'required',
            'moneda'            => 'required',
            'razon_social'      => 'required',
            'direccion'         => 'required',
            'cot_proveedor'     => '',
            'proveedor_id'      => 'required',
        ]);

        $datosOcp = request()->except('_token');
        Ocproveedore::insert($datosOcp);
        $orden_compras = Ocproveedore::all();
        //return response()->json($datosOcp);
        return redirect()->route('admin.occProveedores.index', compact('orden_compras'))->with('info', 'La orden de compra fue creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orden_compras = Ocproveedore::find($id);

        $producto = Productos_occp::where('oc_proveedor_id', '=', $orden_compras->id)->get();


        return view('admin.occProveedores.ver_mas', compact('orden_compras', 'producto'));
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
        Ocproveedore::destroy($id);

        $orden_compras = Ocproveedore::all();
        return redirect()->route('admin.occProveedores.index', compact('orden_compras'))->with('info', 'Se elimino correctamente.');
    }
}

