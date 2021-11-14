<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Pie_pagina;

class Pie_PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piepaginas = Pie_pagina::all();
        return view('admin.pie_pagina.index', compact('piepaginas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pie_pagina.create');
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
            'pie_pagina'        => 'required',
        ]);

        $piepagina = request()->except('_token');
        Pie_pagina::insert($piepagina);
        //return response()->json($estado_entregas); 

        $piepaginas = Pie_pagina::all();
        return redirect()->route('admin.piedepagina.index', compact('piepaginas'))->with('info', 'El pie de pagina fue registrado correctamente.');
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
        $piepaginas = Pie_pagina::find($id);
        return view('admin.pie_pagina.edit', compact('piepaginas'));
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
            'pie_pagina'        => 'required',
        ]);

        $piepagina = request()->except('_token', '_method');

        Pie_pagina::where('id','=',$id)->update($piepagina);        
        //return response()->json($estado_entregas); 

        $piepaginas = Pie_pagina::findOrFail($id);
        return redirect()->route('admin.piedepagina.index', compact('piepaginas'))->with('info', 'El pie de pagina fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pie_pagina::destroy($id);
        return redirect()->route('admin.piedepagina.index')->with('info', 'El pie de pagina fue eliminado correctamente.');
    }
}
