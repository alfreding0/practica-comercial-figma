<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function create($cod_venta){
        $productos = Producto::all();
//        return view('venta.detalle.create', ['productos'=>$productos, 'cod_venta'=>$cod_venta]);
        return view('venta.detalle.create', compact('productos', 'cod_venta'));
    }

    public function store(Request $request, $cod_venta){
        $cod_producto = $request->input('producto');
        $producto = Producto::findOrFail($cod_producto);

        $detalle = new DetalleVenta();
        $detalle->id_venta = $cod_venta;
        $detalle->id_producto =  $cod_producto;
        $detalle->cantidad = $request->input('cantidad');
        $detalle->precio_unitario = $producto->precio;
        $detalle->save();

        $venta = Venta::findOrFail($cod_venta);
        $venta->total = $venta->total + ($detalle->cantidad*$detalle->precio_unitario);
        $venta->save();

        return redirect()->route('venta.show', [$cod_venta]);
    }

    public function destroy($id){
        $detalle = DetalleVenta::findOrFail($id);
        $detalle->delete();

        $venta = Venta::findOrFail($detalle->id_venta);
        $venta->total = $venta->total - ($detalle->cantidad * $detalle->precio_unitario);
        $venta->save();

        return redirect()->route('venta.show', [$venta->cod_venta]);
    }
}
