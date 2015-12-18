@extends('layouts.default')




@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px;">
               <div class="row">
                        <div class="col-lg-6">
                            <h2> Detalles del tour </h2>
                            <strong>Fecha del tour:    </strong> {{$reserva->tikets[0]->viaje->fecha_reserva}}<br>
                            <strong>Nave:    </strong> {{$reserva->tikets[0]->viaje->nave->codigo}}<br>
                            <strong>Hora de salida:    </strong> 08: 00 AM<br>
                        </div>
                        <div class="col-lg-6 text-right cod_reserva "> 
                            <h4> NÚMERO DE RESERVA </h4>
                           <h3><strong> {{$reserva->id}}</strong></h3>
                        </div>
                </div>
                @foreach($reserva->tikets as  $tiket)
                    <div class="row" style="padding:20px;">
                    <div class="col-lg-12 col-md-12">
                         <h5><strong>Tiket {{$tiket->codigo}}</strong></h35>
                    </div>
                        <div class="col-lg-6">
                            <h5> <strong>Pasajero</strong> </h5>
                            <ul>
                              <li> <strong>Identificación: </strong>{{$tiket->pasajero->identificacion}} </li>
                              <li><strong>Nombre: </strong>{{$tiket->pasajero->nombres}} {{$tiket->pasajero->apellidos}} </li>
                              
                            </ul>
                           
                        </div>
                        <div class="col-lg-6"> </div>
                    </div>
                @endforeach
              </div>
            </form>
        </div>
    </div>
</div>
</div>	


@stop()