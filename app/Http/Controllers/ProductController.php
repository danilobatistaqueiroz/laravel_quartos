<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listar()
	{
		$html = '<h1>Listagem de produtos com Laravel</h1>';
		$html .= '<ul>';
		$produtos = DB::select('select * from products');
		foreach ($produtos as $p) {
			$html .= '<li> Nome: '. $p->name .',                         Descrição: '. $p->description .'</li>';
		}
		$html .= '</ul>';
		return $html;
	}

}
