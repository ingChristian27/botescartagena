<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Viaje extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('viaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nave_id')->unsigned();
            $table->foreign('nave_id')->references('id')->on('nave');
            $table->integer('destino_id')->unsigned();
            $table->foreign('destino_id')->references('id')->on('destino');
            $table->date('fecha_reserva');
            $table->integer('capacidad')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('viaje');
    }

}
