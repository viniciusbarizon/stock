<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="/css/custom.css" rel="stylesheet">
		<title>Stock Control</title>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="products">
							Stock Laravel
						</a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/products">List</a>
							<a href="/products/new">New</a>
						</li>
					</ul>
				</div>
			</nav>

			@yield ( 'content' )

			<footer class="footer">
				<p>Laravel Book from Casa do Código</p>
			</footer>
		</div>
	</body>
</html>