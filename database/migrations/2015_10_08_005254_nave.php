<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nave', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('modelo');
            $table->string('color');

            $table->string('tipo');
            $table->integer('cant_motores');
            $table->string('potencia');
            $table->string('marca');
            $table->string('eslora');
            $table->string('combustible');

            $table->string('matricula')->unique();
            $table->integer('pax');
            $table->integer('chalecos');
            $table->integer('radio_vhf');
            $table->integer('nevera');

            $table->string('carpa');
            $table->string('sonido');
            $table->string('piloto');
            $table->string('licencia_piloto');
            $table->string('copiloto');
            $table->string('licencia_copiloto');
            $table->string('descripcion', 60);
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
         Schema::dropIfExists('nave');
    }
}
