<div class="col-sm-3">
	
	<div class="form-group">
		{!! Form::text('numero', null, ['class' => 'form-control floating-label', 'placeholder' => 'Numero de Factura:', 'required']) !!}
		@if($errors->has('numero'))
			<P class="text-danger">{{ $errors->first('numero') }}</P>
		@endif
	</div>

</div>

<div class="col-sm-1"></div>

<div class="col-sm-2">
	
	<div class="form-group">
		{!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control floating-label', 'placeholder' => 'Fecha:', 'required']) !!}
		@if($errors->has('fecha'))
			<P class="text-danger">{{ $errors->first('fecha') }}</P>
		@endif
	</div>

</div>

<div class="col-sm-1"></div>

<div class="col-sm-2">
	
	<div class="form-group">
		{!! Form::select('estado',
			['activo' => 'Activo', 'inactivo' => 'Inactivo'], 'null',
			['class' => 'form-control floating-label', 'placeholder' => 'Estado', 'required'])
		!!}
		@if($errors->has('estado'))
			<P class="text-danger">{{ $errors->first('estado') }}</P>
		@endif
	</div>

</div>

<div class="col-sm-1"></div>

<div class="col-sm-2">
	<div class="form-group">
		{!! Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-primary', 'id' => 'buttonFactura']) !!}
	</div>
</div>

<div class="col-sm-8">
	
	<div class="form-group">

		<select name="cliente_id" class="form-control floating-label" placeholder="Cliente">
			@foreach($clientes as $cliente)
				<option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
			@endforeach
		</select>
		
		@if($errors->has('cliente_id'))
			<P class="text-danger">{{ $errors->first('cliente_id') }}</P>
		@endif
	</div>

</div>
