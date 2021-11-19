<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnidadesMedida;

class UnidadesMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_registros = UnidadesMedida::all();
        return view('admin.views_unidades_medida.index', compact('all_registros'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views_unidades_medida.create');
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
            'unidad'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token');
        UnidadesMedida::insert($nuevo_registro);

        $all_registros = UnidadesMedida::all();
        return redirect()->route('admin.rutaUnidadesMedida.index', compact('all_registros'))->with('info', 'El almacen fue registrado correctamente.');
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
        $registro = UnidadesMedida::find($id);
        return view('admin.views_unidades_medida.edit', compact('registro'));
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
            'unidad'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token', '_method');

        UnidadesMedida::where('id','=',$id)->update($nuevo_registro);
        //return response()->json($estado_entregas); 

        $all_registros = UnidadesMedida::findOrFail($id);
        return redirect()->route('admin.rutaUnidadesMedida.index', compact('all_registros'))->with('info', 'La unidad de medida fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UnidadesMedida::destroy($id);
        return redirect()->route('admin.rutaUnidadesMedida.index')->with('info', 'La unidad de medida fue eliminada correctamente.');
    }
}