@extends ( 'layout.main' )

@section ( 'content' )
	<h1>New Product</h1>

	<form action="/products/add" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token () }}}">

		<div class="form-group">
			<label>Name</label>
			<input name="name" class="form-control">
		</div>

		<div class="form-group">
			<label>Description</label>
			<input name="description" class="form-control">
		</div>

		<div class="form-group">
			<label>Value</label>
			<input name="value" class="form-control">
		</div>

		<div class="form-group">
			<label>Quantity</label>
			<input name="quantity" type="number" class="form-control">
		</div>

		<button type="submit" class="btn btn-primary btn-block">Submit</button>
	</form>
@stop