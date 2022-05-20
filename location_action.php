<?php
error_reporting(0);
$host="localhost";
$user="root";
$password="root";
$database="cms2_db";

$connection=mysqli_connect($host,$user, $password,$database);

if (!$connection) {
    echo "Error connecting to MySQL: " . mysqli_error($connection);
    die; // You can kill the script here
}


if (isset($_POST['latitude'])){
	$query = "UPDATE buses SET latitude='$_POST[latitude]', longitude='$_POST[lon]' WHERE BusNo='$_POST[BusNo]'";
	$data=mysqli_query($connection, $query);
	if ($data==true) 
		echo "1";
	else{
		echo "<br>".mysqli_error($connection);
		echo "<br>error code".mysqli_errno($connection);
	}
}