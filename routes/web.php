<?php

use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'persona'], function (){
    Route::get('/', [PersonaController::class, 'index'])->name('persona.index'); //para mostrar todos los registros de una tabla
    Route::get('/create', [PersonaController::class, 'create'])->name('persona.create');   //redirigir a una vista que sirfve para llenar datos
    Route::post('/', [PersonaController::class, 'store'])->name('persona.store');  //guardar los datos llenados
    Route::get('/{id}', [PersonaController::class, 'show'])->name('persona.show'); //mostrar detalles de una persona
    Route::get('/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit'); ////redirigir a una vista que sirve para editar datos
    Route::put('/{id}', [PersonaController::class, 'update'])->name('persona.update'); //actualizar los datos llenados
    Route::get('/{id}/destroy', [PersonaController::class, 'destroy'])->name('persona.destroy'); //eliminar una persona
});

Route::group(['prefix'=>'producto'], function (){
    Route::get('/', [ProductoController::class, 'index'])->name('producto.index');
    Route::get('/create', [ProductoController::class, 'create'])->name('producto.create');
    Route::post('/', [ProductoController::class, 'store'])->name('producto.store');
    Route::get('/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
    Route::put('/{id}', [ProductoController::class, 'update'])->name('producto.update');
    Route::get('/{id}/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy');
});


Route::group(['prefix'=>'venta'], function (){
    Route::get('/', [VentaController::class, 'index'])->name('venta.index');
    Route::get('/create', [VentaController::class, 'create'])->name('venta.create');
    Route::post('/', [VentaController::class, 'store'])->name('venta.store');
    Route::get('/{id}', [VentaController::class, 'show'])->name('venta.show');
    Route::get('/{id}/destroy', [VentaController::class, 'destroy'])->name('venta.destroy');

    Route::group(['prefix'=>'detalle'], function (){
        Route::get('/create/{cod_venta}', [DetalleVentaController::class, 'create'])->name('venta.detalle.create');
        Route::post('/{cod_venta}', [DetalleVentaController::class, 'store'])->name('venta.detalle.store');
        Route::get('/{id}/destroy', [DetalleVentaController::class, 'destroy'])->name('venta.detalle.destroy');
    });
});


Route::get('/test', function (){
//   $cliente = new \App\Models\Cliente();
//   $cliente->nombre_completo = 'Fernanda Rios';
//   $cliente->ci = '235234';
//   $cliente->celular = '7086987';
//   $cliente->genero = 'M';
//   $cliente->save();

    $cliente = new \App\Models\Persona();
    $cliente->nombre = 'Jessica';
    $cliente->apellido = 'Jordan';
    $cliente->direccion = 'Camiri #2';
    $cliente->telefono = '70928352';
    $cliente->save();

   return $cliente;
});
