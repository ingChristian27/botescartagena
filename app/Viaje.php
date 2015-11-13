<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    
    protected $table = 'viaje';

   

    public function Nave()
  	{	
  		return $this->belongsTo(Nave::class);

  	}
  	public function Destino()
  	{	
  		return $this->belongsTo(Destino::class);

  	}
  	public function Tikets()
  	{	
  		return $this->hasMany(Tikets::class, 'idviaje');

  	}




}
