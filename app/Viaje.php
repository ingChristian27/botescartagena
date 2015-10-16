<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    
    protected $table = 'viaje';

   

    public function Nave()
  	{	
  		return $this->hasMany(Nave::class, 'idnave');

  	}
  	public function Destino()
  	{	
  		return $this->hasMany(Destino::class, 'iddestino');

  	}
  	public function tikets()
  	{	
  		return $this->hasMany(Tikets::class, 'idtikets');

  	}

}
