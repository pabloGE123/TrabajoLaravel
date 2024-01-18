<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_camiseta');
            $table->string('dni_cliente',9);
            $table->index('dni_cliente');
            $table->foreign('id_camiseta')->references('id')->on('camisetas');
            $table->foreign('dni_cliente')->references('dni')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_venta');
    }
};
