@extends('master')

@section('content')

	<h1>Products</h1>

	<h2>What's hot right now</h2>
	@foreach($mostPopularProducts as $product)
		<p> {{ $product['name'] }} </p>
	@endforeach

	<h2>Latest Products</h2>

	@foreach($products as $product)
		<p> {{ $product->name }} at {{ $product->price }} 
		each and we have  {{ $product->stock }} in stock</p>
	@endforeach

@endsection