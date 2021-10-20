<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cotizacione;
use PDF;

class PDFController extends Controller
{
    function downloadPDF_ventas($id)
    {
        $venta = $this->venta->get();
        $cotizacion = Cotizacione::find($id);
        $pdf = PDF::loadView('ventas.pdf', compact('cotizacion'));
        return $pdf->download('archivo.pdf');
    }
}
