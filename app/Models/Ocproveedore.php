<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocproveedore extends Model
{
    use HasFactory;
    public function proveedor()
    {
        return $this->belongsTo('App\Models\Proveedore');
    }
}
