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

        $comment    = $_POST['comment'];

        if (!empty($name)) 
        {
            include 'database.php';

             $sql = "INSERT INTO orders (name, email, phone, country, district, county, subcounty, parish, village, comment) VALUES ('$name', '$email', '$phone', '$country', '$district', '$county', '$subcounty', '$parish', '$village', '$comment')";

            if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }
    }
?>





<?php

/*
    // METHOD 1
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }            
    $conn->close();
    */

    /*
    // METHOD 2
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

*/
?>

