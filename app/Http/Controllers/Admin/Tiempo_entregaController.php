<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiempo_entrega;

class Tiempo_entregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiempoentregas = Tiempo_entrega::all();
        return view('admin.tiempo_entrega.index', compact('tiempoentregas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tiempo_entrega.create');
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
            'entrega'        => 'required',
        ]);

        $Tiempo_entrega = request()->except('_token');
        Tiempo_entrega::insert($Tiempo_entrega);
        //return response()->json($estado_entregas); 

        $tiempoentregas = Tiempo_entrega::all();
        return redirect()->route('admin.tiempoentrega.index', compact('tiempoentregas'))->with('info', 'El tiempo de entrega fue registrado correctamente.');
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
        $tiempoentregas = Tiempo_entrega::find($id);
        return view('admin.tiempo_entrega.edit', compact('tiempoentregas'));
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
            'entrega'        => 'required',
        ]);

        $Tiempo_entrega = request()->except('_token', '_method');

        Tiempo_entrega::where('id','=',$id)->update($Tiempo_entrega);        
        //return response()->json($estado_entregas); 

        $tiempoentregas = Tiempo_entrega::findOrFail($id);
        return redirect()->route('admin.tiempoentrega.index', compact('tiempoentregas'))->with('info', 'El tiempo de entrega fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tiempo_entrega::destroy($id);
        return redirect()->route('admin.tiempoentrega.index')->with('info', 'El tiempo de entrega fue eliminado correctamente.');
    }
}
