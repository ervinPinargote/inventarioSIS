<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    //
    protected $fillable = [
        'nombres', 'apellidos', 'fecha_Nac','telefono','direccion','correo',
    ];
}
