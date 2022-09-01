<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Book Store - New Vision</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>my_custom/bootstrap/css/bootstrap-4.1.0.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>my_custom/jquery/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>my_custom/bootstrap/js/bootstrap-4.1.0.min.js"></script>	

	<!-- fontawesome-free-6.1.2-web -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>my_custom/fontawesome-free-6.1.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>my_custom/fontawesome-free-6.1.2-web/css/fontawesome.min.css">


	<!-- FOr only VavBar -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




	<style type="text/css">
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		}


		#myjumbotron{
			background-color: #404040;
			color: #ffffff;
		}
		.container{
			background-color: white;
		}

		#block_header{
			background-color: #404040; /* #ddd; */
			color: white;
		}
		#block_section{
			border: 1px solid #404040;
			margin-bottom: 20px;
		}
	</style>

	<!-- -->
	<style type="text/css">
		#book_block{
			border: 2px solid #404040;
			margin: 3px;
			padding: 3px;
		}	
		#book_image{
			width: 100%;
			min-width: 80px;
		}
		#book_level{

		}
		#book_name{
			color: #c80700;
			font-weight: 900;
		}
		#book_edition{
			font-style: italic;
		}
		#book_author{
			font-weight: bolder;
		}		
		#book_money{
			font-size: 20px;
			color: #c80700;
		}
		#book_buy{
			background-color: #c80700;
			color: white;
			font-size: 16px;
			border-radius: 8px;
		}
		#book_buy:hover{
			background-color: #404040;
			border: 4px solid #c80700;
			color: white;
			font-style: italic;
			border-radius: 15px;
			font-weight: bolder;
		}
		#book_details{
			font-size: 15px;
			margin: 10px 2px 10px 2px;
			background-color: #ededed;
			padding: 5px 10px 5px 10px;
			text-align: center;
		}
	</style>



	<!-- Menu - Top (Sidebar) -->
	<style type="text/css">				
		.sidebar {
		  margin: 0;
		  padding: 0;
		  width: 200px;
		  background-color: #c80700; /* #f1f1f1  */
		  position: fixed;
		  height: 100%;
		  overflow: auto;
		  border: 3px solid white;
		}

		/*
		#sidebar_div{
			 background-color: #c80700; 
		}
		*/

		.sidebar a {
		  display: block;
		  color: white; /* black  */
		  padding: 16px;
		  text-decoration: none;
		  font-size: 17px;
		}
		 
		.sidebar a.active {
		  background-color: #404040; /* #04AA6D; */
		  color: white;
		}

		.sidebar a:hover:not(.active) {
		  background-color: #ddd; /* #555; */
		  color: black; /* white; */
		}

		div.content {
			/* background-color: pink; */
		  margin-left: 200px;
		  padding: 1px 16px;
		  padding-bottom: 100px;
		  padding-top: 10px;
		  /* 
		   margin-left: 200px;
		  padding: 1px 16px;
		  height: 1000px; 
		  */
		}

		@media screen and (max-width: 700px) {
		  .sidebar {
		    width: 100%;
		    height: auto;
		    position: relative;
		  }
		  .sidebar a {float: left;}
		  div.content {margin-left: 0;}
		}

		@media screen and (max-width: 400px) {
		  .sidebar a {
		    text-align: center;
		    float: none;
		  }
		}
	</style>




	<!-- Menu - Bootom (Naviagtion Bar) -->
	<style type="text/css">
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		}

		#navbar_bottom_id{
			border: 3px solid white;
		}

		.navbar_bottom_class {
		  overflow: hidden;
		  background-color: #c80700; /* #333; */
		  position: fixed;
		  bottom: 0;
		  width: 100%;
		}

		.navbar_bottom_class a {
		  float: left;
		  display: block;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.navbar_bottom_class a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.navbar_bottom_class a.active {
		  background-color: #404040; /* #04AA6D; */
		  color: white;
		}

		.navbar_bottom_class .icon {
		  display: none;
		}

		@media screen and (max-width: 600px) {
		  .navbar_bottom_class a:not(:first-child) {display: none;}
		  .navbar_bottom_class a.icon {
		    float: right;
		    display: block;
		  }
		}

		@media screen and (max-width: 600px) {
		  .navbar_bottom_class.responsive .icon {
		    position: absolute;
		    right: 0;
		    bottom:0;
		  }
		  .navbar_bottom_class.responsive a {
		    float: none;
		    display: block;
		    text-align: left;
		  }
		}
	</style>

	<style type="text/css">
		table {
		  border-collapse: collapse;
		  width: 100%;
		 /* border: 1px solid #ddd; */
		  margin: 2px;
		}

		td {
		  text-align: left;
		  padding: 2px;
		 /* background-color: blue; */
		}
	</style>

</head>
<body>
	

	<!-- Top Menu  (HTML) -->
	<div class="sidebar">
		<div id="sidebar_div">
			<a href="#books" class="active">Books</a>
			<a href="#authors">Authors</a>
			<a href="#categories">Categories</a>
			<a href="#levels">Levels</a>
		</div>	
	</div>



	<div class="content">

		<!-- Header -->
		<div class="jumbotron text-center" id="myjumbotron">
		  <h1>Book Store</h1>
		  <p>Place your order for different books available!</p> 
		</div>


		<div class="container">


			<div class="row" id="block_header">
				<div class="col-md-12">
					<h1>Primary Books</h1>
					<p>Primary 1 - Primary 7</p>
				</div>				
			</div>

			<div class="row" id="block_section">				
				<div class="col-sm-4">						
					<table class="table">
						<tr>
							<td>
								<img class="img-responsive" id="book_image" src="<?php echo base_url(); ?>my_custom/Images/books/Book 400x500 English1.jpg">
								<div id="book_code">PR0001</div>		
							</td>
							<td>
								<div id="book_name">Uganda Primary English Course</div>
								<div id="book_edition">3rd Edition</div>
								<div id="book_author">By Kibirango Gerald</div>
								<div id="book_level">Primary</div>
								<div>Published : <strong>8 Aug 2022</strong></div>
								<div id="book_money">15,000 UGX</div>
								<span><button class="btn btn-sm" id="book_buy"><i class="fa-solid fa-cart-shopping"></i>&nbsp; Buy Now</button></span>
								<span><button href="#" id="book_details">
								<i class="fa-solid fa-circle-info"></i>&nbsp; Details</button></span>								
							</td>
						</tr>
					</table>		
				</div>
				<div class="col-sm-4">
					<table class="table">
						<tr>
							<td>
								<img class="img-responsive" id="book_image" src="<?php echo base_url(); ?>my_custom/Images/books/Book 400x500 Math1.jpg">
								<div id="book_code">PR0002</div>		
							</td>
							<td>
								<div id="book_name">28 Act Math Lessons</div>
								<div id="book_edition">2nd Edition</div>
								<div id="book_author">By Bamwine Albert</div>								
								<div id="book_level">Primary</div>
								<div>Published : <strong>23 May 2016</strong></div>
								<div id="book_money">27,500 UGX</div>						
								<button class="btn btn-sm" id="book_buy">
									<i class="fa-solid fa-cart-shopping"></i>&nbsp; Buy Now</button>	
								<button id="book_details">
								<i class="fa-solid fa-circle-info"></i>&nbsp; Details</button>							
							</td>
						</tr>
					</table>	
				</div>
				<div class="col-sm-4">
					<table class="table">
						<tr>
							<td>
								<img class="img-responsive" id="book_image" src="<?php echo base_url(); ?>my_custom/Images/books/Book 400x500 Social1.jpg">
								<div id="book_code">PR0003</div>	
							</td>
							<td>
								<div id="book_name">The Basics of Social Research</div>
								<div id="book_edition">7th Edition</div>
								<div id="book_author">By Justine Linda</div>
								<div id="book_level">Primary</div>
								<div>Published : <strong>17 Dec 2021</strong></div>
								<div id="book_money">16,800 UGX</div>
								<button class="btn btn-sm" id="book_buy">
									<i class="fa-solid fa-cart-shopping"></i>&nbsp; Buy Now</button>
								<button id="book_details">
								<i class="fa-solid fa-circle-info"></i>&nbsp; Details</button>	
							</td>
						</tr>
					</table>	
				</div>
			</div><!-- End <div class="row"> -->


			<div class="row" id="block_header">
				<div class="col-md-12">
					<h1>Ordinary Books</h1>
					<p>Senior 1 - Senior 4</p>
				</div>				
			</div>


			<!-- row -->
			<div class="row" id="block_section">				
				<div class="col-sm-4">
					<table class="table">
						<tr>
							<td>
								<img class="img-responsive" id="book_image" src="<?php echo base_url(); ?>my_custom/Images/books/Book 400x500 Geography1.jpg">
								<div id="book_code">OR0001</div>		
							</td>
							<td>
								<div id="book_name">Rhinelands, North America, Rest of Africa and China</div>
								<div id="book_edition">3rd Edition</div>
								<div id="book_author">By Masembe Steohen</div>
								<div id="book_level">Ordinary Level</div>
								<div>Published : <strong>31 Jan 2011</strong></div>
								<div id="book_money">15,000 UGX</div>
								<span><button class="btn btn-sm" id="book_buy">
									<i class="fa-solid fa-cart-shopping"></i>&nbsp; Buy Now</button></span>
								<span><button href="#" id="book_details">
								<i class="fa-solid fa-circle-info"></i>&nbsp; Details</button></span>								
							</td>
						</tr>
					</table>	
				</div>
				<div class="col-sm-4">
					<table class="table">
						<tr>
							<td>
								<img class="img-responsive" id="book_image" src="<?php echo base_url(); ?>my_custom/Images/books/Book 400x500 Chemistry1.jpg">
								<div id="book_code">OR0002</div>
							</td>
							<td>
								<div id="book_name">Book Concise Advanced Level - Organic Chemistry</div>
								<div id="book_edition">4th Edition</div>
								<div id="book_author">By Nduga Joseph</div>
								<div id="book_level">Ordinary Level</div>
								<div>Published : <strong>27 Aug 2017</strong></div>
								<div id="book_money">38,000 UGX</div>
								<span><button class="btn btn-sm" id="book_buy">
									<i class="fa-solid fa-cart-shopping"></i>&nbsp; Buy Now</button></span>
								<span><button href="#" id="book_details">
								<i class="fa-solid fa-circle-info"></i>&nbsp; Details</button></span>								
							</td>
						</tr>
					</table>	
				</div>
				<div class="col-sm-4">
					<table class="table">
						<tr>
							<td>
								<img class="img-responsive" id="book_image" src="<?php echo base_url(); ?>my_custom/Images/books/Book 400x500 History1.jpg">
								<div id="book_code">OR0003</div>	
							</td>
							<td>
								<div id="book_name">History East Africa</div>
								<div id="book_edition">11th Edition</div>
								<div id="book_author">By Nakimera Esther</div>
								<div id="book_level">Ordinary Level</div>
								<div>Published : <strong>3 Sep 2018</strong></div>
								<div id="book_money">46,000 UGX</div>
								<span><button class="btn btn-sm" id="book_buy">
									<i class="fa-solid fa-cart-shopping"></i>&nbsp; Buy Now</button></span>
								<span><button href="#" id="book_details">
									<i class="fa-solid fa-circle-info"></i>&nbsp; Details</button></span>								
							</td>
						</tr>
					</table>	
				</div>
			</div><!-- End <div class="row"> -->


			<div class="row" id="block_header">
				<div class="col-md-12">
					<h1>advanced Books</h1>
					<p>Senior 5 - Senior 6</p>
				</div>				
			</div>
			<!-- row -->
			<div class="row" id="block_section">				
				<div class="col-md-4">
					Book 1
				</div>
				<div class="col-md-4">
					Book 2
				</div>
				<div class="col-md-4">
					Book 3
				</div>
			</div><!-- End <div class="row"> -->		


			<div class="row" id="block_header">
				<div class="col-md-12">
					<h1>Tertiary Books</h1>
					<p>Skills Development</p>
				</div>				
			</div>
			<!-- row -->
			<div class="row" id="block_section">				
				<div class="col-md-4">
					Book 1
				</div>
				<div class="col-md-4">
					Book 2
				</div>
				<div class="col-md-4">
					Book 3
				</div>
			</div><!-- End <div class="row"> -->

			<div class="row" id="block_header">
				<div class="col-md-12">
					<h1>Diploma Books</h1>
					<p>Successful completion of a course of study</p>
				</div>				
			</div>
			<!-- row -->
			<div class="row" id="block_section">				
				<div class="col-md-4">
					Book 1
				</div>
				<div class="col-md-4">
					Book 2
				</div>
				<div class="col-md-4">
					Book 3
				</div>
			</div><!-- End <div class="row"> -->


			<div class="row" id="block_header">
				<div class="col-md-12">
					<h1>Degree Books</h1>
					<p>University signifying</p>
				</div>				
			</div>
			<!-- row -->
			<div class="row" id="block_section">				
				<div class="col-md-4">
					Book 1
				</div>
				<div class="col-md-4">
					Book 2
				</div>
				<div class="col-md-4">
					Book 3
				</div>
			</div><!-- End <div class="row"> -->

		</div> <!-- End <div class="container"> -->		
	</div><!-- End <div class="content"> -->





	<!-- Menu - Bottom (Navigation Bar) -->
	<div class="navbar_bottom_class" id="navbar_bottom_id">
		<a href="#offers" class="active">Offers</a>
		<a href="#packages">Packages</a>
		<a href="#about">About</a>	
		<a href="#contact">Contact</a>			
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>

	<!-- Menu (Bottom) -->
	<script>
		function myFunction() {
		  var x = document.getElementById("navbar_bottom_id");
		  if (x.className === "navbar_bottom_class") {
			x.className += " responsive";
		  } else {
			x.className = "navbar_bottom_class";
		  }
		}
	</script>





</body>
</html>
