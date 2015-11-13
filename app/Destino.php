<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
	protected $table = 'destino';
    
     public function Viajes()
  	{	
  		return $this->hasMany(Viaje::class, 'iddestino');

  	}
}
