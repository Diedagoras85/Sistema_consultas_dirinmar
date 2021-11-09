<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->id();
            $table->string('NMCliente',150);
            $table->string('NRRun',12)->nullable();
            $table->string('NMDireccion',1000)->nullable();
            $table->string('NRTelefono',30)->nullable();
            $table->string('NRMovil',30)->nullable();
            $table->string('GLEmpresa',1000)->nullable();
            $table->string('GLCiudad',40)->nullable();
            $table->string('NMPais',50)->nullable();
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
        Schema::dropIfExists('Clientes');
    }
}
