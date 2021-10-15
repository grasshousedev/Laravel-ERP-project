<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.create');
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
            'cod_prod' => 'required',
            'fabri_prod' => 'required',
            'model_prod' => 'required',
            'tipo_prod' => 'required',
            'prec_prod' => 'required',
            'vent_prod' => 'required',
            'unidades_prod' => 'required',
        ]);

        $datosprod = request()->except('_token');
        Producto::insert($datosprod);
        //return response()->json($datosprod);
        $productos = Producto::all();
        return redirect()->route('admin.productos.index', compact('productos'))->with('info', 'El producto fue creado correctamente.');
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
        $producto = Producto::find($id);
        return view('admin.productos.edit', compact('producto'));
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
            'cod_prod' => 'required',
            'fabri_prod' => 'required',
            'model_prod' => 'required',
            'tipo_prod' => 'required',
            'prec_prod' => 'required',
            'vent_prod' => 'required',
            'unidades_prod' => 'required',
        ]);

        $datosprod = request()->except('_token', '_method');
        
        Producto::where('id','=',$id)->update($datosprod);
        $producto = Producto::findOrFail($id);
        return redirect()->route('admin.productos.edit', $producto)->with('info', 'El producto fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);

        $productos = Producto::all();
        return redirect()->route('admin.productos.index', compact('productos'))->with('info', 'El producto fue eliminado correctamente.');
    }
}
