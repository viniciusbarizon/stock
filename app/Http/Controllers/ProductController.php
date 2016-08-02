<?php
namespace stock\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
	public function list ()
	{
		$products = DB::select('SELECT * FROM produtos');

		return "<h1>Product List with Laravel</h1>";
	}
}