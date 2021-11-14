<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Condicione;

class CondicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condiciones = Condicione::all();
        return view('admin.condiciones.index', compact('condiciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.condiciones.create');
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
            'condiciones'        => 'required',
        ]);

        $condicion = request()->except('_token');
        Condicione::insert($condicion);
        //return response()->json($estado_entregas); 

        $condiciones = Condicione::all();
        return redirect()->route('admin.condiciones.index', compact('condiciones'))->with('info', 'La condicion fue registrada correctamente.');
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
        $condiciones = Condicione::find($id);
        return view('admin.condiciones.edit', compact('condiciones'));
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
            'condiciones'        => 'required',
        ]);

        $condicion = request()->except('_token', '_method');

        Condicione::where('id','=',$id)->update($condicion);        
        //return response()->json($estado_entregas); 

        $condiciones = Condicione::findOrFail($id);
        return redirect()->route('admin.condiciones.index', compact('condiciones'))->with('info', 'La condicion fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Condicione::destroy($id);
        return redirect()->route('admin.condiciones.index')->with('info', 'La condicion fue eliminada correctamente.');
    }
}
