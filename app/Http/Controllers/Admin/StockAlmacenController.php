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
                    $item['estado'] = "1";
                    $item->save();
                }                
                
                $par = array_merge($par, array('id_ingreso' => $id_ingreso, 'unidades' => $total_unidades));
                array_push($totales_array, $par);
                
            }
        
            foreach ($totales_array as $salida){
                $row = Almacen_ingreso::find($salida['id_ingreso']);
                $stock = new Stock;
                $stock->codigo = $row->codigo;
                $stock->nombre = $row->nombre;
                $stock->fabricante = $row->fabricante;
                $stock->modelo = $row->modelo;
                $stock->categoria = $row->categoria;
                $stock->precio_costo = $row->precio_costo;
                $stock->lote = $row->lote;
                $stock->unidad_medida = $row->unidad_medida;
                $stock->unidades = $row->unidades - $salida['unidades'];
                $stock->descripcion = $row->descripcion;
                $stock->ruc_provee = $row->ruc_provee;
                $stock->razon_social = $row->razon_social;
                $stock->guia = $row->guia;
                $stock->almacen = $row->almacen;
                $stock->oc_proveedor = $row->oc_proveedor;
                $stock->orden_pedido = $row->orden_pedido;
                $stock->moneda = $row->moneda;
                $stock->serial = $row->serial;
                $stock->fecha_ingreso = $row->fecha_ingreso;
                $stock->hora_ingreso = $row->hora_ingreso;
                $stock->id_ingreso = $row->id;
                $stock->save();
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
