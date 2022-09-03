<style type="text/css">
	#book_label{
		font-weight: bold;
		color: #c80700;
	}

	#btn_Comment{
		padding: 6px;
		font-weight: bold;
		background-color: red;
		color: white;
		border: none;
	}

#btn_Comment:hover{
		background-color: #404040;
		color: white;		
		border-bottom: 4px solid red;
	}

#btn_buy_book{
	padding: 6px;
		font-weight: bold;
		background-color: #404040;
		color: white;	
		border: none;	
	}
	#btn_buy_book:hover{
		background-color: red;
		color: white;	
		border-bottom: 4px solid #404040;	
	}
</style>

<?php
// Connect to Database
include 'database.php';


//Pick Book code from previous Page
	if(isset($_POST['book_code'])){ // if an event is set
		$book_code = $_POST['book_code']; // Pick the data
		if (!empty($book_code)) {
			// echo $book_code;
			
			$sql = "SELECT * FROM books WHERE books.code='$book_code' LIMIT 1";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) 
			{		
			while ($row = mysqli_fetch_assoc($result))
			{
					// echo $row['name']; 

						$name			= $row['name']; 
						$author 	= $row['author']; 
						$edition 	= $row['edition']; 
						$Availability = "Yes" ;
						$publish_date = $row['publish_date']; 
						$image = $row['image']; 
						$price = $row['price']; 
						$level = $row['level']; 
			}
			}

		}
	}
?>

<div class="col-md-12" id="section_title">
  <h1>Orders Placed</h1>
  <p>These are the placed orders</p>
</div>

<div class="row">
	<div class="col-md-6 col-sm-12">
				<img width="100%" 
								id="image_book" 
								src="images/books/<?php echo $image; ?>">
	</div><!-- End column -->
	<div class="col-md-6">

		<table class="table table-bordered table-condensed">
				<tr>
					<td id="book_label">Book Code</td>
					<td><?php echo $book_code; ?></td>
				</tr>

				<tr>
					<td id="book_label">Name</td>
					<td><?php echo $name; ?></td>
				</tr>

				<tr>
					<td id="book_label">Level</td>
					<td><?php echo $level; ?></td>
				</tr>

				<tr>
					<td id="book_label">author</td>
					<td><?php echo $author; ?></td>
				</tr>

				<tr>
					<td id="book_label">Edition</td>
					<td><?php echo $edition; ?></td>
				</tr>

				<tr>
					<td id="book_label">Date Published</td>
					<td><?php echo $publish_date; ?></td>
				</tr>

				<tr>
					<td id="book_label">Price</td>
					<td><?php echo $price; ?></td>
				</tr>

				<tr>
					<td id="book_label">Availability</td>
					<td><?php echo $Availability; ?></td>
				</tr>

				<tr>
					<td></td>
					<td>

							<button 
											id="btn_buy_book"
											onclick="make_order(this, 'red', '<?php echo $book_code; ?>' )">
											<i class="fa-solid fa-cart-shopping"></i>&nbsp; 
									Place Order
								</button>

							<button 
											id="btn_Comment"
											onclick="book_details(this, 'red', '<?php echo $book_code; ?>' )">
											<i class="fa-solid fa-comment"></i>&nbsp; 
									Comment
								</button>
					</td>
				</tr>

			</table>

	</div><!-- End column -->
</div><!-- End row -->

<script type="text/javascript">
	function book_details(element, color, book_code) 
	{
	  	// element.style.color = color;
	  	// alert(book_code);

			$("#content_div").load(
	 			"comment_on_book.php", 
	 			{book_code : book_code}
	 		);
	}

	function make_order(element, color, book_code) 
	{
	  	// element.style.color = color;
	  	// alert(book_code);

			$("#content_div").load(
	 			"make_order.php", 
	 			{book_code : book_code}
	 		);
	}

</script>