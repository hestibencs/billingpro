<div class="col-sm-5">
	
	<div class="form-group">
		<select name="producto_id" class="form-control floating-label" placeholder="Producto">
			@foreach($productos as $producto)
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
		@if($errors->has('producto_id'))
			<P class="text-danger">{{ $errors->first('producto_id') }}</P>
		@endif
	</div>

</div>

<div class="col-sm-1"></div>

<div class="col-sm-3">
	
	<div class="form-group">
		{!! Form::text('cantidad', null, ['class' => 'form-control floating-label', 'placeholder' => 'Cantidad:', 'required']) !!}
		@if($errors->has('cantidad'))
			<P class="text-danger">{{ $errors->first('cantidad') }}</P>
		@endif
	</div>

</div>

<div class="col-sm-1"></div>

<div class="col-sm-2">
	<div class="form-group">
		{!! Form::button('Agregar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
	</div>
</div>
