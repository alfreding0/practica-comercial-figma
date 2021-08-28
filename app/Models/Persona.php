<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';

    public function usuario(){
        return $this->hasMany(User::class, 'id_persona', 'id');
    }
}
