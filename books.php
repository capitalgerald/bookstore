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
	#btn_buy_book{
		text-align: center;
		background-color: #c80700;
		color: white;
		padding: 2px 6px 2px 6px;
		font-size: 14px;
		border: none;
	}
	#btn_buy_book:hover{
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
		include 'database.php';

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
								<div>
										<i class="fa-solid fa-user-graduate"></i> 
										<?php echo $row['level']; ?>
								</div>
								<div>
										<i class="fa-solid fa-calendar-days"></i> 
										<?php echo $row['publish_date']; ?>
								</div>
								<div>
									<span id="book_price"><?php echo $row['price']; ?></span>UGX
								</div>

								<button 
											id="btn_buy_book"
											onclick="make_order(this, 'red', '<?php echo $row['code']; ?>' )">
											<i class="fa-solid fa-cart-shopping"></i>&nbsp; 
									Buy Now
								</button>

								<button 
											id="btn_book_details"
											onclick="book_details(this, 'red', '<?php echo $row['code']; ?>' )">
											<i class="fa-solid fa-circle-info"></i>&nbsp; 
									Details
								</button>

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

<script type="text/javascript">

// Pick Book Details
function book_details(element, color, book_code) {
  	// element.style.color = color;
  	// alert(book_code);
		$("#content_div").load(
 			"book_details.php", 
 			{book_code : book_code}
 		);

}

// Switch Menu
function switch_menu(btn, div, file)
{
	$(btn).click(function(){
 		$(div).load(file);
 	});
}

/*
$(document).ready(function(){
	var div_section = "#content_div";

	// Buy Book
	var btn_buy_book = "#btn_buy_book";
	var file_buy_book = "make_order.php";
	switch_menu(btn_buy_book, div_section, file_buy_book);

 });
 */

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
