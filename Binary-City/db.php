<?php

// INTERNET CONNECTION

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "binary_city";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>