<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedore;

class EvaluacionesController extends Controller
{
    public function index()
    {        
        return view('admin.evaluaciones.index');
    }
}
