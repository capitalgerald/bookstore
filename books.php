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
								<?php echo $row['code']; ?><br>
								<?php echo $row['name']; ?><br>
								<?php echo $row['author']; ?><br>
								<?php echo $row['edition']; ?><br>
								<?php echo $row['level']; ?><br>
								<?php echo $row['publish_date']; ?><br>
								<?php echo $row['price']; ?>
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
