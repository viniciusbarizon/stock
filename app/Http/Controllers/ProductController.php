<?php
namespace stock\Http\Controllers;

use Illuminate\Support\Facades\DB;
use stock\Product;
use Request;

class ProductController extends Controller
{
	public function list ()
	{
		$products = Product::all ();

		return view ( 'products.list' )->with ( 'products', $products );
	}

	public function listJSON ()
	{
		$products = Product::all ();

		return response ()->json ( $products );
	}

	public function view ( $id )
	{
		$product = Product::findOrFail ( $id );
		return view ( 'products.view' )->with ( 'product', $product );
	}

	public function new ()
	{
		return view ( 'products.new' );
	}

	public function create ()
	{
		Product::create ( Request::all () );
		return redirect ()->route ( 'products.index' )->withInput ( Request::only ( 'name' ) );
	}

	public function update ( $id )
	{
		$product = Product::findOrFail ( $id );

		$product->name = Request::input ( 'name' );
		$product->value = Request::input ( 'value' );
		$product->description = Request::input ( 'description' );
		$product->quantity = Request::input ( 'quantity' );

		$product->save ();

		return redirect ()->route ( 'products.index' )->withInput ( Request::only ( 'name' ) );
	}

	public function delete ( $id )
	{
		$product = Product::findOrFail ( $id );
		$product->delete ();

		return redirect ()->action ( 'ProductController@list' );
	}

	public function edit ( $id )
	{
		$product = Product::findOrFail ( $id );
		return view ( 'products.edit' )->with ( 'product', $product );
	}
}