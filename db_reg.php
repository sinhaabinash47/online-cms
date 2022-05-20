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
/*--------------Sender-------------*/
else{
$tracking_id = rand(9999999,99999999);

	$s1 = $_POST['S_FullName'];
	$s2 = $_POST['S_Email'];
	$s3 = $_POST['S_Address'];
	$s4 = $_POST['S_Contact'];
	$s5 = $_POST['S_State'];
	$s6 = $_POST['S_Pincode'];
	$s7 = $_POST['S_Weight'];

/*-----------Receiver--------------*/

	$s8 = $_POST['R_FullName'];
	$s9 = $_POST['R_Email'];
	$s10 = $_POST['R_Address'];
	$s11 = $_POST['R_Contact'];
	$s12 = $_POST['R_State'];
	$s13 = $_POST['R_Pincode'];
	$s14 = $tracking_id;
	$s15 =  "Order Placed";
	$s16 = "Not Updated";
	
$sql = "INSERT INTO parcels(S_FullName, S_Email, S_Address, S_Contact, S_State,S_Pincode,S_Weight,R_FullName,R_Email,R_Address,R_Contact,R_State,R_Pincode,Tracking_Id,Status,Location) 

VALUES ('$s1', '$s2', '$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16')";

if ($conn->query($sql) === TRUE) {
  /*echo "New record inserted successfully";*/
  header("location: register1.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}
}

$conn->close();
?>
</body>
</html>