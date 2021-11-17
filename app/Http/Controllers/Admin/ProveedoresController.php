<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedore;
use App\Models\Estado_provee_cliente;
use App\Models\Estado_impresora;
use App\Models\Tipo_impresora;
use App\Models\Area_provee_cliente;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $proveedores = Proveedore::all();
        return view('admin.proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado      = Estado_provee_cliente::pluck('estado', 'estado');
        $area        = Area_provee_cliente::pluck('area', 'area');
        return view('admin.proveedores.create', compact('estado', 'area'));
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
            'ruc'           => 'required|unique:proveedores',
            'razon_social'  => 'required',
            'direccion'     => 'required',
            'contacto'      => 'required',
            'celular1'      => 'required',
            'celular2'      => '',
            'email1'        => 'required|unique:proveedores',
            'email2'        => '',
            'paginaweb'     => '',
            'estado'        => 'required',
        ]);

        $datosprovee = request()->except('_token');
        Proveedore::insert($datosprovee);
        //return response()->json($datosprovee);

        $proveedores = Proveedore::all();
        return redirect()->route('admin.proveedores.index', compact('proveedores'))->with('info', 'El proveedor fue registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedores     = Proveedore::find($id);
        return view('admin.proveedores.ver_mas', compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores = Proveedore::find($id);
        $area        = Area_provee_cliente::pluck('area', 'area');
        $estado      = Estado_provee_cliente::pluck('estado', 'estado');
        return view('admin.proveedores.edit', compact('proveedores', 'area', 'estado'));
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
            'ruc'           => 'required|unique:proveedores',
            'razon_social'  => 'required',
            'direccion'     => 'required',
            'contacto'      => 'required',
            'celular1'      => 'required',
            'celular2'      => '',
            'email1'        => 'required|unique:proveedores',
            'email2'        => '',
            'paginaweb'     => '',
            'area'          => 'required',
            'estado'        => 'required',
            'asignado'      => 'required',
        ]);

        $datosprovee = request()->except('_token', '_method');
        
        Proveedore::where('id','=',$id)->update($datosprovee);
        $proveedores = Proveedore::findOrFail($id);
        return redirect()->route('admin.proveedores.index', $proveedores)->with('info', 'El proveedor fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedore::destroy($id);

        $proveedores = Proveedore::all();
        return redirect()->route('admin.proveedores.index', compact('proveedores'))->with('info', 'El proveedor fue eliminado correctamente.');
    }
}
