@extends('app')


@section('content')

	<h1>Registrar Productos</h1>

	{!! Form::open(['route' => 'productos.store', 'class' => 'col-lg-12']) !!}

		@include('productos.partials.form')

	{!! Form::close() !!}


@endsection