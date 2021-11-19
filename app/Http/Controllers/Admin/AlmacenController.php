<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlmacenModel;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_registros = AlmacenModel::all();
        return view('admin.views_almacenes.index', compact('all_registros'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views_almacenes.create');
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
            'lote'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token');
        AlmacenModel::insert($nuevo_registro);

        $all_registros = AlmacenModel::all();
        return redirect()->route('admin.rutaAlmacen.index', compact('all_registros'))->with('info', 'El almacen fue registrado correctamente.');
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
        $registro = AlmacenModel::find($id);
        return view('admin.views_almacenes.edit', compact('registro'));
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
            'lote'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token', '_method');

        AlmacenModel::where('id','=',$id)->update($nuevo_registro);
        //return response()->json($estado_entregas); 

        $all_registros = AlmacenModel::findOrFail($id);
        return redirect()->route('admin.rutaAlmacen.index', compact('all_registros'))->with('info', 'El almacen fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AlmacenModel::destroy($id);
        return redirect()->route('admin.rutaAlmacen.index')->with('info', 'El almacen fue eliminado correctamente.');
    }
}