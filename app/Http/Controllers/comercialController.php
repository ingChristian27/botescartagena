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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        
        $cant_tikets = $request->get('cant_adultos') + $request->get('cant_niños');
        $fecha = $request->get('fecha');
        $viaje = Viaje::where('fecha_reserva', '=', $fecha)->where('capacidad', '>=', $cant_tikets)->first();
        if ($viaje != null) {
            if ($viaje->capacidad >= $cant_tikets) {
                return view('pasajeros', ['viaje' => $viaje, 'cant_pasajeros' => $cant_tikets]);
            }
        }
        $viajes = Viaje::where('fecha_reserva', '<', $fecha)->where('capacidad', '>=', $cant_tikets)->limit(3)->get();

        


       
        return view('otras_busquedas',['viajes' => $viajes]);


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
