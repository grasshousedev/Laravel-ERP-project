<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.create');
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
            'ruc'           => 'required',
            'razon_social'  => 'required',
            'direccion'     => 'required',
            'contacto'      => 'required',
            'celular1'      => 'required',
            'celular2'      => '',
            'email1'        => 'required',
            'email2'        => '',
            'paginaweb'     => '',
            'area'          => 'required',
            'estado'        => 'required',
            'asignado'      => 'required',
        ]);

        $datoscli = request()->except('_token');
        Cliente::insert($datoscli);
        //return response()->json($datoscli);

        $clientes = Cliente::all();
        return redirect()->route('admin.clientes.index', compact('clientes'))->with('info', 'El cliente fue registrado correctamente.');
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
        $clientes = Cliente::find($id);
        return view('admin.clientes.edit', compact('clientes'));
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
            'ruc'           => 'required',
            'razon_social'  => 'required',
            'direccion'     => 'required',
            'contacto'      => 'required',
            'celular1'      => 'required',
            'celular2'      => '',
            'email1'        => 'required',
            'email2'        => '',
            'paginaweb'     => '',
            'area'          => 'required',
            'estado'        => 'required',
            'asignado'      => 'required',
        ]);

        $datoscli = request()->except('_token', '_method');
        
        Cliente::where('id','=',$id)->update($datoscli);
        $clientes = Cliente::findOrFail($id);
        return redirect()->route('admin.clientes.index', $clientes)->with('info', 'El cliente fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);

        $clientes = Cliente::all();
        return redirect()->route('admin.clientes.index', compact('clientes'))->with('info', 'El cliente fue eliminado correctamente.');
    }
}
