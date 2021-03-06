<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tikets;
use App\Pasajero;
use App\Viaje;
use App\Reserva;
use Carbon\Carbon;
 

class comercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Busca las reservas, si encuentra envia el viaje y la cantdad de usuarios a reservar
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        
        $cant_tikets = $request->get('cant_adultos') + $request->get('cant_niños');
        $fecha_viaje = Carbon::parse($request->get('fecha'))->format('Y-m-d');
        $fecha_actual = Carbon::now()->format('Y-m-d');
        
        $fecha_inicial = Carbon::parse($request->get('fecha'))->subDays(5)->format('Y-m-d');
        $fecha_final = Carbon::parse($request->get('fecha'))->addDays(7)->format('Y-m-d');
        
        if($fecha_inicial < $fecha_viaje)   
            $fecha_inicial = Carbon::now()->addDays(1)->format('Y-m-d');
        
        $viaje = Viaje::where('fecha_reserva', '=', $fecha_viaje)->where('fecha_reserva', '>=', $fecha_actual)->where('capacidad', '>=', $cant_tikets)->first();
        if ($viaje != null) 
                return view('pasajeros', ['viaje' => $viaje, 'cant_pasajeros' => $cant_tikets]);
        
        
        $viajes = Viaje::where('fecha_reserva', '>', $fecha_inicial)->where('fecha_reserva', '<', $fecha_final)->where('capacidad', '>=', $cant_tikets)->get();
        return view('otras_busquedas',['viajes' => $viajes, 'cant_pasajeros' => $cant_tikets]);


    }

    public function otras_reserva(Request $request){

        return $request->all();

    }
    public function reservar(Request $request){

        $cant_tikets = $request->get('cant_tikets');
        $id_viaje = $request->get('viaje_id');
        $viaje = Viaje::find($id_viaje);
        //
        //dd($request->all());
        $reserva = new Reserva();
        $reserva->costo_total= $cant_tikets*300.000;
        $reserva->estado= "cancelado";
        $reserva->fecha_reserva= $viaje->fecha_reserva;
        $reserva->save();

        for($i = 0; $i < $cant_tikets; $i++){
            
                 $pasajero = new Pasajero();
                 $pasajero->nombres = $request->get($i.'_nombre');
                 $pasajero->apellidos = $request->get($i.'_apellido');
                 $pasajero->identificacion = $request->get($i.'_identificacion');
                 $pasajero->telefono = $request->get($i.'_telefono');
                 $pasajero->fecha_nacimiento = $request->get($i.'_edad');
                 $pasajero->email = $request->get($i.'_email');
                 $pasajero->save();

                 $tiket = new Tikets();
                 $tiket->viaje_id = $viaje->id;
                 $tiket->precio = 300.000;
                 $tiket->codigo= $request->get('viaje_id').$pasajero->id.$pasajero->id.$reserva->id ;
                 $tiket->pasajero_id = $pasajero->id;
                 $tiket->reserva_id = $reserva->id;
                 $tiket->save();
           
        }
       
        $viaje->save();
         return view('resumen_reserva', ['reserva' => $reserva, 'cant_pasajeros' => $cant_tikets]);
        
     
    }
        public function BuscarViaje(Request $request){
        /*
        * 1.  suma la cantidad de tikets entre niños y adultos
        * 2.  Modifica el formato de la fecha del viaje
        * 3.  Trae la fecha actual
        * 4.  guarda en una variable el rango de busqueda, el cual es de -5 + 7 dias
        */

        $cant_tikets = $request->get('cant_adultos') + $request->get('cant_niños');
        $fecha_viaje = Carbon::parse($request->get('fecha'))->format('Y-m-d');
        $fecha_actual = Carbon::now()->format('Y-m-d');
        
        $fecha_inicial = Carbon::parse($request->get('fecha'))->subDays(5)->format('Y-m-d');
        $fecha_final = Carbon::parse($request->get('fecha'))->addDays(7)->format('Y-m-d');
        // Si la fecha es inicial es menor a la fecha del viaje a la fecha del viaje se le agrega un dia
        if($fecha_inicial < $fecha_viaje)   
            $fecha_inicial = Carbon::now()->addDays(1)->format('Y-m-d');
        // fecha de reserva debe ser igual a la del viaje y la fecha de reserva mayor a la actual
        
 
        $viajes = Viaje::where('fecha_reserva', '>', $fecha_inicial)->where('fecha_reserva', '<', $fecha_final)->where('capacidad', '>=', $cant_tikets)->with( 'destino')->get();
        
        return Response()->json([
                        "msg" => "Succes",
                        "viajes" => $viajes->toArray(),
                        "cant_pasajeros" => $cant_tikets
                        ], 200
        );
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
