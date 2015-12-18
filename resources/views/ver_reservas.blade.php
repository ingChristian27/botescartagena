@extends('layouts.default')

@section('content')



<!-- fin test acordeon-->
<div class="row">
<div class="col-lg-12 col-md-12">
		<h2> Reservas</h2>
			 	@foreach($reservas as  $reserva) 
	<div class="card">
		<div style="padding:20px;">
			
				 
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">


	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingThree">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$reserva->id}}" aria-expanded="false" aria-controls="collapseThree">
	          código de Reserva {{$reserva->id}} - {{$reserva->tikets[0]->viaje->fecha_reserva}}
	        </a>
	      </h4>
	    </div>
	    <div id="{{$reserva->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	      <div class="panel-body">
	      
                       <strong>Fecha del tour:    </strong> {{$reserva->tikets[0]->viaje->fecha_reserva}}<br>
                       <strong>Nave:    		  </strong> {{$reserva->tikets[0]->viaje->nave->codigo}}<br>
                       <strong>Hora de salida:    </strong> 08: 00 AM<br><br>
                        
                           
					 @foreach($reserva->tikets as  $tiket)
		                    
		                    <div class="col-lg-6 col-md-6">
		                         <h5><strong>Tiket {{$tiket->codigo}}</strong></h35>
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
	</div>
				@endforeach
</div>


</div>
@stop