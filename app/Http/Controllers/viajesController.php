<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Viaje;
use App\Destino;
use App\Nave;
class viajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje:: all();
        $viajes = Viaje::with('nave', 'destino')->get();

        $naves = Nave:: all();


        return view('viajes', ['viajes'=> $viajes, 'naves' => $naves] );
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
        
        $nave = Nave::where('codigo', '=', $request->get('condigo_nave'))->get();
        $nave = Destino::find($nave[0]->id);
        $destino = Destino::find(1);
     
        
        $viaje   = new Viaje;
        $viaje->fecha_reserva = $request->get('fecha');
        $destino->Viajes()->save($viaje);
        $nave->Viajes()->save($viaje);


        return " Se ha insertado un destino";
        
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
