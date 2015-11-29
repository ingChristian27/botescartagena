<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model {

    protected $table = 'viaje';
    protected $fillable = ['nave_id', 'destion_id', 'fecha_reserva', 'tipo_viaje'];

    public function nave() {
        return $this->belongsTo(Nave::class);
    }

    public function destino() {
        return $this->belongsTo(Destino::class);
    }

   public function Tikets() {
       return $this->hasMany(Tikets::class, 'idviaje');
   }
}
