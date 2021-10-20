<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function cotizaciones()
    {
        return $this->hasMany('App\Models\Cotizacione');
    }

}

//Relacion uno a muchos


