<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>Stock Control</title>
	</head>
	<body>
		<div class="container">
			<h1>Products List</h1>
			<table class="table table-striped table-bordered table-hover">
				<?php
				foreach ( $products as $product )
				{
				?>
					<tr>
						<td><?php echo $product->name; ?></td>
						<td><?php echo $product->value; ?></td>
						<td><?php echo $product->description; ?></td>
						<td><?php echo $product->quantity; ?></td>
						<td><a href="products/view/<?php echo $product->id; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</body>
</html>