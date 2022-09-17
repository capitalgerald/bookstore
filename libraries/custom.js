	// alert("Hello ");

	// Check if jQuery is loaded
	window.onload = function() 
	{
		if (window.jQuery) {  
			// alert("Yeah! jQuery is loaded");
		} else {
			alert("Ooh no. jQuery is not loaded");
		}
	}

	// Function for switching in Menu
	function switch_menu(btn, div, file)
	{
		$(btn).click(function(){
	 		$(div).load(file);
	 	});
	}

	// jquery
	$(document).ready(function(){
		switch_menu("#btn_order_list", "#content_div", "views/order_list.php");
		switch_menu("#btn_book_list", "#content_div", "views/book_list.php");					
		switch_menu("#btn_order_make", "#content_div", "views/order_make.php");
	 });