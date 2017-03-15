<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected $table = "tbl_hospedaje";


    protected $fillable = [
        'nombre', 'telefono', 'direccion' 
    ];    
}
