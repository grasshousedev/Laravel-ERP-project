<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente_producto extends Model
{
    use HasFactory;

    public function cotizacion()
    {
        return $this->belongsTo('App\Models\Cotizacione');
    }

}
