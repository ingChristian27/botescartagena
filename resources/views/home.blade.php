@extends('layouts.default')




@section('content')

<h1>Viajes</h1>

<table class="table table-hover">
<tr>
  <td class="success"><strong>Id Viaje </strong></td>
  <td class="success"><strong>Codigo  Nave </strong></td>
  <td class="success"><strong>Destino</strong></td>
  <td class="success"><strong>Fecha</strong></td>
</tr>
 	@foreach($viajes as  $viaje) 
		<tr>
		  <td>{{ $viaje->id  }}</td>
		  <td>{{ $viaje->nave->codigo}}</td>
		  <td>{{$viaje->destinO->nombre}}</td>
		  <td>{{$viaje->fecha_reserva}}</td>
		</tr>
	

	@endforeach
</table>
@stop()