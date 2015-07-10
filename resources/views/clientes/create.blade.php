@extends('app')


@section('content')

	<h1>Registrar Clientes</h1>

	{!! Form::open(['route' => 'clientes.store', 'class' => 'col-lg-12']) !!}

		@include('clientes.partials.form')

	{!! Form::close() !!}


@endsection