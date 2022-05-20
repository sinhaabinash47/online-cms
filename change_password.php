<!DOCTYPE html>
<html>
	<head>
		<title>Box Model</title>
	<style>
				
	</style>
	</head>
  <body bgcolor="green#000000">
	  <center><form method="post"><br><br><br>
      <p><h2> Enter OTP </h2></p>
      new password<input type="text" name="new"><br><br><br>
	confirm password<input type="text" name="cp"><br><br>
      <input type="submit" name="otp_number"> 
    </form></center>
	<?php
if(isset($_POST["otp_number"]))
	{
		include('db_connect.php'); 
		$s1 = $_POST['new'];
		$sql = "UPDATE validate_pass SET password='$s1' WHERE email='$username1'";

if ($connection->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $connection->error;
}
	}

	?>
  </body>
</html>