<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;

class ProductsController extends Controller
{
    // in charge of show the default products page
	public function index(){

		$products = \App\Product::all();
		//$products = \App\Product::where('price', '<', '1.50')->get(); // where clause

		$mostPopularProducts = [];

		return view('products', compact('products', 'mostPopularProducts'));
	}

	public function create(){

		return view('products.create');
	}

	public function store( Request $request ){

		

		// Validate
		$this->validate($request, [

			'name'			=>'required|min:2|max:20',
			'description'	=>'required|between:20,1000',
			'price'			=>'required|numeric|max:9999.99',
			'stock'			=>'required|integer|min:0|max:65535'

		]);

		// Create a new product
		$newProduct = new Product( $request->all() );

		// Populate the product with form data
		// $newProduct->name 			= $request->name;
		// $newProduct->description 	= $request->description;
		// $newProduct->stock 			= $request->stock;
		// $newProduct->price 			= $request->price;

		// Save the new product
		$newProduct->save();

		return redirect('products');

		// return 'Good to go';

		// return $request->all();

	}

	public function show( $id ){

		// Find the product with that ID
		$product = Product::findOrFail($id);

		return view('products.show', compact('product'));
	}

	public function edit( $id ){

		// Get the info about the product
		$product = Product::findOrFail($id);

		return view('products.edit', compact('product'));

	}

	public function update( Request $request, $id ) {

		$this->validate( $request, [
				'name' => 'required|min:2'
			]);

		// Find the product we are editing
		$product = Product::findOrFail($id);

		$product->name = $request->name;

		$product->save();

		return redirect('products/'.$id);


	}

}
