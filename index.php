<?php	include ('database.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book Store - Vision Group</title>

		<link rel="stylesheet" type="text/css" href="customCSS.css">
		<script type="text/javascript" src="jquery-v3.6.0.min.js"></script>
		<script type="text/javascript" src="customJS.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
	<body id="mybody">
		<div class="container">

			<!-- Menu -->
			<div id="div_menu">
				<button id="btn_books" class="btn btn-success btn_menu">Books</button>
				<button id="btn_orders" class="btn btn-success btn_menu">Orders</button>		
				<button id="btn_make_order" class="btn btn-success btn_menu">Make Order</button>
			</div>

			<div id="content_div">
				<?php	include ('books.php'); ?>
			</div>

		</div>
	</body>
</html>

