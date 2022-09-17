<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book Store - By Kibirango Gerald</title>
		<link rel="icon" type="image/x-icon" href="images/favicon.png">

		<!-- connect jquery -->
		<script type="text/javascript" src="libraries/jquery/jquery-3.6.0.min.js"></script>	
		<script type="text/javascript" src="libraries/custom.js"></script>
		<script type="text/javascript" src="libraries/custom_form.js"></script>
		<link rel="stylesheet" type="text/css" href="libraries/custom.css">

		<!-- bootstrap -->
		<link rel="stylesheet" href="libraries/bootstrap/bootstrap-3.4.1.min.css">
		<script  type="text/javascript" src="libraries/bootstrap/bootstrap-3.4.1.min.js"></script>

		<!-- Font icon -->
		<link rel="stylesheet" type="text/css" href="libraries/fontawesome-free-6.1.2-web/css/all.css">
		<link rel="stylesheet" type="text/css" href="libraries/fontawesome-free-6.1.2-web/css/fontawesome.min.css">

	</head>
	<body id="mybody">

		<!-- Menu -->
		<div id="div_menu">
			<button id="btn_book_list" class="btn_menu">Books</button>
			<button id="btn_order_list" class="btn_menu">View Orders</button>		
			<button id="btn_order_make" class="btn_menu">Make Order</button>
		</div>

		<div id="content_div">
			<?php
			 include ('views/order_list.php'); 
			?>
		</div>

		<script type="text/javascript" src="libraries/custom.js"></script>
	</body>
</html>