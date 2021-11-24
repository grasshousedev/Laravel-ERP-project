<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guia;

class RegistroGuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reguistros_guias = Guia::all();
        return view('admin.views_guias.index', compact('reguistros_guias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views_guias.create');
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
            'ruc'               => 'required',
            'razon'             => 'required',
            'direccion'         => 'required',
            'fecha_llegada'     => 'required',
            'hora_llegada'      => 'required',
            'archivo'           => 'required',
            'oop'               => 'required',
            'numero_guia'       => 'required',
        ]);
        $guia = request()->except('_token');
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo');
            $archivo->move(public_path().'/uploads/REGISTRO-GUIAS/', $guia['archivo']->getClientOriginalName());
            $guia['archivo'] = $archivo->getClientOriginalName();
        }
        Guia::insert($guia);
        //return response()->json($guia);
        //dd($request);
        $reguistros_guias = Guia::all();
        return redirect()->route('admin.rutaGuia.index', compact('reguistros_guias'))->with('info', 'Fue creado correctamente.');
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
        $reguistros_guias = Guia::find($id);

        return view('admin.views_guias.edit', compact('reguistros_guias'));
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
            'ruc'               => 'required',
            'razon'             => 'required',
            'direccion'         => 'required',
            'fecha_llegada'     => 'required',
            'hora_llegada'      => 'required',
            'archivo'           => 'required',
            'oop'               => 'required',
            'numero_guia'       => 'required',
        ]);

        $guia = request()->except('_token');
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo');
            $archivo->move(public_path().'/uploads/REGISTRO-GUIAS/', $guia['archivo']->getClientOriginalName());
            $guia['archivo'] = $archivo->getClientOriginalName();
        }

        Guia::where('id','=',$id)->update($guia);
        
        $reguistros_guias = Guia::findOrFail($id);

        return redirect()->route('admin.rutaGuia.index', $reguistros_guias)->with('info', 'Se actualizo correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guia::destroy($id);

        $reguistros_guias = Guia::all();
        return redirect()->route('admin.rutaGuia.index', compact('reguistros_guias'))->with('info', 'Se elimino correctamente.');
    }
}
