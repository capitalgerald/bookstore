<style type="text/css">
	#td_image{

	}
	#td_text{
		vertical-align: top;
		padding-left: 5px;
	}
	#column_book{
		margin-bottom: 10px;
	}
 #btn_details{

 }
	#btn_buy{
		text-align: center;
		background-color: #c80700;
		color: white;
		padding: 2px 6px 2px 6px;
		font-size: 14px;
		border: none;
	}
	#btn_buy:hover{
		font-style: italic;
		background-color: #404040;
		color: white;
		font-weight: bold;
		padding: 4px 8px 4px 8px;
		border-radius: 5px;
	}


	#book_name{
		font-weight: bold;
		font-size: 16px;
	}
	#book_price{
		font-weight: bold;
		font-size: 20px;
		color: #c80700;
	}
</style>

<div class="col-md-12" id="section_title">
  <h1>Available Boooks</h1>
  <p>Look through the available books and place your order</p>
</div>

<div class="row">
	
		<?php 
		include 'database.php'; // include ('database.php'); 

		// $data = $_POST['data']; // Recieve data from the previous page

		$sql = "SELECT * FROM books";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) 
		{		
			while ($row = mysqli_fetch_assoc($result))
			{
				?>
				<div class="col-md-4" id="column_book">
					<table>
						<tr>
							<td id="td_image">
								<!-- class="img-responsive"  -->
								<img width="100%" 
								id="image_book" 
								src="images/books/<?php echo $row['image']; ?>">
							</td>
							<td id="td_text">
								<div>CODE: <?php echo $row['code']; ?></div>
								<div><span id="book_name"><?php echo $row['name']; ?></span></div>
								<div><i class="fa-solid fa-user"></i> By <b><?php echo $row['author']; ?></b></div>
								<div><i class="fa-solid fa-code-compare"></i> <?php echo $row['edition']; ?> Edition</div>
								<div><i class="fa-solid fa-user-graduate"></i> <?php echo $row['level']; ?></div>
								<div><i class="fa-solid fa-calendar-days"></i> <?php echo $row['publish_date']; ?></div>
								<div><span id="book_price"><?php echo $row['price']; ?></span>UGX</div>
								<button id="btn_buy">Buy Now</button>
								<button id="btn_details">Details</button>
							</td>
						</tr>
					</table>
				</div><!-- End column -->		
				<?php
			}
		} else {
			echo "There are no books yet";
		}
		?>
</div><!-- End row -->
