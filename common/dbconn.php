<?php
$servername = "localhost";
      $username = "root";
      $password = "1234";
      $dbname = "community";

//     $username = "com9425";
//      $password = "th82578720!";
//    $dbname = "com9425";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>