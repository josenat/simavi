<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = "tbl_paquete_viaje";


    protected $fillable = [
        'tipo', 'costo', 'descripcion'         
    ];
}   