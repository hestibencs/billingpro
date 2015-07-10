<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model {

	protected $table = 'facturas';
	protected $fillable = [
        'numero', 'fecha', 'cliente_id', 'estado'
    ];
}
