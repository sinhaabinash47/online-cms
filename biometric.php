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
.mb-3 {
    margin-bottom: 1rem!important;
    width: 280px;
    margin-left: 382px;
    margin-top: 32px;
}
.bg1{
	background-color: peru;
}
.reg{
	margin-left: 590px;
}
.form-label {
    margin-bottom: 0.5rem;
    color: black;
    font-weight: bold;
    font-family: fangsong;
    font-size: 25px;
}
.bd1 {
  color: brown;
  font-variant: all-petite-caps;
  margin-left: 189px;
  font-family: auto;
  color: black;
  margin-top: 28px;
}
.border{
  border-color: #007BF3!important;
}
hr:not([size]) {
  height: 2px;
  width: 937px;
  margin-left: 178px;
}
.bd1 {
  color: brown;
  font-variant: all-petite-caps;
  margin-left: 189px;
  font-family: auto;
  color: white;
}
.darken-3{
  background-color: currentcolor;
  margin-top: 100px;
}
.py-5 {
    color: aliceblue;
}
p {
    font-family: cursive;
}
.text-center {
    background-color: black;
}
.table {
    margin-top: 108px;
    background-color: darkkhaki;
    width: 1216px;
    margin-left: 83px;
}
.table-bordered>:not(caption)>*>* {
    border-width: 0 0px;
    text-align: center;
}
.col{
  color: blue;
}

</style>

<body class="bg1">
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

<h2 class="bd1">STAFF SHOULD BE SUBMIT THEIR BIO-METRIC ENTERED BY 10o'CLOCK</h2>
<hr class="border"></hr>

<!--------------------------START HEADER-------------------------------------------->
<form method="post"> 
<div class="mb-3" method="post" action="db_biometric.php">
  <label class="form-label">ENTER AADHAR </label>
  <input type="BIO-METRIC" name="aadhar" class="form-control" id="BIO-METRIC" placeholder="3456 6537 9846">
  <h6 class="col">Enter Vlid Aadhar Number.<h6>
</div>
<div class="reg">
  <input type="submit" name="submit" id="submit" class="button but" value="SUBMIT">
</div>
</form>
<div class="container1">
  <table id="recordListing" class="table table-bordered table-striped">
    <thead>
      <tr>
          <th>S.NO</th>
          <th>FULL NAME</th>
          <th>JOB ID</th>
          <th>EMAIL</th>
          <th>AADHAR</th>                   
          <th>CONTACT</th> 
          <th>STATUS</th>
               
      </tr>
     

<?php
if(isset($_POST["submit"]))
{
include('db_connect.php');
  $t = $_POST['aadhar'];
  
  $sql ="SELECT * FROM staff where AADHAR='$t'";
  $result = mysqli_query($connection, $sql);  
  $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
          
if($count > 0){  
?>

    <tr>
      <th><?php echo $rows['S.NO'];?></th>
      <th><?php echo $rows['FullName'];?></th>              
      <th><?php echo $rows['JOBID'];?></th>
      <th><?php echo $rows['EMAIL'];?></th>
      <th><?php echo $rows['AADHAR'];?></th>
      <th><?php echo $rows['CONTACT'];?></th>
      
    </tr>
    
<?php
}  
else{  
    echo "<center><h1>Invalid Aadhar Number</h1></center>";  
    }  
  }   
?>
        </thead>
    </table>
</div>           
    



<script>
  function myFunction() {
  alert("Your Registraion is Successfully.....");
}
</script>
<!----------------------------Footer--------------------------->
<footer class="darken-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="mb5 ">
          <h2>ABOUT</h2>
          <p>The Aadhaar Enabled Biometric Attendance System has been designed to improve the productivity and punctuality of government employees. The system authenticates employee's attendance using Aadhaar number generated by the Unique Identification Authority of India (UIDAI).</p>
 
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">
    <a href="https://mdbootstrap.com/">ONLINE COURIER MANAGEMENT SYSTEMS : © 2020</a>
  </div>
</footer>
<!-----------------------------------------------Footer---------------------------------------->
</body>
</html>

    