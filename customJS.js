
function switch_menu(btn, div, file)
{
	$(btn).click(function(){
 		$(div).load(file);
 	});
}

$(document).ready(function(){

	var div_section = "#content_div";

	var btn_order = "#btn_orders";
	var file_order = "orders.php";
	switch_menu(btn_order, div_section, file_order);

	var btn_books = "#btn_books";
	var file_books = "books.php";	
	switch_menu(btn_books, div_section, file_books);

	var btn_make_order = "#btn_make_order";
	var file_make_order = "make_order.php";
	switch_menu(btn_make_order, div_section, file_make_order);

	var btn_buy = "#btn_buy";
	var file_buy = "make_order.php";
	switch_menu(btn_buy, div_section, file_buy);

 });