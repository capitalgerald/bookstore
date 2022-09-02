<?php
// Connect to Database
include 'database.php';


	//Pick Book code from previous Page
	if(isset($_POST['book_code'])){ // if an event is set
		$book_code = $_POST['book_code']; // Pick the data
		if (!empty($book_code)) {
			// echo $book_code;
		}
	}

?>