<?php

// Online
/*
$servername = "localhost";
$username = "kibirangogerald_capital";
$password = "w;wdAbM,Whu+";
$dbname = "kibirangogerald_bookstore";
*/

// Offline
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>