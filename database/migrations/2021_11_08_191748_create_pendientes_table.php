<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendientes', function (Blueprint $table) {
            $table->unsignedBigInteger('IDDepto');
            $table->dateTime('FCActual');
            $table->tinyInteger('NRCantpend');
            $table->dateTime('FCExpiracion')->nullable();
            $table->timestamps();

            $table->foreign('IDDepto')->references('IDDepto')->on('Departamentos');
            $table->primary(['IDDepto','FCActual']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendientes');
    }
}
