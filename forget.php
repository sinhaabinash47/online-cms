<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bio-Metric Attendance of Branch Members</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
</head>

<style>
	
	.my-lg-0 {
    margin-top: 0!important;
    margin-bottom: 0!important;
    display: inherit;
    margin-left: 45rem;
}
a {
    color: black;
    text-decoration: none;
    font-variant: all-small-caps;
    margin-left: 9px;
    font-weight: bold;
    color: aliceblue;
}
.bg {
    --bs-bg-opacity: 51;
    background-color: firebrick;;
}
body{
	background-color: pink;
}
.form-control{
	margin-left: 140px;
}
.bd1 {
  color: brown;
  font-variant: all-petite-caps;
  margin-left: 189px;
  font-family: auto;
  color: black;
  margin-top: 58px;
}
.border{
  border-color: #007BF3!important;
}
hr:not([size]) {
  height: 2px;
  width: 937px;
  margin-left: 178px;
}
.up1 {
  margin-top: -49px;
  margin-right: 370px;
}
.wid {
  padding: 1px 10px 10px 101px;
  border-radius: 7px;
}
.wid1 {
  margin-left: 207px;
  padding: 6px 39px 9px 30px;
  background-color: bisque;
}
.hhh {
  margin-top: -43px;
  margin-right: 96px;
  color: blue;
}
.footer{
	background-color: currentcolor;
	margin-top: 217px;
	height: 190px;
}
.py-3{
	margin-top: 111px;
	background-color: black;
	color: aliceblue;
  font-variant: all-small-caps;
  font-size: 21px;
}
.font{
	background-color: bisque;
}

</style>

  <body bgcolor="pink">
  	<!--------------------------START HEADER-------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <li class="nav">
        <a class="" href="#">Online Courier Management System</a>
      </li>
      <li class="nav">
        <a class="" href="home.php">Home</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<h2 class="bd1">Enter Your Email</h2>
<hr class="border"></hr>
<!--------------------------START HEADER-------------------------------------------->
    <center><form method="post"><br><br><br>
    	<div class="up1">
      <input class="wid" type="text" name="email"><br><br><br>
      <h6 class="hhh">Enter Registered Email.....</h6>
      <input class="wid1" type="submit" name="submit_email"> 
    </div>
    </form></center>
 

<?php

	if(isset($_POST["submit_email"]))
	{
		
    
    $username1 = $_POST['email'];  
    if($username1 == "sinhaabinash251@gmail.com"){ 
		include('db_connect.php'); 
		$rand_number = rand(100000,999999);
	

$sql = "UPDATE validate_pass SET otp='$rand_number' WHERE email='$username1'";

if ($connection->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $connection->error;
}


$connection->close();
		
		 $to = $username1;
         $subject = "This is subject";
         $body = "OTP for resetting password is: ". $rand_number;
         $header = "From: sinhaabinash251@gmail.com"; 
	     mail($to,$subject,$body,$header);
       	  echo "<center><form method=post><br><br><br>
      <p><h2> Enter OTP </h2></p>
			email<input type=text name=em value=$username1> 
      otp<input type=text name=otp><br><br><br>
	
      <input type=submit name=otp_number> 
    </form></center>";
		
		}

        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }    
	}
?>
	
<?php
		if(isset($_POST["otp_number"]))
	{
			include('db_connect.php'); 
		
		$otp_user =$_POST['otp'];
			$reg_mail=$_POST['em'];
		 
		  $sql = "select *from validate_pass where email = '$reg_mail' and otp = '$otp_user'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count== 1){ 
            ?>

            
       <center><form method="post"><br><br><br>
      <p><h2> Enter Details </h2></p>
      Email <input type="text" name="e" value="<?php echo ($reg_mail) ?>"><br><br><br>
      <h3>New Password</h3>
      new password<input type="text" name="new"><br><br><br>
	confirm password<input type="text" name="cp"><br><br>
      <input type="submit" name="cnfPass"> 
    </form></center>
<?php
}
else{
				echo("login failed");
			}
		}
?>
<?php    
   if(isset($_POST['cnfPass']))
	{
		
		include('db_connect.php'); 
		$s1 = $_POST['new'];
		$s12 = $_POST['e'];
		$sql = "UPDATE validate_pass SET password='$s1' WHERE email='$s12'";

if ($connection->query($sql) === TRUE) {
  echo "password updated successfully";
} else {
  echo "Error updating record: " . $connection->error;
}
	}
?>

<!-- Footer -->
<footer class="footer ">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled font">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
         <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">ONLINE COURIER MANAGEMENT SYSTEM: @ 2021
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>