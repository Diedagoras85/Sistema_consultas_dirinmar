<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdjuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adjuntos', function (Blueprint $table) {
            $table->increments('IDAdjunto');
            $table->unsignedBigInteger('IDRequerimiento');
            $table->binary('Adjunto');
            $table->timestamps();

            $table->foreign('IDRequerimiento')->references('id')->on('Requerimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adjuntos');
    }
}
