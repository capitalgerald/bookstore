<?php
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
   
    $country    = $_POST['country'];
    $district   = $_POST['district'];
    $county     = $_POST['county'];

    $subcounty  = $_POST['subcounty'];
    $parish     = $_POST['parish'];
    $village    = $_POST['village'];

    $mycomment    = $_POST['mycomment'];
    $ordered_books = $_POST['ordered_books'];


    $message = "Name : ".$name.
    "\r\n"."<br> Email : ".$email.
    "\r\n"."<br> Phone : ".$phone.
    "\r\n"."<br> Comment : ".$mycomment.
    "\r\n"."<br> ordered books : ".$ordered_books.
    "\r\n"."<br> Country : ".$country.
    "\r\n"."<br> District : ".$district.
    "\r\n"."<br> County : ".$county.
    "\r\n"."<br> Subcounty : ".$subcounty.
    "\r\n"."<br> Parish : ".$parish.
    "\r\n"."<br> Village : ".$village;

    echo $message."<br><br>";
     

    $to 		= "publishing@newvision.co.ug, capitalgerald@gmail.com";
    $subject 	= "New Book Order - ".$district;

    $headers 	= "MIME-Version: 1.0" . "\r\n";
    $headers 	.= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers 	.= 'From: <'.$email.'>' . "\r\n";

    $cc = 'info@kibirangogerald.com, capitalmusa22@gmail.com';
    $headers 	.= 'Cc: '.$cc.'' . "\r\n";

    if(mail($to,$subject,$message,$headers)) 
    {
    	echo "Success! Email sent to ".$to;
    } 
    else 
    {
    	echo "Sorry! Email not sent. Try again";
    }
?>
