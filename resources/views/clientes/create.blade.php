@extends('app')


@section('content')

	<div class="col-lg-6">
		<div class="well bs-component">
			{!! Form::open(['route' => 'clientes.store', 'class' => 'form-horizontal']) !!}

				<fieldset>
			    	<legend>Registrar Clientes</legend>
					@include('clientes.partials.form')
				</fieldset>
				
			{!! Form::close() !!}
		</div>
	</div>

@endsection