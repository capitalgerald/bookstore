	<div id="section_header">
		<h1 id="section_header_h1">Placed Orders</h1>
		<p id="section_header_par">These are the orders placed currently</p>
	</div>

	<div class="container">
		<div class="row">
			
			<table class="table">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Orders</th>
					<th>Latitude</th>
					<th>longlitude</th>	
					<th>longlitude</th>					
				</tr>

				<?php 
		          $num = 1;
		          foreach($orders as $row): 
		            ?>
		            <tr>
		                <td><?php echo $num; ?></td>
		                <td><?php echo $row->name; ?></td>
		                <td><?php echo $row->email; ?></td>
		                <td><?php echo $row->phone; ?></td>
		                <td><?php echo $row->order; ?></td>
		                <td><?php echo $row->latitude; ?></td>
		                <td><?php echo $row->longitude; ?></td>
		                <td><?php echo $row->comment; ?></td>  	
		            </tr>
		            <?php 
		            $num++;
		          endforeach; 
		          ?>

			</table>
		</div>		
	</div>