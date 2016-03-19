<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Nave;


class navesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naves = Nave:: all();
        //return ['naves'=> $naves] ;
        return view('naves', ['naves'=> $naves] );
    }

  public function indexJson()
    {
        $naves = Nave:: all();
        return Response()->json([
            "msg" => "Succes",
            "naves" => $naves->toArray()
            ], 200
        );
        //return ['naves'=> $naves] ;
        //return view('naves', ['naves'=> $naves] );
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
       
       

        // Busca el nombre de la nave para verificar su existencia, en caso 
        //de que exista, returna un mensaje de error
        
        $busqueda = Nave::where('nombre', '=', $request->get('nombre'))->get();
        
        if(!$busqueda->isEmpty())
           return "La nave ya existe o tiene el mismo código";

        $nave = new Nave();
        $nave->nombre =  $request->get('nombre');
        $nave->modelo =  $request->get('modelo');
        $nave->color =  $request->get('color');
        $nave->tipo =  $request->get('tipo');
        $nave->cant_motores =  $request->get('cant_motores');
        $nave->potencia =  $request->get('potencia');
        $nave->marca =  $request->get('marca');
        $nave->eslora =  $request->get('eslora');
        $nave->combustible =  $request->get('combustible');
        $nave->matricula =  $request->get('matricula');
        $nave->pax =  $request->get('pax');
        $nave->chalecos =  $request->get('chalecos');
        $nave->radio_vhf =  $request->get('radio_vhf');
        $nave->nevera =  $request->get('nevera');
        $nave->carpa =  $request->get('carpa');
        $nave->sonido =  $request->get('sonido');
        $nave->piloto =  $request->get('piloto');
        $nave->licencia_piloto =  $request->get('licencia_piloto');
        $nave->copiloto =  $request->get('copiloto');
        $nave->licencia_copiloto =  $request->get('licencia_copiloto');
        $nave->descripcion =  $request->get('descripcion');
        $nave->save();   
       
        return redirect('naves')->with(['nave_success' => 'Nave creada exitosamente' ]);


      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nave = Nave::find($id);
        return view('detalle_nave', ['nave' => $nave]);
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
