@extends('app')


@section('content')

	<div class="col-lg-6">
		<div class="well bs-component">
			{!! Form::open(['route' => 'productos.store', 'class' => 'form-horizontal', 'files' => true]) !!}

				<fieldset>
			    	<legend>Registrar Productos</legend>
					@include('productos.partials.form')
				</fieldset>
				
			{!! Form::close() !!}
		</div>
	</div>

@endsection