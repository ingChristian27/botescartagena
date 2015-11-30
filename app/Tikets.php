<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tikets extends Model
{
    protected $table = 'tikets';


	public function Viaje()
  	{	
  		return $this->belongsTo(Viaje::class);

  	}
  	public function Pasajero()
  	{	
  		return $this->belongsTo(Pasajero::class);

  	}
  	public function Reserva()
  	{	
  		return $this->belongsTo(Reserva::class);

  	}
}


