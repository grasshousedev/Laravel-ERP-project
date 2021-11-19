<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelo;

class ModeloProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::all();
        return view('admin.views_modelos.index', compact('modelos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views_modelos.create');
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
            'modelo'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token');
        Modelo::insert($nuevo_registro);
        //return response()->json($estado_entregas); 

        $modelos = Modelo::all();
        return redirect()->route('admin.modeloProducto.index', compact('modelos'))->with('info', 'El modelo fue registrado correctamente.');
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
        $modelos = Modelo::find($id);
        return view('admin.views_modelos.edit', compact('modelos'));
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
            'modelo'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token', '_method');

        Modelo::where('id','=',$id)->update($nuevo_registro);
        //return response()->json($estado_entregas); 

        $modelos = Modelo::findOrFail($id);
        return redirect()->route('admin.modeloProducto.index', compact('modelos'))->with('info', 'El modelo fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Modelo::destroy($id);
        return redirect()->route('admin.modeloProducto.index')->with('info', 'El modelo fue eliminado correctamente.');
    }
}