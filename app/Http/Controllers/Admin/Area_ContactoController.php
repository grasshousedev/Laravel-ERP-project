<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area_provee_cliente;

class Area_ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas_contacto = Area_provee_cliente::all();
        return view('admin.area_contacto.index', compact('areas_contacto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.area_contacto.create');
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
            'area'        => 'required',
        ]);

        $contacto = request()->except('_token');
        Area_provee_cliente::insert($contacto);
        //return response()->json($estado_entregas); 

        $areas_contacto = Area_provee_cliente::all();
        return redirect()->route('admin.areacontacto.index', compact('areas_contacto'))->with('info', 'El area de contacto fue registrado correctamente.');
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
        $areas_contacto = Area_provee_cliente::find($id);
        return view('admin.area_contacto.edit', compact('areas_contacto'));
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
            'area'        => 'required',
        ]);

        $contacto = request()->except('_token', '_method');

        Area_provee_cliente::where('id','=',$id)->update($contacto);        
        //return response()->json($estado_entregas); 

        $areas_contacto = Area_provee_cliente::findOrFail($id);
        return redirect()->route('admin.areacontacto.index', compact('areas_contacto'))->with('info', 'El area de contacto fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Area_provee_cliente::destroy($id);
        return redirect()->route('admin.areacontacto.index')->with('info', 'El area de contacto fue eliminado correctamente.');
    }
}
