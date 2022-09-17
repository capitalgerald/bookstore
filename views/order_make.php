	<?php
	// Connect to Database
	include 'database.php';


	  //Pick Book code from previous Page
	  if(isset($_POST['book_code'])){
		$book_code = $_POST['book_code'];
		if (!empty($book_code)) {
		  // echo $book_code;
		}
	  }
	?>

	<style type="text/css">
		#mytable{
		  border: 1px solid #c80700;
		}
		#tr_books{
		  border-bottom: 1px solid #c80700;
		}
		#th_books{
		  padding: 3px;
		  text-align: center;
		  background-color: #404040;
		  color: white;
		}
		#table_body{
			background-color: ededed;
			height: 200px;
			overflow-y: scroll;
		}
		#td_books{
		  padding: 3px;
		}
		#label{
		  color: red;
		  margin-top: 5px;
		}

	/* Style Buttons */
	 #btn_buy_book{
		padding: 6px;
		font-weight: bold;
		background-color: red;
		color: white;
		border: none;
	  }

	#btn_buy_book:hover{
		background-color: #404040;
		color: white;   
		border-bottom: 4px solid red;
	  }

	#btn_reset_form{
	  margin-right: 5px;
	 padding: 6px;
		font-weight: bold;
		background-color: #404040;
		color: white;
		border: none;
	  }
	  #btn_reset_form:hover{
		color: white; 
		border-bottom: 4px solid red; 
	  }

	  #btn_reset_copies{
		background-color: #ededed;
		color: black;
		 border: 1px solid black; 
		 border-radius: 4px;      
		 padding: 3px 6px 3px 6px;
		 cursor: pointer;
	  }
	</style>

	<div class="col-md-12" id="section_title">
	  <h1>Place your Order</h1>
	  <p>Choose from the availabel books</p>
	</div>

	<div class="row" id="order_form">
	  <div class="col-md-12">
		<form id="form_buy_book"> 
			
			  <!-- name -->
			  <div class="form-group"> 
				<i class="fa-solid fa-user"></i>&nbsp;  
				<label for="name" id="label">Full name : *</label>
				<input type="text" class="form-control" id="name" required >
			  </div>

			  <!-- email -->
			  <div class="form-group"> 
				<i class="fa-solid fa-envelope"></i>&nbsp;  
				<label for="email" id="label">Email address : *</label>
				<input type="email" class="form-control" id="email" required/>
			  </div>


			  <!-- Phone number -->
			  <div class="form-group"> 
				<i class="fa-solid fa-phone"></i>&nbsp;  
				<label for="phone" id="label">Phone number : *</label>
				<input type="tel" class="form-control" id="phone" required>
			  </div>

			  <!-- Start: Select Address -->
			  <div class="form-group">
				<i class="fa-solid fa-location-dot"></i>&nbsp;  
				<label id="label">Chosen desired location for delivery</label>
				(CSV file Needed)
				<p style="font-size: 14px;">Data Source : <a href="http://www.lcmt.org/uganda/">http://www.lcmt.org/uganda/</a></p>     
			  </div>
					 
			  



			  <!-- Country -->
			 <div class="form-group">
				  Country
				  <select id="country" class="form-control" required onchange="country_change(this.value)">
					  <optgroup label="Select - Uganda">
					  	<option></option>						  
						<?php 
							$sql2 = "SELECT DISTINCT(country) FROM address";
							$result2 = mysqli_query($conn, $sql2);

							if (mysqli_num_rows($result2) > 0) 
							{   
								while ($row = mysqli_fetch_assoc($result2))
								{
									?>							
									<option value="<?php echo $row['country']; ?>">
										<?php echo $row['country']; ?>									
									</option>
									<?php 
								}
							  } else {
								echo "There are no countries yet";
							  }
							?>
					  </optgroup>
				  </select>
			  </div>





			  <!-- Districts -->
			  <div class="form-group" id="district_block">
				Districts
				<select id="district" class="form-control" required>
					<optgroup label="Select - Luwero">
						<option></option>
						<?php 
							$sql2 = "SELECT DISTINCT(district) FROM address where country='Uganda'";
							$result2 = mysqli_query($conn, $sql2);

							if (mysqli_num_rows($result2) > 0) 
							{   
								while ($row = mysqli_fetch_assoc($result2))
								{
									?>							
									<option><?php echo $row['district']; ?></option>
									<?php 
								}
							  } else {
								echo "There are no districts yet";
							  }
							?>
					</optgroup>
				</select>
			  </div>






			  <!-- County -->
			  <div class="form-group" id="county_block">
				  County
				  <select id="county" class="form-control" required>
					  <optgroup label="Select - Katikamu South">
					  	<option></option>
						<?php 
						$sql2 = "SELECT DISTINCT(county) FROM address where country='Uganda' AND district='Luwero'";
						$result2 = mysqli_query($conn, $sql2);

						if (mysqli_num_rows($result2) > 0) 
						{   
							while ($row = mysqli_fetch_assoc($result2))
							{
								?>							
								<option><?php echo $row['county']; ?></option>
								<?php 
							}
						  } else {
							echo "There are no counties yet";
						  }
						?>
					  </optgroup>
				  </select>
			  </div>





			  <!-- Sub Counties -->
			  <div class="form-group" id="subcounty_block">
				Sub Counties
				<select id="subcounty" class="form-control" required>
				  <optgroup label="Select - Makulubita">
				  	<option></option>
						<?php 
						$sql2 = "SELECT DISTINCT(subcounty) FROM address where country='Uganda' AND district='Luwero' AND county='Katikamu South'";
						$result2 = mysqli_query($conn, $sql2);

						if (mysqli_num_rows($result2) > 0) 
						{   
							while ($row = mysqli_fetch_assoc($result2))
							{
								?>							
								<option><?php echo $row['subcounty']; ?></option>
								<?php 
							}
						  } else {
							echo "There are no subcounties yet";
						  }
						?>
				  </optgroup>
				</select>
			 </div>






			 <!-- Parish -->
			 <div class="form-group" id="parish_block">
				  Parish
				  <select id="parish" class="form-control" required>
					  <optgroup label="Select - Mawale">
					  	<option></option>
							<?php 
							$sql2 = "SELECT DISTINCT(parish) FROM address where country='Uganda' AND district='Luwero' AND county='Katikamu South' AND subcounty='Makulubita'";
							$result2 = mysqli_query($conn, $sql2);

							if (mysqli_num_rows($result2) > 0) 
							{   
								while ($row = mysqli_fetch_assoc($result2))
								{
									?>							
									<option><?php echo $row['parish']; ?></option>
									<?php 
								}
							  } else {
								echo "There are no parishes yet";
							  }
							?>
						</optgroup>
				  </select>
			  </div>




			  <!-- Village -->
			  <div class="form-group" id="village_block">
				  Village
				  <select id="village" class="form-control" required>
					  <optgroup label="Select - Kawumu">
					  	<option></option>
							<?php 
							$sql2 = "SELECT DISTINCT(village) FROM address where country='Uganda' AND district='Luwero' AND county='Katikamu South' AND subcounty='Makulubita' AND parish='Mawale' ";
							$result2 = mysqli_query($conn, $sql2);

							if (mysqli_num_rows($result2) > 0) 
							{   
								while ($row = mysqli_fetch_assoc($result2))
								{
									?>							
									<option><?php echo $row['village']; ?></option>
									<?php 
								}
							  } else {
								echo "There are no villages yet";
							  }
							?>
					   </optgroup>
					</select>
			 </div>





			<!-- Allow the user to select books and enter copies he/she wants -->
			<div class="form-group">
				<i class="fa-solid fa-book"></i>&nbsp;  
				<label id="label">Select books you want</label>&nbsp;  

				<!-- Show the user the number of books on stock -->
				<span id="count_books"></span>
				<span id="btn_reset_copies">Reset</span>
			</div>

			  
			  <!-- Start (Select books) -->
			  <div class="form-group" id="table_body">

				<table id="mytable">
					<thead>                 
						<th id="th_books">Book Name</th>
						<th id="th_books">Copies</th>
						<th></th>
					</thead>
					<tbody>                
						<?php 
						$sql = "SELECT * FROM books ORDER BY books.id DESC";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) 
						{   
							while ($row = mysqli_fetch_assoc($result))
							{
							   
							   $BookCode = $row['code'];
							   $BookName = $row['name'];
								?>
								<tr id="tr_books">

								  <!-- book name -->
								  <td id="td_books" style="vertical-align: middle;">                          
									<label><?php echo $BookName; ?></label>
								  </td>
								  
								  <!-- book copies -->
								  <td id="td_books">
									  <input 
										class="form-control" 
										type="text" 
										name="copies"
										maxlength="4" 
										size="4"
										id="<?php echo $BookCode; ?>"                                     
										onblur="myFunction(this, '<?php echo $BookCode; ?>', '<?php echo $BookName; ?>')">
								  </td>
								  <td>
									<span id="<?php echo $BookCode; ?>_check" class="copies_check">
									  <i class="fa-solid fa-square-check"></i>&nbsp;
									</span>
									<span id="<?php echo $BookCode; ?>_x"></span>                           
								  </td>

								</tr>
								<?php 
							}
						  } else {
							echo "There are no books yet";
						  }
						?>
					  </tbody>
				  </table>             
			  </div>
			  <!-- End: form-group (Select books) -->

			   <p id="all_copies"></p>

		  <!-- Start: Comment -->
		  <div class="form-group">
			  <i class="fa-solid fa-comment"></i>&nbsp;  
			  <label for="mycomment" id="label">Comment (Give any additional info)</label>
			  <textarea class="form-control" rows="5" id="mycomment" required></textarea>
		  </div>
		  <!-- Start: Comment -->

			
			  <button class="btn" id="btn_buy_book" style="float: right; ">
				<i class="fa-solid fa-cart-shopping"></i>&nbsp;  Place Order
			  </button>
		  <!--
			  <button class="btn" id="btn_reset_form" style="float: right; ">
				<i class="fa-solid fa-cart-shopping"></i>&nbsp;  Reset
			  </button>
	-->

		</form>
	  </div><!-- End column -->
	</div><!-- End row -->


	<br><br><br>



	  <script type="text/javascript">
			var copies_check = document.getElementsByClassName("copies_check");
			for (let i = 0; i < copies_check.length; i++) { 
				copies_check[i].style.display = "none";
			}  
	  </script>


	<script type="text/javascript">
		var book_copies = []; // initialize an array
		function myFunction(myelement, mybookcode, mybookname)
		{
			var myvalue = document.getElementById(mybookcode).value; // alert(myvalue); 
			document.getElementById(mybookcode).disabled = true;
			
			
			// Don't capture empty values
			if(myvalue != "" && myvalue != 0){
				book_copies.push("["+myvalue+","+mybookname+","+mybookcode+"]"); // Add element to an Array
				document.getElementById("all_copies").innerHTML = book_copies.toString();

				// Decorate the textfield to create a difference
				myelement.style.backgroundColor = "green";
				myelement.style.color = "white";

				// Show a tick
				document.getElementById(mybookcode+"_check").style.display = "block";

				// Show user the copies entered
				document.getElementById(mybookcode+"_x").innerHTML = myvalue;
			} else {
				myelement.style.backgroundColor = "red";
				myelement.style.color = "white";
			}
		}



		$(document).ready(function()
		{
		  $("#form_buy_book").submit(function(){

			var name      = $("#name").val();
			var email     = $("#email").val();
			var phone     = $("#phone").val();

			var country   = $( "#country option:selected" ).text();
			var district  = $( "#district option:selected" ).text();
			var county    = $( "#county option:selected" ).text();

			var subcounty = $( "#subcounty option:selected" ).text();
			var parish    = $( "#parish option:selected" ).text();
			var village   = $( "#village option:selected" ).text();

			var mycomment     = $("#mycomment").val();
			var ordered_books  = book_copies.toString(); 


			// Test if all data is Picked
			// alert("Name = "+name+"\r\nEmail = "+email+"\r\nPhone = "+phone);

			// Send data to the database
			  $.post("views/order_insert.php", 
			  {
					name    : name,
					email   : email,
					phone   : phone,

					country   : country,
					district  : district,
					county    : county, 

					subcounty : subcounty,
					parish    : parish,
					village   : village,

					mycomment     : mycomment,
					ordered_books : ordered_books
			  }, 
			  function(data, status)
			  {              
				alert("Thank you, Order recieved");             
			  }); 
			  

			  // Send Email vai email
			  $.post("order_send_email.php", 
			  {
					name    : name,
					email   : email,
					phone   : phone,

					country   : country,
					district  : district,
					county    : county, 

					subcounty : subcounty,
					parish    : parish,
					village   : village,

					mycomment     : mycomment,
					ordered_books : ordered_books
			  }, 
			  function(data, status)
			  { 
				alert("Email sent successfully");             
			  }); 
			  

		  });
		});
	  </script>





	 <script type="text/javascript">
		/* This script is for allowing the user to enter copies of book he or she wants */

			// get an array of all books in stock
			var copies = document.getElementsByName("copies");  

			// count the number of all books in stock
			var copies_length = document.getElementsByName("copies").length; 

			// Show user the number of books in stock
			document.getElementById("count_books").innerHTML = "("+copies_length+" in Stock)";

			// click the button to disable Textfields
			var btn_disable = document.getElementById('btn_reset_copies');
			btn_disable.addEventListener("click", function() {

					// Loop through tag elements and disable all them one by one
					for (let i = 0; i < copies.length; i++) { 
						copies[i].disabled = false;
						copies[i].style.backgroundColor = "pink";
						copies[i].style.color = "black";
					}   

			}, true);
	  </script>



	  




	  <script type="text/javascript">
			$(document).ready(function(){
				$('#district_block').hide();
				$('#county_block').hide();
				$('#subcounty_block').hide();
				$('#parish_block').hide();
				$('#village_block').hide();
			});

							
			function country_change(country){
				$('#district_block').show();
				$('#county_block').hide();
				$('#subcounty_block').hide();
				$('#parish_block').hide();
				$('#village_block').hide();
			}
			
			
			$('#district').change(function(){
				$('#county_block').show();
				$('#subcounty_block').hide();
				$('#parish_block').hide();
				$('#village_block').hide();
			});

			$('#county').change(function(){
				$('#subcounty_block').show();
				$('#parish_block').hide();
				$('#village_block').hide();
			});
			

			$('#subcounty').change(function(){
				$('#parish_block').show();
				$('#village_block').hide();
			});

			$('#parish').change(function(){
				$('#village_block').show();
			});

	  </script>
	  


