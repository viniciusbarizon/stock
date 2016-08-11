<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>Stock Control</title>
	</head>
	<body>
		<div class="container">
			<h1>Product Details: <?php echo $product->name; ?></h1>

			<li><b>Value:</b> R$ <?php echo $product->value; ?></li>
			<li><b>Description:</b> R$ <?php echo $product->description; ?></li>
			<li><b>Quantity:</b> <?php echo $product->quantity; ?></li>
		</div>
	</body>
</html>