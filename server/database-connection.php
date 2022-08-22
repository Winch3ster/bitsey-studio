<?php


$user = "root";
$password = "";
$database = "Bitsey";

// Create connection
$conn = new mysqli('localhost', $user, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
