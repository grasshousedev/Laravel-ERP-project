<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Salida;
use App\Models\Stock;
use App\Models\Almacen_ingreso;
use App\Classes\CustomCodeGenerator;

class StockAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //copiar ingresos
        Stock::truncate();
        $all_ingresos = Almacen_ingreso::all();
        foreach ($all_ingresos as $ingreso){
            $stock = new Stock;
            $stock->codigo = $ingreso->codigo;
            $stock->nombre = $ingreso->nombre;
            $stock->fabricante = $ingreso->fabricante;
            $stock->modelo = $ingreso->modelo;
            $stock->categoria = $ingreso->categoria;
            $stock->precio_costo = $ingreso->precio_costo;
            $stock->lote = $ingreso->lote;
            $stock->unidad_medida = $ingreso->unidad_medida;
            $stock->unidades = $ingreso->unidades;
            $stock->descripcion = $ingreso->descripcion;
            $stock->ruc_provee = $ingreso->ruc_provee;
            $stock->razon_social = $ingreso->razon_social;
            $stock->guia = $ingreso->guia;
            $stock->almacen = $ingreso->almacen;
            $stock->oc_proveedor = $ingreso->oc_proveedor;
            $stock->orden_pedido = $ingreso->orden_pedido;
            $stock->moneda = $ingreso->moneda;
            $stock->serial = $ingreso->serial;
            $stock->fecha_ingreso = $ingreso->fecha_ingreso;
            $stock->hora_ingreso = $ingreso->hora_ingreso;
            $stock->id_ingreso = $ingreso->id;
            $stock->save();
        }

        // Calcular unidades disponibles
        $salidas = Salida::where('estado','=','0')
                            ->get()
                            ->groupBy('id_ingreso');

        if($salidas->count() > 0){
            $totales_array = array();
            $par = array();
            
            foreach ($salidas as $salida){
                $total_unidades = 0;
                $id_ingreso = 0;
                
                foreach($salida as $item){
                    $id_ingreso = $item->id_ingreso;
                    $total_unidades += $item->unidades;
                    $item->save();
                }                
                
                $par = array_merge($par, array('id_ingreso' => $id_ingreso, 'unidades' => $total_unidades));
                array_push($totales_array, $par);
                
            }
            
            foreach ($totales_array as $salida){
                $row = Stock::where('id_ingreso', '=', $salida['id_ingreso'])->get()->first();
                $row->unidades = $row->unidades - $salida['unidades'];
                $row->save();
            }
        }
            
        $almaceningreso = Stock::all();
        return view('admin.views_stock.index', compact('almaceningreso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $almaceningreso = Stock::find($id);
        return view('admin.views_stock.ver_mas', compact('almaceningreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stock::destroy($id);

        $almaceningreso = Stock::all();
        return redirect()->route('admin.rutaStock.index', compact('almaceningreso'))->with('info', 'El registro fue eliminado correctamente.');
    }
}
