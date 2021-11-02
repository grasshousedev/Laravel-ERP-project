<?php

namespace App\Classes;

class CustomCodeGenerator
{
    function __construct($prefix="COD", $last_id=0, $size=6)
    {
        $this->id = $last_id + 1;
        $this->prefix = $prefix;
        $this->size = $size;
        $this->generar = $this->generate();
    }

    function generate()
    {
        $ceros = "";
        $size = strlen($this->prefix) + strlen((string)($this->id));

        if($size < $this->size){
            $ceros = "0";
            $diferencia = abs($size - $this->size);

            for ($i=0; $i < ($diferencia - 1); $i++) { 
                $ceros = $ceros . "0";
            }
        }
        
        return $this->prefix . $ceros . $this->id;
    }
}