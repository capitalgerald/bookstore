<?php
    //Pick Book code from previous Page
    if(isset($_POST['name']))
    {
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
        
        if (!empty($name)) 
        {
            include 'database.php';

             $sql = "INSERT INTO orders (name, email, phone, country, district, county, subcounty, parish, village, comment, ordered_books) VALUES ('$name', '$email', '$phone', '$country', '$district', '$county', '$subcounty', '$parish', '$village', '$mycomment', '$ordered_books')";

            if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }
    }
?>
