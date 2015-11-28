<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model {

    protected $table = 'destino';

    public function viajes() {
        return $this->hasMany(Viaje::class, 'destino_id');
    }

}
