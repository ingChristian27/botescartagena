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
            $table->integer('idviaje');
            $table->integer('capacidad');
            $table->string('codigo')->unique();
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
