@extends('layouts.default')

@section('content')
<div class="row">
<!-- Button trigger modal -->

<div class="col-lg-12 col-md-12">
	<div class="card">

	

		<div style="padding:20px;">

		<h2> Nave </h2>
		       <strong>Código de nave:    </strong>  {{ $nave->codigo}}<br>
               <strong>Capacidad:    </strong>{{ $nave->capacidad}}<br>
               <strong>Descripción:    </strong> {{ $nave->descripcion}}<br><br><br>
                                   
			
				<table class="table table-hover">
				<tr>
					  <td class="info"><strong>Itinerario de viajes de la nave {{$nave->codigo}}</strong></td>
				</tr>
			 	@foreach($nave->viajes as  $viaje) 
				<tr>
					  <td>{{ $viaje->fecha_reserva  }}</td>
				</tr>
				@endforeach

			</table>

					
		</div>
	</div>
</div>



</div>



@stop