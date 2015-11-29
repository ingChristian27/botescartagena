<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pasajero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
        Schema::create('pasajero', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->integer('cantidad_viajes')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pasajeros');
    }

}
