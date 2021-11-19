<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_registros = Categoria::all();
        return view('admin.views_categorias.index', compact('all_registros'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views_categorias.create');
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
            'categoria'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token');
        Categoria::insert($nuevo_registro);

        $all_registros = Categoria::all();
        return redirect()->route('admin.rutaCategoria.index', compact('all_registros'))->with('info', 'La categoria fue registrado correctamente.');
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
        $registro = Categoria::find($id);
        return view('admin.views_categorias.edit', compact('registro'));
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
            'categoria'        => 'required',
        ]);

        $nuevo_registro = request()->except('_token', '_method');

        Categoria::where('id','=',$id)->update($nuevo_registro);
        //return response()->json($estado_entregas); 

        $all_registros = Categoria::findOrFail($id);
        return redirect()->route('admin.rutaCategoria.index', compact('all_registros'))->with('info', 'La categoria fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::destroy($id);
        return redirect()->route('admin.rutaCategoria.index')->with('info', 'La categoria fue eliminada correctamente.');
    }
}