<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

	protected $table = 'productos';
	protected $fillable = [
        'codigo', 'nombre', 'marca', 'pvp', 'stock_minimo', 'stock_maximo', 'imagen', 'estado'
    ];
}
