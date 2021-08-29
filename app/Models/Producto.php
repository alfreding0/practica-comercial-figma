<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $primaryKey = 'cod_producto';

    public function detalle_venta(){
        return $this->hasMany(DetalleVenta::class, 'id_producto', 'cod_producto');
    }
}
