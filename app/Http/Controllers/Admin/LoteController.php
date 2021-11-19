<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lote;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_registros = Lote::all();
        return view('admin.views_lotes.index', compact('all_registros'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views_lotes.create');
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
        Lote::insert($nuevo_registro);

        $all_registros = Lote::all();
        return redirect()->route('admin.rutaLote.index', compact('all_registros'))->with('info', 'El lote fue registrado correctamente.');
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
        $registro = Lote::find($id);
        return view('admin.views_lotes.edit', compact('registro'));
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

        Lote::where('id','=',$id)->update($nuevo_registro);
        //return response()->json($estado_entregas); 

        $all_registros = Lote::findOrFail($id);
        return redirect()->route('admin.rutaLote.index', compact('all_registros'))->with('info', 'El lote fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lote::destroy($id);
        return redirect()->route('admin.rutaLote.index')->with('info', 'El lote fue eliminado correctamente.');
    }
}