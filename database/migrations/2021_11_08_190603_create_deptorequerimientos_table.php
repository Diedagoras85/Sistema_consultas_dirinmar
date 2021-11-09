<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptorequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Deptorequerimientos', function (Blueprint $table) {
            $table->unsignedBigInteger('IDRequerimiento');
            $table->unsignedBigInteger('IDDepto');
            
            $table->timestamps();

            $table->foreign('IDRequerimiento')->references('id')->on('Requerimientos');
            $table->foreign('IDDepto')->references('IDDepto')->on('Departamentos');
            $table->primary(['IDRequerimiento','IDDepto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Deptorequerimientos');
    }
}
