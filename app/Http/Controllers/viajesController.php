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

    // Esta funcion actualmente no se està usando
    public function index() {

        $viajes = Viaje:: all();
        $naves = Nave:: all();
        $viajes = Viaje::with('nave', 'destino')->get();
        $destinos = Destino::all();
        if(sizeof($destinos) == 0  || sizeof($naves)==0){
            if(sizeof($destinos) == 0){
                
                    $destino= new Destino();
                    $destino->nombre = "La cocotera";
                    $destino->distancia = "20km";
                    $destino->descripcion=" Espectacular isla VIP";
                    $destino->save();   
                    $destinos = Destino::all();
            }
            if(sizeof($naves) == 0){
                
                $nave = new Nave();
                $nave->nombre = "Default";
                $nave->matricula = "Default";
                $nave->save();
                $naves = Nave:: all();

            }
            
        }
        
        return view('viajes', ['viajes' => $viajes, 'naves' => $naves, 'destinos' => $destinos]);

    }
    public function indexJson() {

        $viajes = Viaje:: all();
        $naves = Nave:: all();
        $viajes = Viaje::with('nave', 'destino')->get();
        $destinos = Destino::all();
        // Valida si existen destinos y naves, en caso de no haber crea uno por default
        if(sizeof($destinos) == 0  || sizeof($naves)==0){
            if(sizeof($destinos) == 0){
                
                    $destino= new Destino();
                    $destino->nombre = "La cocotera";
                    $destino->distancia = "20km";
                    $destino->descripcion=" Espectacular isla VIP";
                    $destino->save();   
                    $destinos = Destino::all();
            }
            if(sizeof($naves) == 0){
                
                $nave = new Nave();
                $nave->nombre = "Default";
                $nave->matricula = "Default";
                $nave->save();
                $naves = Nave:: all();

            }
            
        }
        // Retorna json con naves, viajes y destino
        return Response()->json([
            "msg" => "Succes",
            "viajes" => $viajes->toArray(),
            "naves" => $naves->toArray(),
            "destinos" => $destinos->toArray()
            ], 200
        );
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

        //$nave = Nave::where('nombre', '=', $request->get('condigo_nave'))->first();
        $nave =Nave::find($request->get('condigo_nave'));
        $destino = Destino::find($request->get('codigo_destino'));
        $viaje = new Viaje;
        $viaje->fecha_reserva = $request->get('fecha');
        $viaje->destino_id = $destino->id;
        $viaje->nave_id = $nave->id;
        $viaje->capacidad = $request->get('capacidad');
        $viaje->save();
        $naves = Nave:: all();
        $destinos = Destino::all();
        $viajes = Viaje::with('nave', 'destino')->get();

        // Retorna json con naves, viajes y destino
        return Response()->json([
            "msg" => "Succes",
            "viajes" => $viajes->toArray(),
            "naves" => $naves->toArray(),
            "destinos" => $destinos->toArray()
            ], 200
        );


        //return redirect('viajes')->with(['viaje_success' => 'Viajes creada exitosamente']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $viaje = Viaje::find($id);
       
        return view('detalle_viaje', ['viaje' => $viaje]);
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
        
        $viaje =Viaje::find($id);
        
        if (is_null ($viaje))
        {
            App::abort(404);
        }
        
        $viaje->delete();

        return redirect('viajes')->with(['viaje_success' => 'Se ha eliminado el viaje exitosamente']);
    }

}
