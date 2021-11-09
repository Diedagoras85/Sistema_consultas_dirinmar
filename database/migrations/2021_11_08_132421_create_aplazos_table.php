<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplazosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aplazos', function (Blueprint $table) {
            $table->unsignedBigInteger('IDRequerimiento');
            $table->dateTime('FCAplazo');
            $table->longText('GLRespuesta');
            $table->tinyInteger('NRHh');
            $table->tinyInteger('NRDiaatraso');
            $table->dateTime('FCExpiracion')->nullable();
            $table->timestamps();

            $table->foreign('IDRequerimiento')->references('id')->on('Requerimientos');
            $table->primary('IDRequerimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Aplazos');
    }
}
