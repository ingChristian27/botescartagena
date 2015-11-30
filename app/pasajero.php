<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    protected $table = 'pasajero';
    
    public function Tikets() {
       return $this->hasMany(Tikets::class, 'pasajero_id');
   	}
}
