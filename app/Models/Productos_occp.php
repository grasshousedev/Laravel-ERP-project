<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos_occp extends Model
{
    use HasFactory;
    public function oc_proveedores()
    {
        return $this->belongsTo('App\Models\OccProveedore');
    }
}
