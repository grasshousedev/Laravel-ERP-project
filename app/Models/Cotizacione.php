<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacione extends Model
{
    use HasFactory;
    //Relacion uno a muchos (inversa)
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function cli_productos()
    {
        return $this->hasMany('App\Models\Cliente_producto');
    }
}