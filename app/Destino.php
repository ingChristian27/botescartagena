<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    
    public function Viajes()
	{	
	  	return $this->hasOne(Viaje::class, 'idviaje');

	}
}
