<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PasajeroForeignKey extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('tikets', function($table) {
            $table->integer('pasajero_id')->unsigned();
            $table->foreign('pasajero_id')->references('id')->on('pasajero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('tikets', function ($table) {
            $table->dropForeign('tikets_pasajero_id_foreign');
            $table->dropColumn('pasajero_id');
        });
        Schema::dropIfExists('tikets');
    }

}
