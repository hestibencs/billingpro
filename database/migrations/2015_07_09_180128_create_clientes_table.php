<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('nit')->unique();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->integer('telefono');
            $table->string('email')->nullable();
            $table->string('contacto')->nullable();
            $table->enum('estado', ['activo', 'inactivo']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
