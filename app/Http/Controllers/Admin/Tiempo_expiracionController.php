<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiempo_expiracione;

class Tiempo_expiracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expiraciones = Tiempo_expiracione::all();
        return view('admin.tiempo_expiracion.index', compact('expiraciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tiempo_expiracion.create');
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
            'expiracion'        => 'required',
        ]);

        $expiracion = request()->except('_token');
        Tiempo_expiracione::insert($expiracion);
        //return response()->json($estado_entregas); 

        $expiraciones = Tiempo_expiracione::all();
        return redirect()->route('admin.tiempoexpiracion.index', compact('expiraciones'))->with('info', 'El tiempo de expiracion fue registrado correctamente.');
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
        $expiraciones = Tiempo_expiracione::find($id);
        return view('admin.tiempo_expiracion.edit', compact('expiraciones'));
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
            'expiracion'        => 'required',
        ]);

        $expiracion = request()->except('_token', '_method');

        Tiempo_expiracione::where('id','=',$id)->update($expiracion);        
        //return response()->json($estado_entregas); 

        $expiraciones = Tiempo_expiracione::findOrFail($id);
        return redirect()->route('admin.tiempoexpiracion.index', compact('expiraciones'))->with('info', 'El tiempo de expiracion fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tiempo_expiracione::destroy($id);
        return redirect()->route('admin.tiempoexpiracion.index')->with('info', 'El tiempo de expiracion fue eliminado correctamente.');
    }
}
