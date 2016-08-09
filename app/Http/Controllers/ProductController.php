<?php
namespace stock\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
	public function list ()
	{
		$products = DB::select( 'SELECT * FROM products' );

		return view ( 'product.list' )->with ( 'products', $products );
	}
}