<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    protected $table = "tbl_viajero";


    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'sexo', 'edad', 'estado_pago', 'telefono', 'fecha_nac','email', 'permiso',
		'id_paquete', 'id_transporte', 'id_habitacion', 'id_comida'        
    ];
}