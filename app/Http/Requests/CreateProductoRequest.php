<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'codigo' => 'required|min:4|unique:productos,codigo',
			'nombre' => 'required|min:3',
			'marca' => 'required',
			'pvp' => 'required',
			'stock_minimo' => 'required',
			'stock_maximo' => 'required',
			'estado' => 'required'
		];
	}

}
