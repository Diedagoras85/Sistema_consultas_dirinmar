<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requerimientos', function (Blueprint $table) {
            $table->id();
            $table->string('CDSolicitud',150);
            $table->longText('GLRequerimiento');
            $table->unsignedBigInteger('IDClasificacion');
            $table->dateTime('FCIngreso');
            $table->dateTime('FCRespuesta');
            $table->unsignedBigInteger('IDFormaIngreso');
            $table->boolean('LGRespondido')->nullable();
            $table->tinyinteger('NRDiaatraso')->nullable();
            $table->longText('GLRespuesta')->nullable();
            $table->tinyInteger('NRHh')->nullable();   
            $table->timestamps();

            $table->foreign('IDClasificacion')->references('IDClasificacion')->on('Clasificaciones');
            $table->foreign('IDFormaIngreso')->references('IDFormaIngreso')->on('Formaingresos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Requerimientos');
    }
}
