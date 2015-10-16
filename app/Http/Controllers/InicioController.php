<?php

namespace App\Http\Controllers;
use App\Nave;
use App\User;
use App\cupo;


class InicioController extends Controller
{ 
	
	public function inicio(){
		return view('home');
		
	}
	public function GuardarUsuario(){


		// crear naves 
		
				$nave1= new Nave();
				$nave1->capacidad = 12;
				$nave1->codigo = "nave1";
				$nave1->save();
		
				$nave2= new Nave();
				$nave2->capacidad = 10;
				$nave2->codigo = "nave2";
				$nave2->save();
		
				$nave3= new Nave();
				$nave3->capacidad = 8;
				$nave3->codigo = "nave3";
				$nave3->save();
		
	/*	$nave = Nave::find(1);
		for ($i = 0; $i < $nave->capacidad; $i++) {

    		$cupo = new Cupo();
    		$cupo->codigo = $i;
    		$cupo->precio = 270.000;
    		$cupo->estado = "libre";	
    		$nave->Cupos()->save($cupo);
    		$cupo->Nave()->save($nave);

		}
*/
		

		
		return $nave1;	
	}	
}
				