<?php

use App\Http\Controllers\PersonaController;
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

Route::group(['prefix'=>'cliente'], function (){
    Route::get('/', [ProductoC::class, 'index'])->name('cliente.index'); //para mostrar todos los registros de una tabla
    Route::get('/create', [ProductoC::class, 'create'])->name('cliente.create');   //redirigir a una vista que sirfve para llenar datos
    Route::post('/', [ProductoC::class, 'store'])->name('cliente.store');  //guardar los datos llenados
    Route::get('/{id}', [ProductoC::class, 'show'])->name('cliente.show'); //mostrar detalles de una persona
    Route::get('/{id}/edit', [ProductoC::class, 'edit'])->name('cliente.edit'); ////redirigir a una vista que sirve para editar datos
    Route::put('/{id}', [ProductoC::class, 'update'])->name('cliente.update'); //actualizar los datos llenados
    Route::get('/{id}/destroy', [ProductoC::class, 'destroy'])->name('cliente.destroy'); //eliminar una persona
});
