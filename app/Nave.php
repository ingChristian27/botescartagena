<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nave extends Model {

  protected $table = 'nave';

  protected $fillable = [ 'codigo', 'descripcion'];

  public function Viajes()
  {	
  	return $this->hasMany(Viaje::class, 'idnave');

  }
  
}