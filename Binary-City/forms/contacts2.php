<?php 

$back=$_SERVER['HTTP_REFERER'];

include("../db.php");

// Form submit

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field


$name = $_POST['name4'];
$surname = $_POST['surname3'];
$email = $_POST['email3'];
$company_name = $_POST['company_name2'];

}


$fullname=$surname . " " . $name;


$get_2nd_letter = substr($company_name, 1, 3);
$get_3rd_letter = substr($company_name, 2, 3);

if (empty($get_2nd_letter)){
$length = 2;    
$random=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
$alpha=$company_name . $random;
	
}else if(empty($get_3rd_letter)){
	$length = 1;    
$random=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
$alpha=$company_name . $random;
}
else{
	$alpha=$company_name;
}

$alpha;

$get_letters_first = substr($alpha, 0, 3);





$sql = "SELECT * FROM contacts2 where client_code LIKE '{$get_letters_first}%' order by id DESC limit 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    


$get_letters = substr($get_letters_first, 0, 3);
 $get_integer = intval(preg_replace('/[^0-9]+/', '', $row["client_code"]), 10)+1;
 $client_code=$get_letters . $get_integer;
 
  }
} else {
 
 $get_letters = substr($alpha, 0, 3);
 $get_integer = 001;
 $client_code=$get_letters . $get_integer;
 
}

if ($get_integer <= 9){
	$client_code=$get_letters . "00" . $get_integer;
}else if ($get_integer <= 99){
	$client_code=$get_letters . "0" . $get_integer;
}else{
	$client_code=$get_letters . $get_integer;
}



$sql = "SELECT * FROM contacts2 where email='{$email}'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
	  echo '<script>
  alert("Email Already Exists");
  history.go(-1);
  </script>';
  exit();
 
  }
} else {
  echo "";
}




$sql = "INSERT INTO contacts2 (fullname, email, company_name, client_code)
VALUES ('{$fullname}', '{$email}', '{$company_name}','{$client_code}')";

if (mysqli_query($conn, $sql)) {
  header ("location:{$back}");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>