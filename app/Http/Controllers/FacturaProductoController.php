<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Factura_Producto;
use App\Producto;
use App\Factura;
use DB;

class FacturaProductoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $Request)
	{
		$facturaProducto = Factura_Producto::Create($Request->all());
		$factura_id = $facturaProducto->factura_id;

		$query = DB::table('clientes')
            ->join('facturas', 'clientes.id', '=', 'facturas.cliente_id')
            ->join('factura_productos', 'facturas.id', '=', 'factura_productos.factura_id')
            ->join('productos', 'productos.id', '=', 'factura_productos.producto_id')
            ->select('facturas.numero', 'facturas.fecha', 'clientes.nombre', 'productos.pvp', 'factura_productos.cantidad', 'factura_productos.id' )
            ->where('factura_productos.factura_id', $factura_id)
            ->get();

		return $query;
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
