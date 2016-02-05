@extends('master')

@section('content')

	<h1>Products</h1>

	<a href="/products/create">Add New Product</a>

	<h2>What's hot right now</h2>
	@foreach($mostPopularProducts as $product)
		<p> {{ $product['name'] }} </p>
	@endforeach

	<h2>Latest Products</h2>

	@foreach($products as $product)
		<p> <a href="/products/{{ $product->id }}"> {{ $product->name }} </a> </p>
	@endforeach

@endsection