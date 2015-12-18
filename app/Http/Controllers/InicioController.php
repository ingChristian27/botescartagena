<?php

namespace App\Http\Controllers;
use App\Nave;
use App\User;
use App\cupo;
use App\Destino;
use App\Viaje;
use App\Tikets;
use App\Reserva;


class InicioController extends Controller
{ 
	
	public function inicio(){
		
  		return view('dashboard');

	}
	public function GuardarUsuario(){
	
		

				return "True Naves";
	}	
	public function verNaves(){
	
				$naves = Nave::all();
				return $naves;
	}
	public function verViajes(){
				return  $viajes = Viaje:: all();
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
			
			$viaje   = new Viaje;
			$viaje->fecha_reserva ='2005-06-21';
			$destino->Viajes()->save($viaje);
			$nave->Viajes()->save($viaje);
			echo $viaje->destino;
			echo $viaje->nave;
			//return $viaje;
			
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
				