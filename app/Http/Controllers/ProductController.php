<?php
namespace stock\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProductController extends Controller
{
	public function list ()
	{
		$products = DB::select ( 'SELECT * FROM products' );

		return view ( 'products.list' )->with ( 'products', $products );
	}

	public function view ( $id )
	{
		$product = DB::select ( 'SELECT * FROM products WHERE id = ?', [ $id ] );
		if ( empty ( $product ) )
		{
			return 'This product does not exist';
		}

		return view ( 'products.view' )->with ( 'product', $product[0] );
	}

	public function new ()
	{
		return view ( 'products.form' );
	}

	public function add ()
	{
		$name = Request::input ( 'name' );
		$description = Request::input ( 'description' );
		$value = Request::input ( 'value' );
		$quantity = Request::input ( 'quantity' );

		DB::table ( 'products' )->insert ( [
			'name' => $name,
			'value' => $value,
			'description' => $description,
			'quantity' => $quantity
		] );

		return view ( 'products.added' )->with ( 'name', $name );
	}
}