<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factura_productos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('factura_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->integer('cantidad');
			$table->timestamps();
                        
            $table->foreign('factura_id')
                    ->references('id')->on('facturas')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
            $table->foreign('producto_id')
                    ->references('id')->on('productos')
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
		Schema::drop('factura_productos');
	}

}
