@extends ( 'layout.main' )

@section ( 'content' )
	<h1>Products List</h1>

	@if ( empty ( $products ) )
		<div class='alert alert-danger'>You do not have any product.</div>
	@else
		<table class="table table-striped table-bordered table-hover">
			@foreach ( $products as $product )
				<tr class="{{ $product->quantity <= 1 ? 'danger' : '' }}">
					<td>{{ $product->name }}</td>
					<td>{{ $product->value }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->quantity }}</td>
					<td>
						<a href="products/view/{{ $product->id }}">
							<span class="glyphicon glyphicon-eye-open"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</table>
	@endif

	<h4>
		<span class='label label-danger pull-right'>
			One or less items on stock
		</span>
	</h4>
@stop