@extends ( 'layout.main' )

@section ( 'content' )
	<h1>Edit Product</h1>

	<form action="{{ action ( 'ProductController@update' ,$product->id ) }}" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token () }}}">

		<div class="form-group">
			<label>Name</label>
			<input name="name" class="form-control" value="{{ $product->name }}">
		</div>

		<div class="form-group">
			<label>Description</label>
			<input name="description" class="form-control" value="{{ $product->description }}">
		</div>

		<div class="form-group">
			<label>Value</label>
			<input name="value" class="form-control" value="{{ $product->value }}">
		</div>

		<div class="form-group">
			<label>Quantity</label>
			<input name="quantity" type="number" class="form-control" value="{{ $product->quantity }}">
		</div>

		<button type="submit" class="btn btn-primary btn-block">Edit</button>
	</form>
@stop