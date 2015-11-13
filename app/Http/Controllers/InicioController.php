<?php

namespace App\Http\Controllers;
use App\Nave;
use App\User;
use App\cupo;
use App\Destino;
use App\Viaje;
use App\Tikets;


class InicioController extends Controller
{ 
	
	public function inicio(){
		return view('home');
		
	}
	public function GuardarUsuario(){
	
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

				return "True Naves";
	}	

	public function destinos(){

			$destino= new Destino();
			$destino->nombre = "La cocotera";
			$destino->distancia = "20km";
			$destino->descripcion=" Espectacular isla VIP";
			$destino->save();

			return "true destino";
	}
	
	public function crearviaje(){     
			
			$nave    = Nave::find(1);
			$destino = Destino::find(1);
			$viaje   = new Viaje;;
			$v    = Viaje::find(1);
			$v->fecha_reserva ='2005-06-21';
			$v->save();
			//$destino->Viajes()->save($viaje);
			//$nave->Viajes()->save($viaje);
			
			return "true";
	}
	public function crearTikets(){     
			
			print "entro ";

			$viaje    = Viaje::find(1);

		//	$tiket = new Tikets();
		//	$tiket->codigo = "t1001";
		//	$tiket->precio = 250.000;
		//	$tiket->estado = "libre";
		//	$viaje->Tikets()->save($tiket);

			
			return $viaje->Tikets;
	}
           
            
        
}
				