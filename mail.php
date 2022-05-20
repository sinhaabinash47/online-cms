	
<?php
$rand_number = rand(100000,999999);
include('db_connect.php');
$sql = "INSERT INTO validate_pass(email,otp)
VALUES ('John','$rand_number')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
           
?>