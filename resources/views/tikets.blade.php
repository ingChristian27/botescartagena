@extends('layouts.default')




@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px;">
                <h2>Agregar Tikets </h2>
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
            </div>
        </div>
    </div>
</div>
@for ($i = 0; $i < $cant_pasajeros; $i++)
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px">
                  <div class="row">
                   <form role="form" action="{{ route('detalle_reserva')}}" method="post">
                        <div class="col-lg-6">
                            <div class="form-group">
                                 <label for="inputPassword">Nombre</label>
                                 <input type="text" class="form-control" placeholder="Nombres">
                             </div>
                           
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                 <label for="inputPassword">Apellidos</label>
                                 <input type="text" class="form-control" placeholder="Apellidos">
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                 <label for="inputPassword">Email</label>
                                 <input type="mail" class="form-control" placeholder="Email">
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                 <label for="inputPassword">Teléfono</label>
                                 <input type="mail" class="form-control" placeholder="Teléfono">
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endfor
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px">
                <button type="submit" class="btn btn-default"value="enviar">Enviar</button>
            </div>
        </div>
    </div>
</div>

@stop()