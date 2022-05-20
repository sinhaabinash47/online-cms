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
	$s1 = $_POST['Full_Name'];
	$s2 = $_POST['Email'];
	$s3 = $_POST['Password'];
	$s4 = $_POST['Confirm_Password'];
	$s5 = $_POST['Contact'];
	$s6 = $_POST['Country'];
$sql = "INSERT INTO register(Full_Name, Email, Password, Confirm_Password, Contact,Country)
VALUES ('$s1', '$s2', '$s3','$s4','$s5','$s6')";

if ($conn->query($sql) === TRUE) {
  /*echo "New record inserted successfully";*/
  header("location: login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
</body>
</html>