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
			<table class="table table-hover">
				<tr>
					  <td class="info"><strong>Codigo</strong></td>
					  <td class="info"><strong>Capacidad </strong></td>
					  <td class="info"><strong>Descripción</strong></td>
					  <td class="info"><strong>Detalle</strong></td>
					
				</tr>
			 	@foreach($naves as  $nave) 
				<tr>
					  <td>{{ $nave->codigo  }}</td>
					  <td>{{ $nave->capacidad}}</td>
					  <td>{{ $nave->descripcion}}</td>
					   <td><a href="{{ route('ver_nave',$nave->id )}}" class="btn btn-info">Ver</a></td>

				</tr>
				@endforeach

			</table>
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
					<div class="col-lg-6 col-md-6">
						  <div class="form-group">
						    <label for="ejemplo_email_1">Código Nave</label>
						    <input type="text" class="form-control"  name="condigo_nave"
						           placeholder="Introduce tu email">
						  </div>
					</div>
					<div class="col-lg-6 col-md-6">
						  <div class="form-group">
						    <label for="ejemplo_password_1">Capacidad</label>
						    <input type="text" class="form-control"  name="capacidad"
						           placeholder="Contraseña" >
						  </div>
					</div>
					<div class="col-lg-12 col-md-12">
						  <div class="form-group">
						    <label for="ejemplo_password_1">Descripción</label>
						    <input type="text" class="form-control"  name="descripcion"
						           placeholder="Contraseña">
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