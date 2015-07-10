<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Factura;
use App\Cliente;
use App\Producto;
use DB;

class FacturaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$query = DB::table('clientes')
            ->join('facturas', 'clientes.id', '=', 'facturas.cliente_id')
            ->join('factura_productos', 'facturas.id', '=', 'factura_productos.factura_id')
            ->join('productos', 'productos.id', '=', 'factura_productos.producto_id')
            ->select('facturas.id', 'facturas.numero', 'facturas.fecha', 'clientes.nombre', DB::raw('SUM(productos.pvp) as pvp'), 'facturas.estado' )
            ->groupBy('facturas.id')
            ->get();

		return view('facturas.index', compact('query'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$clientes = Cliente::all();
		$productos = Producto::all();
		return view('facturas.create', compact('clientes','productos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $Request)
	{
		$factura = Factura::Create($Request->all());
		$insertedId = $factura->id;
		return $insertedId;
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
