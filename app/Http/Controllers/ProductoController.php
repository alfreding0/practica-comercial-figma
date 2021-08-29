<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    public function create(){
        return view('producto.create');
    }

    public function store(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->save();

        return redirect()->route('producto.index');
    }

    public function edit($id){
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->save();

        return redirect()->route('producto.index');
    }

    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index');
    }
}
