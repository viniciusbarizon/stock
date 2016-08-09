<html>
	<head>
		<link href="css/app.css" rel="stylesheet">
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
					</tr>
				<?php	
				}
				?>
			</table>
		</div>
	</body>
</html>