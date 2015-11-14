<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    
    protected $table = 'viaje';

   

    public function nave()
  	{	
  		return $this->belongsTo(Nave::class, 'id');

  	}
  	public function destino()
  	{	
  		return $this->belongsTo(Destino::class, 'id');

  	}
  	public function Tikets()
  	{	
  		return $this->hasMany(Tikets::class, 'idviaje');

  	}




}
