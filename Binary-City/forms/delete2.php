<?php

$back=$_SERVER['HTTP_REFERER'];

include("../db.php");

$id=$_GET["id"];

// sql to delete a record
$sql = "DELETE FROM contacts2 WHERE id={$id}";

if ($conn->query($sql) === TRUE) {
  header ("location:{$back}");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>