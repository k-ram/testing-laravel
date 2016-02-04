<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    // in charge of show the default products page
	public function index(){

		$products = \App\Product::all();
		//$products = \App\Product::where('price', '<', '1.50')->get(); // where clause

		$mostPopularProducts = [];

		return view('products', compact('products', 'mostPopularProducts'));
	}

}
