<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable = [
        'Nombre_Articulo', 'color', 'talla','cantidad','categoria_id','proveedor_id','procedencia','precio','porcentajeG','ventaPublico','promocion_id',
    ];
}
