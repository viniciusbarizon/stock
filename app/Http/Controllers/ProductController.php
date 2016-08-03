<?php
namespace stock\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
	public function list ()
	{
		$html = "<h1>Product List with Laravel</h1>";

		$html .= "<ul>";

		$products = DB::select( 'SELECT * FROM products' );

		foreach ( $products as $p )
		{
			$html .= '<li>Name: ' . $p->name . ', Description: ' . $p->description . '</li>';
		}

		$html .= '</ul>';

		return $html;
	}
}