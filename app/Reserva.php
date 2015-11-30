<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reserva';

     public function Tikets() {
       return $this->hasMany(Tikets::class, 'reserva_id');
   }

   
}
