<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard ();

        $this->call ( 'ProductTableSeeder' );
    }
}

class ProductTableSeeder extends Seeder
{
	public function run ()
	{
		DB::insert ( 'INSERT INTO products (
			name, quantity, value, description )
		VALUES
			( ?, ?, ?, ? )
		', [ 'Refrigerator', 2, 5900.00, 'Side by Side with ice on the door' ] );

		DB::insert ( 'INSERT INTO products (
			name, quantity, value, description )
		VALUES
			( ?, ?, ?, ? )
		', [ 'Cooker', 5, 950.00, 'Automatic Panel and eletric oven' ] );

		DB::insert ( 'INSERT INTO products (
			name, quantity, value, description )
		VALUES
			( ?, ?, ?, ? )
		', [ 'Microwaves', 1, 1520.00, 'Send SMS when finished heat' ] );
	}
}