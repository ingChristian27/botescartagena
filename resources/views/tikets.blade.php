@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px;">
                <h2>Agregar Tikets</h2>
                <table class="table table-hover">
                    <tr>
                        <td class="success"><strong>ID Viaje</strong></td>
                        <td class="success"><strong>Codigo Nave</strong></td>
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

<form role="form" action="{{ route('detalle_reserva')}}" method="post">
    <input type="hidden" class="form-control" name="cant_tikets" value="{{$cant_pasajeros}}">
    <input type="hidden" class="form-control" name="viaje_id" value="{{$viaje->id}}">
    {{ csrf_field() }}
    @for ($i = 0; $i < $cant_pasajeros; $i++)
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div style="padding:20px">
                    <div class="row">
                        <div class="col-lg-6">  
                            <div class="form-group">
                                <label for="inputPassword"> nombre  </label>
                                <input type="text" class="form-control" placeholder="{{$i}}_Nombres" name="{{$i}}_nombre">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inputPassword">Apellidos</label>
                                <input type="text" class="form-control" placeholder="{{$i}}_Apellidos" name="{{$i}}_apellido">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inputPassword">Email</label>
                                <input type="mail" class="form-control" placeholder="{{$i}}_Email" name="{{$i}}_email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inputPassword">Tel�fono</label>
                                <input type="mail" class="form-control" placeholder="{{$i}}_Tel�fono" name="{{$i}}_telefono">
                            </div>
                        </div>
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
                    <button type="submit" class="btn btn-default" value="enviar">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@stop()