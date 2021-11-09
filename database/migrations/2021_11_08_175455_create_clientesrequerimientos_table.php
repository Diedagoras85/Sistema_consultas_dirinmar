<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesrequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientesrequerimientos', function (Blueprint $table) {
            $table->unsignedBigInteger('IDCliente');
            $table->unsignedBigInteger('IDRequerimiento');
            $table->timestamps();

            $table->foreign('IDCliente')->references('id')->on('Clientes');
            $table->foreign('IDRequerimiento')->references('id')->on('Requerimientos');
            $table->primary(['IDCliente','IDRequerimiento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Clientesrequerimientos');
    }
}
