@extends('app')


@section('content')

	<h1>Productos Registrados</h1>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Marca</th>
				<th>PVP</th>
				<th>Stock Minimo</th>
				<th>Stock Maximo</th>
				<th>Imagen</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->id }}</td>
					<td>{{ $producto->codigo }}</td>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->marca }}</td>
					<td>{{ $producto->pvp }}</td>
					<td>{{ $producto->stock_minimo }}</td>
					<td>{{ $producto->stock_maximo }}</td>
					<td>{{ $producto->imagen }}</td>
					<td>{{ $producto->estado }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $productos->render() !!}
@endsection