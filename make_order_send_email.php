<?php
/*
$name       = "Kibirango Gerald";
$email      = "capitalgerald@gmail.com";
$phone      = "0703003783";

$country    = "Uganda";
$district   = "Luwero";
$county     = "Katikamu South";

$subcounty  = "Makulubita";
$parish     = "Mawale";
$village    = "Kawumu";

$comment    = "I love your books. They are so organised";
$order_book = "[PR0123, 3]";
*/

    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
   
    $country    = $_POST['country'];
    $district   = $_POST['district'];
    $county     = $_POST['county'];

    $subcounty  = $_POST['subcounty'];
    $parish     = $_POST['parish'];
    $village    = $_POST['village'];

    $comment    = $_POST['comment'];
    $order_book = $_POST['order_book'];


$message = "Name : ".$name.
"\r\n"."<br> Email : ".$email.
"\r\n"."<br> Phone : ".$phone.
"\r\n"."<br> Comment : ".$comment.
"\r\n"."<br> Order : ".$order_book.
"\r\n"."<br> Country : ".$country.
"\r\n"."<br> District : ".$district.
"\r\n"."<br> County : ".$county.
"\r\n"."<br> Subcounty : ".$subcounty.
"\r\n"."<br> Parish : ".$parish.
"\r\n"."<br> Village : ".$village;

echo $message."<br><br>";
 

$to 		= "capitalgerald@gmail.com";// publishing@newvision.co.ug
$subject 	= "New Book Order - ".$district;

$headers 	= "MIME-Version: 1.0" . "\r\n";
$headers 	.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers 	.= 'From: <'.$email.'>' . "\r\n";

$cc = 'info@kibirangogerald.com, capitalmusa22@gmail.com';
$headers 	.= 'Cc: '.$cc.'' . "\r\n";

if(mail($to,$subject,$message,$headers)) {
	echo "Success! Email sent to ".$to;
} else {
	echo "Sorry! Email not sent. Try again";
}
?>
