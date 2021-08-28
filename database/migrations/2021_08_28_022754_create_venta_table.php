<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id('cod_venta');
            $table->date('fecha');
            $table->float('total'); //porque puede tener decimal
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_persona');
            $table->timestamps();

            $table->foreign('id_cliente')
                ->references('id')
                ->on('cliente')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('id_persona')
                ->references('id')
                ->on('persona')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
