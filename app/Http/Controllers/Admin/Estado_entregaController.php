<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estado_entrega;

class Estado_entregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado_entregas = estado_entrega::all(); 
        return view('admin.estado_entrega.index', compact('estado_entregas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estado_entrega.create');
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

        $estado_entrega = request()->except('_token');
        estado_entrega::insert($estado_entrega);
        //return response()->json($estado_entregas); 

        $estado_entregas = estado_entrega::all();
        return redirect()->route('admin.estadoentrega.index', compact('estado_entregas'))->with('info', 'El estado fue registrado correctamente.');
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
        $estado_entregas = estado_entrega::find($id); 
        return view('admin.estado_entrega.edit', compact('estado_entregas'));
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

        $estado_entrega = request()->except('_token', '_method');

        estado_entrega::where('id','=',$id)->update($estado_entrega);        
        //return response()->json($estado_entregas); 

        $estado_entregas = estado_entrega::findOrFail($id);
        return redirect()->route('admin.estadoentrega.index', compact('estado_entregas'))->with('info', 'El estado fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        estado_entrega::destroy($id);

        $estado_entregas = estado_entrega::all();
        return redirect()->route('admin.estadoentrega.index', compact('estado_entregas'))->with('info', 'El estado fue eliminado correctamente.');
    }
}
