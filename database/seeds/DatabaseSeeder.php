<?php

use App\Contact;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
           'first_name'    =>  'Джон',
           'family_name'   =>  'Сноу',
           'email'         =>  'john_snow@abv.bg',
           'password'      =>  Hash::make('123456'),
           'role'          =>  'administrator'
       ]);

		App\Category::create([
			'category_name'	=> 'Boards'
		]);

		Product::create([
			'product_name'	=> 'Marijka',
	        'product_content'=> 'Ivancho',
	        'product_price'	=> 200,
	        'product_quantity'=> 2,
	        'category_id' => 1
		]);

	}

}
