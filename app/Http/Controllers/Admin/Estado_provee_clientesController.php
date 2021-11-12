<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estado_provee_cliente;

class Estado_provee_clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado_clientes = Estado_provee_cliente::all(); 
        return view('admin.estado_provee_clientes.index', compact('estado_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estado_provee_clientes.create');
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
            'estado'        => 'required',
        ]);

        $expiracion = request()->except('_token');
        Estado_provee_cliente::insert($expiracion);
        //return response()->json($estado_entregas); 

        $expiraciones = Estado_provee_cliente::all();
        return redirect()->route('admin.estadocliente.index', compact('expiraciones'))->with('info', 'El estado fue registrado correctamente.');
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
        $expiraciones = Estado_provee_cliente::find($id);
        return view('admin.estado_provee_clientes.edit', compact('expiraciones'));
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
            'estado'        => 'required',
        ]);

        $expiracion = request()->except('_token', '_method');

        Estado_provee_cliente::where('id','=',$id)->update($expiracion);        
        //return response()->json($estado_entregas); 

        $expiraciones = Estado_provee_cliente::findOrFail($id);
        return redirect()->route('admin.estadocliente.index', compact('expiraciones'))->with('info', 'El estado fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estado_provee_cliente::destroy($id);
        return redirect()->route('admin.tiempoexpiracion.index')->with('info', 'El estado fue eliminado correctamente.');
    }
}
