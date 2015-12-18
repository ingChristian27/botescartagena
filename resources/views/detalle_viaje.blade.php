@extends('layouts.default')




@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px;"> 
                 <table class="table table-hover">
                        <tr>
                            <td class="success"><strong>Id Viaje </strong></td>
                            <td class="success"><strong>Codigo Nave </strong></td>
                            <td class="success"><strong>Destino</strong></td>
                            <td class="success"><strong>Fecha</strong></td>
                            <td class="success"><strong>Capacidad</strong></td>
                        </tr>
                        <tr>
                            <td>{{$viaje->id  }}</td>
                            <td>{{$viaje->nave->codigo}}</td>
                            <td>{{$viaje->destino->nombre}}</td>
                            <td>{{$viaje->fecha_reserva}}</td>
                            <td>{{$viaje->capacidad}}</td>
                        </tr>
                     
                    </table>
                
                       <div class="row">
                   @foreach($viaje->tikets as  $tiket)
                           <div class="col-lg-6">
                             <h5><strong>Tiket {{$tiket->codigo}}</strong></h5>
                             <h5> <strong>Pasajero</strong> </h5>
                             <ul>
                                <li> <strong>Identificación: </strong>{{$tiket->pasajero->identificacion}} </li>
                                <li><strong>Nombre: </strong>{{$tiket->pasajero->nombres}} {{$tiket->pasajero->apellidos}} </li>
                            </ul>
                           </div>
                    @endforeach
                       </div>

              </div>
            
        </div>
    </div>
</div>



@stop()