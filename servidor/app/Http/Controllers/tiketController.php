<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tikets;
use App\Pasajero;
use App\Viaje;
use App\Reserva;

class tiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //$viaje->capacidad -= $cant_tikets;
        $viaje->save();
        return view('detalle_reserva', ['reserva' => $reserva]);
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
