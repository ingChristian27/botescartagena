<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tikets extends Model
{
    protected $table = 'tikets';

	public function Nave()
	{	
	  	return $this->hasOne(Viaje::class, 'idviaje');

	}
}


