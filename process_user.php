<?php

include_once 'db_connect.php';
if(isset($_POST['submit']))
{
   $SNo = $POST['SNo'];
   $FullName = $_POST['FullName'];
   $Email = $_POST['Email'];
   $Address = $_POST['Address'];
   $Contact = $_POST['Contact'];
   $Pincode = $_POST['Pincode'];

$sql = "INSERT INTO list(FullName, Email, Address, Contact, Pincode ) VALUES ('$FullName', '$Email', '$Address', '$Contact', '$Pincode')";  
if (mysqli_query($connection, $sql)) {
      echo "New record created successfully !";
    } else {
      echo "Error: " . $sql . " " . mysqli_error($connection);
    }
    mysqli_close($connection);
   }
?>

 