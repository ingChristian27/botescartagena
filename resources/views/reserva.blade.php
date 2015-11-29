@extends('layouts.default')




@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div style="padding:20px;">
                <h2> Reservas </h2>
                <form role="form" action="{{ route('reservar')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row"> 
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label >Cantidad de adultos</label>
                                <input type="number" class="form-control"  name="cant_adultos"
                                       placeholder="Cantidad de tikets" min="0">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label >Cantidad de niños</label>
                                <input type="number" class="form-control"  name="cant_niños"
                                       placeholder="Cantidad de tikets" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="ejemplo_password_1">Fecha</label>
                                <input type="date" class="form-control"  name="fecha"
                                       placeholder="Ingresa la fecha'" >
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-default" value="enviar">Enviar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>	


@stop()