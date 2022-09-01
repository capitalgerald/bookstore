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
	<script type="text/javascript" src="<?php echo base_url(); ?>my_custom/popper/popper-1.16.1.min.js"></script>

	<!-- fontawesome-free-6.1.2-web -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>my_custom/fontawesome-free-6.1.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>my_custom/fontawesome-free-6.1.2-web/css/fontawesome.min.css">


	<!-- Pick Location - In the Form -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

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

		#section_header{
			background-color: #e2e2e6;
			text-align: center;
			border-bottom: 4px solid #c80700;
			margin-bottom: 4px;
			padding-top: 10px;
			margin-top: 0px;
		}
		#section_header_h1{
			font-weight: 700;
		}
		#section_header_par{
			font-size: 20px;
			font-family: "Lucida Console", "Courier New", monospace;
			/* font-variant: small-caps; */
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
<body onload='document.form1.email.focus()'>>
	

	<!-- Top Menu  (HTML) -->
	<div class="sidebar">
		<div id="sidebar_div">
			<a href="#" id="Books_view" class="active">Books</a>
			<ul>
				<li><a href="#" id="level_primary">Primary</a></li>
				<li><a href="#" id="level_ordinary">O-Level</a></li>
				<li><a href="#" id="level_advanaced">A-Level</a></li>
			</ul>
			
			<a href="#" id="orders_form">Order Now</a>
			<a href="#" id="authors_view">Authors</a>
			<a href="#" id="book_categories">Categories</a>
			<a href="#" id="academic_levels">All Levels</a>
			
			
			
		</div>	
	</div>


	<div class="content" id="content">
		<?php include 'books_view.php'; ?>
	</div><!-- End <div class="content"> -->




<div class="container">

	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h1 class="modal-title">Place Your Order</h1>
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<?php include 'make_order_form.php'; ?>
					</div><!-- End  <div class="modal-body"> -->

					<!-- Modal footer -->
					<div class="modal-footer">							
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>

			</div><!-- End class="modal-content" -->
		</div><!-- End  class="modal-dialog modal-dialog-scrollable" -->
	</div><!-- End class="modal" -->

</div><!-- End <div class="container"> -->



	<!-- Menu - Bottom (Navigation Bar) -->
	<div class="navbar_bottom_class" id="navbar_bottom_id">
		<a href="#" id="promotional_offers" class="active">Offers</a>
		<a href="#" id="packages">Packages</a>
		<a href="#" id="book_stores">Stores</a>
		<a href="#" id="orders">orders</a>		
		<a href="#" id="about">About</a>	
		<a href="#" id="contact">Contact</a>				
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


	<!-- switch Menu -->
	<script type="text/javascript">
		function switch_menu(btn_id,file_url,div_id){

			$(btn_id).click(function(){
                //alert("View Authors");
                 $.post(file_url, 
                    { name : name }, 
                    function(data, status){
                    $(div_id).html(data); 
                    // alert(status); 
                });
            });
		}

		$(document).ready(function(){

			// Trigger the modal on load
			// $("#myModal").modal('show');

			// Trigger the modal on click order button
			$("#orders_form").click(function(){
             $("#myModal").modal('show');
         });

         // Reset the form
			$("#modal_btn_reset").click(function(){
				$('#form1')[0].reset();
			});

			/*
			$("#authors_view").click(function(){
                //alert("View Authors");
                 $.post("Home/authors_view", 
                    { name : name }, 
                    function(data, status){
                    $("#content").html(data); 
                    // alert(status); 
                });
            });
		 	*/

		 	// View Book Authors
		 	var div_id 		= "#content";

			var authors_btn_id 		= "#authors_view";
			var authors_file_url 	= "Home/authors_view";			
			switch_menu(authors_btn_id, authors_file_url, div_id);

			var books_btn_id = "#Books_view";
			var books_file_url 	= "Home/books_view";
			switch_menu(books_btn_id, books_file_url, div_id);

		 	var book_categories_btn_id = "#book_categories";
			var book_categories_file_url 	= "Home/book_categories";
			switch_menu(book_categories_btn_id, book_categories_file_url, div_id);

			
			var academic_levels_btn_id = "#academic_levels";
			var academic_levels_file_url 	= "Home/academic_levels";
			switch_menu(academic_levels_btn_id, academic_levels_file_url, div_id);

			
			var promotional_offers_btn_id = "#promotional_offers";
			var promotional_offers_file_url 	= "Home/promotional_offers";
			switch_menu(promotional_offers_btn_id, promotional_offers_file_url, div_id);

			
			var packages_btn_id = "#packages";
			var packages_file_url 	= "Home/packages";
			switch_menu(packages_btn_id, packages_file_url, div_id);

			
			var book_stores_btn_id = "#book_stores";
			var book_stores_file_url = "Home/book_stores";
			switch_menu(book_stores_btn_id, book_stores_file_url, div_id);

			
			var about_btn_id = "#about";
			var about_file_url = "Home/about";
			switch_menu(about_btn_id, about_file_url, div_id);

			
			var contact_btn_id = "#contact";
			var contact_file_url = "Home/contact";
			switch_menu(contact_btn_id, contact_file_url, div_id);

			
			var level_primary_btn_id = "#level_primary";
			var level_primary_file_url = "Home/level_primary";
			switch_menu(level_primary_btn_id, level_primary_file_url, div_id);

			
			var level_ordinary_btn_id = "#level_ordinary";
			var level_ordinary_file_url = "Home/level_ordinary";
			switch_menu(level_ordinary_btn_id, level_ordinary_file_url, div_id);

			
			var level_advanaced_btn_id = "#level_advanaced";
			var level_advanaced_file_url = "Home/level_advanaced";
			switch_menu(level_advanaced_btn_id, level_advanaced_file_url, div_id);

			var orders_btn_id = "#orders";
			var orders_file_url = "Home/orders";
			switch_menu(orders_btn_id, orders_file_url, div_id);

			/*
			// orders_form
			var orders_form_btn_id = "#orders_form";
			var orders_form_file_url = "Home/orders_form";
			switch_menu(orders_form_btn_id, orders_form_file_url, div_id);
			*/
			
		 });
	</script>






</body>
</html>
