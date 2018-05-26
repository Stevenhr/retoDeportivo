@extends('master')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<br>
			<h2>Listado de jugadores</h2>
			<br>
			<a href="{{URL::action('Palmare\jugadoresController@create')}}" class="btn btn-primary">Nuevo jugador</a> 
			<br><br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th>
						<th>Altura</th>
						<th>Dorsal</th>
						<th>Posicion</th>
						<th>Lugar de nacimiento</th>
						<th>Fecha de nacimiento</th>
						<th>Palmare</th>
						<th>Opciones</th>
					</thead>

					<tbody>
						@foreach ($jugadores as $datos)
						<tr>
							<td>{{ $datos->nombre }}</td>
							<td>{{ $datos->i_altura }} cm</td>
							<td>{{ $datos->vc_dorsal }}</td>
							<td>{{ $datos->vc_posicion }}</td>
							<td>{{ $datos->vc_lugarNacimiento }}</td>
							<td>{{ $datos->d_fechanacimiento }}</td>
							<td>
								<a href="" data-target="#modal-createPalmare-{{$datos->i_pk_id}}" data-toggle="modal" class="btn btn-primary btn-block">Crear</a> 
            					<a href="" class="btn btn-success btn-block">Mostrar</a>
								<a href="" data-target="" data-toggle="modal" class="btn btn-danger btn-block">Eliminar</a>
							</td>
							<td>
								<a href="{{URL::action('Palmare\jugadoresController@edit', $datos->i_pk_id)}}" class="btn btn-primary btn-block">Editar</a> 
            					<a href="{{URL::action('Palmare\jugadoresController@show', $datos->i_pk_id)}}" class="btn btn-success btn-block">Mostrar</a>
								<a href="" data-target="#modal-delete-{{$datos->i_pk_id}}" data-toggle="modal" class="btn btn-danger btn-block">Eliminar</a> 
							</td>
						</tr>
						@include('Palmare.createPalmare')
						@include('Palmare.destroy')
						@endforeach
					</tbody>
				</table>
			</div>
			{{$jugadores->render()}}
		</div>
	</div>
	
	  <!---->
@endsection