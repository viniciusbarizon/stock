<?php
namespace stock\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProductController extends Controller
{
	public function list ()
	{
		$products = DB::select ( 'SELECT * FROM products' );

		return view ( 'product.list' )->with ( 'products', $products );
	}

	public function view ( $id )
	{
		$product = DB::select ( 'SELECT * FROM products WHERE id = ?', [ $id ] );
		if ( empty ( $product ) )
		{
			return 'This product does not exist';
		}

		return view ( 'product.view' )->with ( 'product', $product[0] );
	}
}