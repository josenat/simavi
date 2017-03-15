<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = "tbl_pago";


    protected $fillable = [
        'cedula', 'monto', 'metodo', 'fecha', 'num_recibo', 'banco', 'admin', 'id_usuario' 
    ];

} 
