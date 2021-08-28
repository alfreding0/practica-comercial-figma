<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $table = 'detalle_venta';

    public function producto(){                                     //llave foranea         //llave primaria
        return $this->belongsTo(Producto::class, 'id_producto', 'cod_producto');
    }

    public function venta(){
        return $this->belongsTo(Venta::class, 'id_venta', 'cod_venta');
    }
}
