<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Viaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('viaje', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('idnave');
            $table->integer('iddestino');
            $table->integer('idtikets');
            $table->date('fecha_reserva');
            $table->string('tipo_viaje');
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
         Schema::dropIfExists('viaje');
    }
}
