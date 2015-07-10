<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facturas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('numero', 100)->unique();
            $table->date('fecha');
            $table->integer('cliente_id')->unsigned();
            $table->enum('estado', ['activo', 'inactivo']);
			$table->timestamps();
                        
            $table->foreign('cliente_id')
                    ->references('id')->on('clientes')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facturas');
	}

}
