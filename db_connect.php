<?php
$host="localhost";
$user="root";
$password="";
$database="cms2_db";

$connection=mysqli_connect($host,$user, $password,$database);

if($connection)
{
    //echo "connection ok";
} 

else
{
    echo "connection failed";
    echo mysqli_error($connection);
}
?>




 