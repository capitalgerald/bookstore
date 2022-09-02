<div class="col-md-12" id="section_title">
  <h1>Orders Placed</h1>
  <p>These are the placed orders</p>
</div>


<div style="overflow-x:auto;">
	<?php 
	include 'database.php'; // include ('database.php'); 

	// $data = $_POST['data']; // Recieve data from the previous page

	$sql = "SELECT * FROM orders";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		?>
		
		<table class="table table-striped table-bordered">
			 <thead>
			 	<th>No</th>
			 	<th>Name</th>
			 	<th>Phone</th>
			 	<th>Email</th>
			 	<th>Order</th>
			 	<th>Address</th>
			 	<th>comment</th>
			 </thead>
			<?php
			$num =1;
			while ($row = mysqli_fetch_assoc($result))
			{
				?>
					<tr>
						<td><?php echo $num; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['order']; ?></td>
						<td><?php echo $row['latitude']; ?><br><?php echo $row['longitude']; ?> ]</td>
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