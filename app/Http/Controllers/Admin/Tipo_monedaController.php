<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_moneda;

class Tipo_monedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_monedas = Tipo_moneda::all();
        return view('admin.tipo_moneda.index', compact('tipo_monedas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipo_moneda.create');
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
            'moneda'        => 'required',
        ]);

        $Tipo_moneda = request()->except('_token');
        Tipo_moneda::insert($Tipo_moneda);
        //return response()->json($estado_entregas); 

        $tipo_monedas = Tipo_moneda::all();
        return redirect()->route('admin.tipomoneda.index', compact('tipo_monedas'))->with('info', 'El tipo de moneda fue registrado correctamente.');
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
        $tipo_monedas = Tipo_moneda::find($id);
        return view('admin.tipo_moneda.edit', compact('tipo_monedas'));
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
            'moneda'        => 'required',
        ]);

        $Tipo_moneda = request()->except('_token', '_method');

        Tipo_moneda::where('id','=',$id)->update($Tipo_moneda);        
        //return response()->json($estado_entregas); 

        $tipo_monedas = Tipo_moneda::findOrFail($id);
        return redirect()->route('admin.tipomoneda.index', compact('tipo_monedas'))->with('info', 'El tipo de moneda fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipo_moneda::destroy($id);
        return redirect()->route('admin.tipomoneda.index')->with('info', 'El tipo de moneda fue eliminado correctamente.');
    }
}
