@extends('layouts.geadmin')
	@section('content')
	@include('genero.modal')
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Genero Actualizado Correctamente.</strong>
	</div>
		<table class="table">
			<thead>
				<th>Pelicula y Valoracion</th>
				<th>Modificar o Eliminar Datos</th>
			</thead>
			
			<tbody id="datos"></tbody>
		</table>

	@endsection

	@section('scripts')
		{!!Html::script('js/script2.js')!!}
	@endsection