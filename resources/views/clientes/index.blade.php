@extends('app')


@section('content')

	<h1>Clientes Registrados</h1>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nit</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Ciudad</th>
				<th>Telefono</th>
				<th>Correo Electronico</th>
				<th>Contacto</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
				<tr>
					<td>{{ $cliente->id }}</td>
					<td>{{ $cliente->nit }}</td>
					<td>{{ $cliente->nombre }}</td>
					<td>{{ $cliente->direccion }}</td>
					<td>{{ $cliente->ciudad }}</td>
					<td>{{ $cliente->telefono }}</td>
					<td>{{ $cliente->email }}</td>
					<td>{{ $cliente->contacto }}</td>
					<td>{{ $cliente->estado }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $clientes->render() !!}
@endsection