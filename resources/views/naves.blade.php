@extends('layouts.default')

@section('content')
<div class="row">
<div class="col-lg-12 col-md-12">
	<div class="card">
		<div style="padding:20px; ">
				<h2> Agregar Nave </h2>
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
						           placeholder="Contraseña" disabled="">
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
		</div>
	
</div>
<div class="col-lg-12 col-md-12">
	<div class="card">
		<div style="padding:20px;">
		<h2> Naves </h2>
			<table class="table table-hover">
				<tr>
					  <td class="info"><strong>Codigo</strong></td>
					  <td class="info"><strong>Capacidad </strong></td>
					  <td class="info"><strong>Descripción</strong></td>
					
				</tr>
			 	@foreach($naves as  $nave) 
				<tr>
					  <td>{{ $nave->codigo  }}</td>
					  <td>{{ $nave->capacidad}}</td>
					  <td>{{ $nave->descripcion}}</td>
				</tr>
				@endforeach

			</table>
		</div>
	</div>
</div>


</div>
@stop