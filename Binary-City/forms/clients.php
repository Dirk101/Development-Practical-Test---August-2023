<?php 

$back=$_SERVER['HTTP_REFERER'];

include("../db.php");

// Form submit

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field


$name = $_POST['name'];
$client_code = $_POST['client_code'];
$no_linked_contacts = $_POST['no_linked_contacts'];

}


$sql = "INSERT INTO clients (name, client_code, no_linked_contacts)
VALUES ('{$name}', '{$client_code}', '{$no_linked_contacts}')";

if (mysqli_query($conn, $sql)) {
  header ("location:{$back}");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>