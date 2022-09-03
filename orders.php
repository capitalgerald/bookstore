<?php 
	include 'database.php';
?>

<div class="col-md-12" id="section_title">
  <h1>Orders Placed</h1>
  <p>These are the placed orders</p>
</div>


<div>
	<?php 
	// $data = $_POST['data']; // Recieve data from the previous page
	/* SELECT * FROM `orders` ORDER BY `orders`.`id` DESC */
	$sql = "SELECT * FROM orders ORDER BY orders.id DESC";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		?>
		
		<table class="table table-striped table-bordered">
			 <thead>
			 	<th>No</th>
			 	<th><i class="fa-solid fa-user"></i>&nbsp; Name</th>
			 	<!--
			 	<th><i class="fa-solid fa-phone"></i>&nbsp; Phone</th>
			 	<th><i class="fa-solid fa-envelope"></i>&nbsp; Email</th>
			 -->
			 	<th><i class="fa-solid fa-cart-shopping"></i>&nbsp; Order</th>
			 	<th><i class="fa-solid fa-address-book"></i>&nbsp; Address</th>
			 	<th><i class="fa-solid fa-comment"></i>&nbsp; comment</th>
			 </thead>
			<?php
			$num =1;
			while ($row = mysqli_fetch_assoc($result))
			{
				?>
					<tr>
						<td><?php echo $num; ?></td>
						<td>
							<?php echo $row['name']; ?><br>
							<?php echo $row['email']; ?>	<br>
							<?php echo $row['phone']; ?>
														
						</td>
						<td><?php echo $row['order']; ?></td>
						<td>
							Country : <?php echo $row['country']; ?><br>
							District : <?php echo $row['district']; ?><br>
							County : <?php echo $row['county']; ?><br>
							Subcounty : <?php echo $row['subcounty']; ?><br>
							Parish : <?php echo $row['parish']; ?><br>
							Village : <?php echo $row['village']; ?>
						</td>
						<td><?php echo $row['comment']; ?></td>
					</tr>			
				<?php
				$num ++;
			} // End while
			?>
		</table>

		<?php
	} else {
		echo "There are no orders yet";
	}
	?>
</div>

<br><br><br>

