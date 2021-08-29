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

    public function create(){
        return view('persona.create');
    }

    public function store(Request $request){
        $persona = new Persona();
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->direccion = $request->input('direccion');
        $persona->telefono = $request->input('telefono');
        $persona->save();

        return redirect()->route('persona.index');
    }

    public function edit($id){
        $persona = Persona::findOrFail($id);
        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, $id){
        $persona = Persona::findOrFail($id);
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->direccion = $request->input('direccion');
        $persona->telefono = $request->input('telefono');
        $persona->save();

        return redirect()->route('persona.index');
    }

    public function destroy($id){
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return redirect()->route('persona.index');
    }
}
