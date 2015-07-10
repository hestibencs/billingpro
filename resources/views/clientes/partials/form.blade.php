<div class="col-sm-6">
	
	<div class="form-group">
		{!! Form::text('nit', null, ['class' => 'form-control floating-label', 'placeholder' => 'NIT:', 'required']) !!}
		@if($errors->has('nit'))
			<P class="text-danger">{{ $errors->first('nit') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombre:', 'required']) !!}
		@if($errors->has('nombre'))
			<P class="text-danger">{{ $errors->first('nombre') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Direccion:', 'required']) !!}
		@if($errors->has('direccion'))
			<P class="text-danger">{{ $errors->first('direccion') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('ciudad', null, ['class' => 'form-control floating-label', 'placeholder' => 'Ciudad:', 'required']) !!}
		@if($errors->has('ciudad'))
			<P class="text-danger">{{ $errors->first('ciudad') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Telefono:', 'required']) !!}
		@if($errors->has('telefono'))
			<P class="text-danger">{{ $errors->first('telefono') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::email('email', null, ['class' => 'form-control floating-label', 'placeholder' => 'Correo Electronico:']) !!}
		@if($errors->has('email'))
			<P class="text-danger">{{ $errors->first('email') }}</P>
		@endif
	</div>

	<div class="form-group">
		{!! Form::text('contacto', null, ['class' => 'form-control floating-label', 'placeholder' => 'Contacto:']) !!}
		@if($errors->has('contacto'))
			<P class="text-danger">{{ $errors->first('contacto') }}</P>
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