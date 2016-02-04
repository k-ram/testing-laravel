<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    // in charge of show the default products page
	public function index(){

		$products = [  
			[	
				'name'=> 'Apple',
				'price' => '$1'
			],
			[	
				'name'=> 'Banana',
				'price' => '$1.20'
			]

		];

		$mostPopularProducts = [  
			[	
				'name'=> 'Apple',
				'price' => '$1'
			],
			[	
				'name'=> 'Banana',
				'price' => '$1.20'
			]

		];

		return view('products', compact('products', 'mostPopularProducts'));
	}

}
