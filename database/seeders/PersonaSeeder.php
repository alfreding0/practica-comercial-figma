<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = new Persona();
        $persona->nombre = 'Administrador';
        $persona->apellido = 'del sistema';
        $persona->direccion = 'administracion@gmail.com';
        $persona->telefono = '9083752';
        $persona->save();
    }
}
