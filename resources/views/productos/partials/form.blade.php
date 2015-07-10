<div class="col-sm-12">
	
	<div class="form-group">
		{!! Form::text('codigo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Codigo:', 'required']) !!}
		@if($errors->has('codigo'))
			<P class="text-danger">{{ $errors->first('codigo') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombre:', 'required']) !!}
		@if($errors->has('nombre'))
			<P class="text-danger">{{ $errors->first('nombre') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('marca', null, ['class' => 'form-control floating-label', 'placeholder' => 'Marca:', 'required']) !!}
		@if($errors->has('marca'))
			<P class="text-danger">{{ $errors->first('marca') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('pvp', null, ['class' => 'form-control floating-label', 'placeholder' => 'Preico Venta Publico:', 'required']) !!}
		@if($errors->has('pvp'))
			<P class="text-danger">{{ $errors->first('pvp') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('stock_minimo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Stock Minimo:', 'required']) !!}
		@if($errors->has('stock_minimo'))
			<P class="text-danger">{{ $errors->first('stock_minimo') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('stock_maximo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Stock Maximo:', 'required']) !!}
		@if($errors->has('stock_maximo'))
			<P class="text-danger">{{ $errors->first('stock_maximo') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::file('imagen', ['class' => 'form-control']); !!}
		@if($errors->has('imagen'))
			<P class="text-danger">{{ $errors->first('imagen') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::select('estado',
			['activo' => 'Activo', 'inactivo' => 'Inactivo'], 'null',
			['class' => 'form-control floating-label', 'placeholder' => 'Estado', 'required'])
		!!}
		@if($errors->has('estado'))
			<P class="text-danger">{{ $errors->first('estado') }}</P>
		@endif
	</div>	

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
		</div>
	</div>
	
</div> {{-- /.col-sm-6 --}}