<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //Relacion uno a muchos
    public function cotizaciones()
    {
        return $this->hasMany('App\Models\Cotizacione');
    }

}




