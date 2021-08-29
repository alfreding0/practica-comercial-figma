<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'venta';

    protected $primaryKey = 'cod_venta';

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function persona(){
        return $this->belongsTo(Persona::class, 'id_persona', 'id');
    }

    public function detalle_venta(){                            //llave foranea         //llave primaria
        return $this->hasMany(DetalleVenta::class, 'id_venta', 'cod_venta');
    }
}
