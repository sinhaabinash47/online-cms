<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Registration</title>
</head>

<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms2_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{
$tracking_id = rand(9999999,99999999);

	$s1 = $_POST['FullName'];
	$s2 = $_POST['JOBID'];
	$s3 = $_POST['EMAIL'];
	$s4 = $_POST['Branch'];
	$s5 = $_POST['CONTACT'];
	$s6 = $_POST['ADDRESS'];
	$s7 = $_POST['STATE'];
	$s8 = $_POST['POST'];
	$s9 = $_POST['AADHAR'];
	$s10 = $_POST['JOININGYEAR'];
	$s11 = $_POST['ENDYEAR'];
	$s12 = $_POST['SIGNATURE'];
	


$sql = "INSERT INTO staff(FullName, JOBID, EMAIL,Branch, CONTACT,ADDRESS, STATE,POST,AADHAR,JOININGYEAR,ENDYEAR,SIGNATURE) 

VALUES ('$s1', '$s2', '$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12')";

if ($conn->query($sql) === TRUE) {
  /*echo "New record inserted successfully";*/
  header("location: oldstafflist.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}
}

$conn->close();
?>
</body>
</html>