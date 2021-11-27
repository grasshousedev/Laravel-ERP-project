<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OccCliente;
use App\Models\Cliente;

class OccClientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occClientes = OccCliente::all();
        return view('admin.occClientes.index', compact('occClientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.occClientes.create');
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
            'ruc'            => 'required',
            'razon'          => 'required',
            'descripcion'    => 'required',
            'cot'            => 'required',
            'tiempo_entrega' => 'required',
            'archivo'        => 'required',
        ]);
        $occC = request()->except('_token');
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo');
            $archivo->move(public_path().'/uploads/OC-CLIENTES/', $occC['archivo']->getClientOriginalName());
            $occC['archivo'] = $archivo->getClientOriginalName();
        }
        OccCliente::insert($occC);
        //return response()->json($occC);
        //dd($request);
        $occClientes = OccCliente::all();
        return redirect()->route('admin.occClientes.index', compact('occClientes'))->with('info', 'Fue creado correctamente.');
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
        $occClientes = OccCliente::find($id);

        return view('admin.occClientes.edit', compact('occClientes'));
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
            'ruc'            => 'required',
            'razon'          => 'required',
            'descripcion'    => 'required',
            'cot'            => 'required',
            'tiempo_entrega' => 'required',
            'archivo'        => 'required',
        ]);

        $occC = request()->except('_token', '_method');
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo');
            $archivo->move(public_path().'/uploads/', $occC['archivo']->getClientOriginalName());
            $occC['archivo'] = $archivo->getClientOriginalName();
        }

        OccCliente::where('id','=',$id)->update($occC);
        
        $occClientes = OccCliente::findOrFail($id);

        return redirect()->route('admin.occClientes.index', $occClientes)->with('info', 'Se actualizo correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OccCliente::destroy($id);

        $occClientes = OccCliente::all();
        return redirect()->route('admin.occClientes.index', compact('occClientes'))->with('info', 'Se elimino correctamente.');
    }

    public function searchClientes()
    {
        $cliente     = Cliente::all();
        return response()->json($cliente);
    }
}
