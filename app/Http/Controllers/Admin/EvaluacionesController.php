<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedore;

class EvaluacionesController extends Controller
{
    public function index()
    {        
        $proveedores = Proveedore::all();
        return view('admin.proveedores.index', compact('proveedores'));
    }
}
