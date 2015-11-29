

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tikets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->increments('id');  
            $table->integer('viaje_id')->unsigned();
            $table->foreign('viaje_id')->references('id')->on('viaje');

            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')->on('reserva');

            //$table->integer('pasajero_id')->unsigned();
            //$table->foreign('pasajero_id')->references('id')->on('pasajero');
            $table->string('codigo')->unique();
            $table->string('tipo_cupo');
            $table->decimal('precio', 7, 2);
            $table->string('estado');
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
          Schema::dropIfExists('tikets');
    }
}
