@extends('app')


@section('content')

	<div class="col-lg-12">
		<div class="well bs-component">
			{!! Form::open(['route' => 'facturas.store', 'class' => 'form-horizontal', 'id' => 'formFactura']) !!}

				<fieldset>
			    	<legend>Registrar Facturas</legend>
					@include('facturas.partials.form')
				</fieldset>
				
			{!! Form::close() !!}
		</div>
	</div>

	<div class="col-lg-12" style="display: none;" id="aggProductoDisplay">
		<div class="well bs-component">
			{!! Form::open(['route' => 'facturaproductos.store', 'class' => 'form-horizontal', 'id' => 'aggProducto']) !!}
			{!! Form::hidden('factura_id', null, ['id' => 'factura_id']) !!}
				<fieldset>
			    	<legend>Agregar Producto</legend>
					@include('facturas.partials.formProducto')
				</fieldset>
				
			{!! Form::close() !!}
		</div>
	</div>
	
	<div class="col-lg-12" id="tableProductos">
		<div class="well bs-component">
			{!! Form::open(['route' => 'facturas.store', 'class' => 'form-horizontal']) !!}

				<fieldset>
					@include('facturas.partials.formTable')
				</fieldset>
				
			{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')
	
	{!! Html::script('js/createFactura.js') !!}

@endsection