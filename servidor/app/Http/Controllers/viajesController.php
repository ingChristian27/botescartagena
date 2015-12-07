<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Viaje;
use App\Destino;
use App\Nave;

class viajesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $viajes = Viaje:: all();
        $naves = Nave:: all();
        $viajes = Viaje::with('nave', 'destino')->get();

        return view('viajes', ['viajes' => $viajes, 'naves' => $naves]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        
        $nave = Nave::where('codigo', '=', $request->get('condigo_nave'))->first();
        $destino = Destino::find(1);
        $viaje = new Viaje;
        $viaje->fecha_reserva = $request->get('fecha');
        $viaje->destino_id = $destino->id;
        $viaje->nave_id = $nave->id;
        $viaje->capacidad = $request->get('capacidad');
        $viaje->save();


        return redirect('viajes')->with(['viaje_success' => 'Viajes creada exitosamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
