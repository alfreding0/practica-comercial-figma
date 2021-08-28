<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(){
        $personas = Persona::all();  //select * from persona;
        return view('persona.index', compact('personas'));
    }
}
