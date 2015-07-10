@extends('app')


@section('content')

	<div class="page-header">
      	<h1 id="tables">Productos</h1>
    </div>
    
	<div class="bs-component">
		<table class="table table-striped table-hover">
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
						<td><img src='{{ $producto->imagen }}' border='0' width='50' height='50'></td>
						<td>{{ $producto->estado }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	{!! $productos->render() !!}
@endsection