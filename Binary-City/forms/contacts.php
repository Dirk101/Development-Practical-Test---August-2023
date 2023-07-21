<?php 

$back=$_SERVER['HTTP_REFERER'];

include("../db.php");

// Form submit

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field


$name = $_POST['name3'];
$surname = $_POST['surname2'];
$email = $_POST['email2'];
$no_linked_contacts = $_POST['no_linked_contacts2'];

}


$fullname=$surname . " " . $name;



$sql = "INSERT INTO contacts1 (fullname, email, no_linked_contacts)
VALUES ('{$fullname}', '{$email}', '{$no_linked_contacts}')";

if (mysqli_query($conn, $sql)) {
  header ("location:{$back}");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>