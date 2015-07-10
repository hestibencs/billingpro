<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Controllers\Controller;

use App\Producto;
use Storage;
use File;


class ProductoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$public_path = public_path();
		$productos = Producto::orderBy('nombre', 'asc')->paginate();

		foreach($productos as $producto){
			$url = $public_path.'/storage/'.$producto->imagen;
			$producto->imagen = $url;
		}

		return view('productos.index', compact('productos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProductoRequest $Request)
	{

		//obtenemos el campo file definido en el formulario
		$file = $Request->file('imagen');

		//obtenemos el nombre del archivo
		$nombreImagen = $file->getClientOriginalName();

		//indicamos que queremos guardar un nuevo archivo en el disco local
		Storage::disk('local')->put($nombreImagen, File::get($file));

		$codigo = 		$Request->input('codigo');
		$nombre = 		$Request->input('nombre');
		$marca = 		$Request->input('marca');
		$pvp = 			$Request->input('pvp');
		$stock_minimo = $Request->input('stock_minimo');
		$stock_maximo = $Request->input('stock_maximo');
		$imagen = 		$nombreImagen;
		$estado = 		$Request->input('estado');

		$producto = Producto::Create([
			'codigo' => $codigo, 
			'nombre' => $nombre, 
			'marca' => $marca, 
			'pvp' => $pvp, 
			'stock_minimo' => $stock_minimo, 
			'stock_maximo' => $stock_maximo, 
			'imagen' => $imagen, 
			'estado' => $estado
		]);
		
		return redirect('productos');
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
