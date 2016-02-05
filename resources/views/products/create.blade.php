@extends('master')
@section('content')

<h1>Add new Product</h1>

<form action="/products/store" method="post">
	
	{!! csrf_field() !!}

	<div>
		<label for="name">Name: </label>
		<input type="text" value=" {{ old('name') }}" id="name" name="name" placeholder="Potato">
		@if($errors->first('name'))
			<span>{{ $errors->first('name') }}</span>
		@endif
	</div>

	<div>
		<label for="description">Description: </label>
		<textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
		@if($errors->first('description'))
			<span>{{ $errors->first('description') }}</span>
		@endif
	</div>

	<div>
		<label for="price">Price: </label>
		<input type="text" step=".01" value=" {{ old('price') }}" name="price" id="price">
		@if($errors->first('price'))
			<span>{{ $errors->first('price') }}</span>
		@endif
	</div>

	<div>
		<label for="stock">Stock: </label>
		<input type="text" value=" {{ old('stock') }}" name="stock" id="stock">
		@if($errors->first('stock'))
			<span>{{ $errors->first('stock') }}</span>
		@endif
	</div>

	<input type="submit" value="Add Product">

</form>


@endsection
