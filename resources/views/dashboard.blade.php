@extends('layouts.default')

@section('content')
<div class="row">
<!-- Button trigger modal -->
<a href="{{route('naves')}}">
	<div class="col-lg-4 col-md-4">
		<div class="card">
			<div style="padding:50px;">
			<p class="text-center"><strong>NAVES </strong>  </p>
			</div>
		</div>
	</div>
</a>

<a href="{{route('viajes')}}">
	<div class="col-lg-4 col-md-4" >
		<div class="card" >
			<div style="padding:50px;" >
				<p class="text-center"><strong>VIAJES  </strong> </p> 
			</div>
		</div>
	</div>
</a>

<a href="{{route('reserva')}}">
	<div class="col-lg-4 col-md-4">
		<div class="card">
			<div style="padding:50px;">
				<p class="text-center"><strong>RESERVAR </strong>  </p>
			</div>
		</div>
	</div>
</a>

<a href="{{route('ver_reservas')}}">
	<div class="col-lg-4 col-md-4">
		<div class="card">
			<div style="padding:50px;">
				<p class="text-center"><strong>VER RESERVAS </strong>  </p>
			</div>
		</div>
	</div>
</a>


</div>



@stop