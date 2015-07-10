@extends('app')


@section('content')

	<div class="page-header">
      	<h1 id="tables">Facturas Registradas</h1>
    </div>
    
	<div class="bs-component">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Factura</th>
					<th>Fecha</th>
					<th>Cliente</th>
					<th>Total</th>
					<th>Estado</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($query as $factura)
					<tr>
						<td>{{ $factura->id }}</td>
						<td>{{ $factura->numero }}</td>
						<td>{{ $factura->fecha }}</td>
						<td>{{ $factura->nombre }}</td>
						<td>{{ $factura->pvp }}</td>
						<td>{{ $factura->estado }}</td>
						<td></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection