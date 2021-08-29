<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $ventas = Venta::all();
        return view('venta.index', compact('ventas'));
    }

    public function create(){
        $clientes = Cliente::all();
        return view('venta.create', compact('clientes'));
    }

    public function store(Request $request){
        $venta = new Venta();
        $venta->fecha = now();
        $venta->total = 0.00;
        $venta->id_cliente = $request->input('cliente');
        $venta->id_persona = '7';  //por modificar
        $venta->save();

        return redirect()->route('venta.show', [$venta->cod_venta]);
    }

    public function show($id){
        $venta = Venta::findOrFail($id);
        return view('venta.show', compact('venta'));
    }

    public function destroy($id){
        $venta = Venta::findOrFail($id);
        $venta->delete();

        return redirect()->route('venta.index');
    }
}
