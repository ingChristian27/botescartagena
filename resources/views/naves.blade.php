@extends('layouts.default')

@section('content')
<div class="row">
<!-- Button trigger modal -->

<div class="col-lg-12 col-md-12">
	<div class="card">
	<div class="row">
		<div class="col-lg-6"></div>
		<div class="col-lg-6 text-right" style="padding:20px 50px 0px 0px;">
			<button  class="btn btn-default " data-toggle="modal" data-target="#agregar_nave">
  				Agregar Nave
	</button>
		</div>
	</div>
	

		<div style="padding:20px;">

		<h2> Naves </h2>
		<div class="table-responsive">
			<table class="table table-hover ">
				<tr>					  
					<td class="info"> nombre </td>
					<td class="info"> matricula </td>
					<td class="info"> pax </td>
					<td class="info"> descripcion </td>
					<td class="info"> modelo </td>
					<td class="info"> color </td>
					<td class="info"> tipo </td>
					<td class="info"> cant_motores </td>
					<td class="info"> potencia </td>
					<td class="info"> marca </td>
					<td class="info"> eslora </td>
					<td class="info"> combustible </td>
					<td class="info"> chalecos </td>
					<td class="info"> radio_vhf </td>
					<td class="info"> nevera </td>
					<td class="info"> carpa </td>
					<td class="info"> sonido </td>
					<td class="info"> piloto </td>
					<td class="info"> licencia_piloto </td>
					<td class="info"> copiloto </td>
					<td class="info"> licencia_copiloto </td>
					<td class="info"><strong>Detalle</strong></td>
	
				</tr>
			 	@foreach($naves as  $nave) 
				<tr>
					 <td> {{ $nave->nombre }} </td>
					 <td> {{ $nave->matricula }} </td>
					 <td> {{ $nave->pax }} </td>
					 <td> {{ $nave->descripcion }} </td>
					 <td> {{ $nave->modelo }} </td>
					 <td> {{ $nave->color }} </td>
					 <td> {{ $nave->tipo }} </td>
					 <td> {{ $nave->cant_motores }} </td>
					 <td> {{ $nave->potencia }} </td>
					 <td> {{ $nave->marca }} </td>
					 <td> {{ $nave->eslora }} </td>
					 <td> {{ $nave->combustible }} </td>
					 <td> {{ $nave->chalecos }} </td>
					 <td> {{ $nave->radio_vhf }} </td>
					 <td> {{ $nave->nevera }} </td>
					 <td> {{ $nave->carpa }} </td>
					 <td> {{ $nave->sonido }} </td>
					 <td> {{ $nave->piloto }} </td>
					 <td> {{ $nave->licencia_piloto }} </td>
					 <td> {{ $nave->copiloto }} </td>
					 <td> {{ $nave->licencia_copiloto }} </td>
					   <td><a href="{{ route('ver_nave',$nave->id )}}" class="btn btn-info">Ver</a></td>

				</tr>
				@endforeach

			</table>
		</div>
			
		</div>
	</div>
</div>



</div>


<!-- Modal agregar naves -->
<div class="modal" id="agregar_nave"  aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Naves</h4>
      </div>
      <div class="modal-body">
       				<form role="form" action="{{ route('update_naves')}}" method="post">
				{{ csrf_field() }}
				<div class="row"> 
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label for="ejemplo_email_1">Nombre</label>
						    <input type="text" class="form-control"  name="nombre" required>
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Matricula</label>
						    <input type="text" class="form-control"  name="matricula" required>
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Pax</label>
						    <input type="number" class="form-control"  name="pax" required>
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Descripción</label>
						    <input type="text" class="form-control"  name="descripcion">
						  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >modelo</label>
						    <input type="text" class="form-control"  name="modelo">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Color</label>
						    <input type="text" class="form-control"  name="color">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Tipo</label>
						    <input type="text" class="form-control"  name="tipo">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Cantidad motores</label>
						    <input type="number" class="form-control"  name="cant_motores">
						  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Potencia</label>
						    <input type="text" class="form-control"  name="potencia">
						  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >marca</label>
						    <input type="text" class="form-control"  name="marca">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Eslora</label>
						    <input type="text" class="form-control"  name="eslora">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Combustible</label>
						    <input type="text" class="form-control"  name="combustible">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Chalecos</label>
						    <input type="number" class="form-control"  name="chalecos">
						  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >radio VHF</label>
						    <input type="number" class="form-control"  name="radio_vhf">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Nevera</label>
						    <input type="text" class="form-control"  name="nevera">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >carpa</label>
						    <input type="text" class="form-control"  name="carpa">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >sonido</label>
						    <input type="text" class="form-control"  name="sonido">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Nombre Piloto</label>
						    <input type="text" class="form-control"  name="piloto">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Licencia piloto</label>
						    <input type="text" class="form-control"  name="licencia_piloto">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >Nombre copiloto</label>
						    <input type="text" class="form-control"  name="copiloto">
						  </div>
					</div>
					<div class="col-lg-4 col-md-4">
						  <div class="form-group">
						    <label >licencia_copiloto</label>
						    <input type="text" class="form-control"  name="licencia_copiloto">
						  </div>
					</div>

				</div>

					  <button type="submit" class="btn btn-default"value="enviar">Enviar</button>


				</form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  
      </div>
    </div>
  </div>
</div>
@stop