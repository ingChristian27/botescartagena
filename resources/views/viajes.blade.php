@extends('layouts.default')




@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px;">
                <h2> Crear Viaje </h2>
                <form role="form" action="{{ route('up_viajes')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row"> 
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="ejemplo_email_1">Seleccionar Nave</label>
                                <select class="form-control" name="condigo_nave">
                                    @foreach($naves as  $nave) 
                                    <option>{{$nave->codigo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="ejemplo_password_1">Destino</label>
                                <input type="text" class="form-control"  name="destino"
                                       placeholder="Cocotera" disabled="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="ejemplo_password_1">Fecha</label>
                                <input type="date" class="form-control"  name="fecha"
                                       placeholder="Formato 'año-mes-dia'" >
                            </div>
                            <button type="submit" class="btn btn-default"value="enviar">Enviar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>	

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px; ">
                <h2>Viajes</h2>

                <table class="table table-hover">
                    <tr>
                        <td class="success"><strong>Id Viaje </strong></td>
                        <td class="success"><strong>Codigo Nave </strong></td>
                        <td class="success"><strong>Destino</strong></td>
                        <td class="success"><strong>Fecha</strong></td>
                    </tr>
                    @foreach($viajes as  $viaje) 
                    <tr>
                        <td>{{$viaje->id  }}</td>
                        <td>{{$viaje->nave->codigo}}</td>
                        <td>{{$viaje->destino->nombre}}</td>
                        <td>{{$viaje->fecha_reserva}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@stop()