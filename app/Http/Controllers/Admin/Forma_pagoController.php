<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forma_pago;

class Forma_pagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formapago = Forma_pago::all();
        return view('admin.forma_pago.index', compact('formapago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forma_pago.create');
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
            'tipo_pago'        => 'required',
        ]);

        $forma_pago = request()->except('_token');
        Forma_pago::insert($forma_pago);
        //return response()->json($estado_entregas); 

        $formapago = Forma_pago::all();
        return redirect()->route('admin.formapago.index', compact('formapago'))->with('info', 'La forma de pago fue registrado correctamente.');
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
        $formapago = Forma_pago::find($id);
        return view('admin.forma_pago.edit', compact('formapago'));
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
            'tipo_pago'        => 'required',
        ]);

        $forma_pago = request()->except('_token', '_method');

        Forma_pago::where('id','=',$id)->update($forma_pago);        
        //return response()->json($estado_entregas); 

        $formapago = Forma_pago::findOrFail($id);
        return redirect()->route('admin.formapago.index', compact('formapago'))->with('info', 'La forma de pago fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Forma_pago::destroy($id);
        return redirect()->route('admin.formapago.index')->with('info', 'La forma de pago fue eliminada correctamente.');
    }
}

