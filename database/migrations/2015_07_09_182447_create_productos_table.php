<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo',50)->unique();
            $table->string('nombre');
			$table->string('marca');
            $table->integer('pvp');
            $table->integer('stock_minimo');
            $table->integer('stock_maximo');
            $table->string('imagen', 1000)->nullable();
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
		Schema::drop('productos');
	}

}
