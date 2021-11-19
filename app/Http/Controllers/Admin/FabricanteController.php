<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fabricante;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Fabricante::all();
        return view('admin.views_fabricantes.index', compact('modelos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views_fabricantes.create');
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
        Fabricante::insert($nuevo_registro);
        //return response()->json($estado_entregas); 

        $modelos = Fabricante::all();
        return redirect()->route('admin.rutaFabricante.index', compact('modelos'))->with('info', 'El modelo fue registrado correctamente.');
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
        $modelos = Fabricante::find($id);
        return view('admin.views_fabricantes.edit', compact('modelos'));
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

        Fabricante::where('id','=',$id)->update($nuevo_registro);
        //return response()->json($estado_entregas); 

        $modelos = Modelo::findOrFail($id);
        return redirect()->route('admin.rutaFabricante.index', compact('modelos'))->with('info', 'La ruta fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fabricante::destroy($id);
        return redirect()->route('admin.rutaFabricante.index')->with('info', 'La ruta fue eliminada correctamente.');
    }
}