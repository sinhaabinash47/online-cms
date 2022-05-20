<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Online Courier Management System</title>

<style>
body {
  background-color: bisque;
}
.container{
  max-width:450px;
  margin-bottom: 36px;
}
.container1{
  max-width:912px;
  margin-bottom: auto;
  height: 300px;
}
.btn{
  width: 200px;
}
.navbar-expand-lg {
    background-color: brown;
}
.navbar-light .navbar-brand {
  color: white;
  font-variant: small-caps;
}
.mt-3 {
  width: 1267px;
  margin-left: -406px;
  height: 240px;
}
.mb-0 {
  margin-left: -453px;
  margin-top: -11px;
  font-variant: all-petite-caps;
}
.back{
  background-color: black;
}
.mb-4 {
  color: white;
}
*, ::after, ::before {
  box-sizing: border-box;
  /*color: white;*/
}
.c{
  color: white;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
  text-align: justify;
  font-variant: all-petite-caps;
  font-style: italic;
  margin-left: 82px;
}
.navbar {
    position: sticky;
    top: 0px;
}

</style>

</head>
<body>
<!------------------------Start Navbar----------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light1">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Courier Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!------------------------End Navbar----------------------------->



<!------------------------Tracking----------------------------->
<form method="post">
  <div class="container">
    <div class="mb-8 my-3">
  <label for="exampleFormControlInput1" class="form-label">Enter Your Tracking Id</label>
<input type="text" class="form-control" name="tracking_id" id="exampleFormControlInput1" placeholder="Enter Tracking Id">
  </div>
    <input type="submit" class="btn btn-danger" name="track" value="Track" onclick="myFunction()">
</div>
  </form></body></br></br>
<center>

<div class="container1">
  <table id="recordListing" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Sender Name</th>
        <th>Sender Contact</th>
        <th>Reciever Name</th>                    
        <th>Reciever Contact</th>
        <th>Tracking Id</th>  
        <th>Status</th> 
        <th>Location</th>         
      </tr>

<?php
if(isset($_POST["track"]))
{
include('db_connect.php');
  $t = $_POST['tracking_id'];
  
  $sql ="SELECT * FROM parcels where Tracking_Id='$t'";
  $result = mysqli_query($connection, $sql);  
  $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
          
if($count == 1){  
?>

    <tr>
      <th><?php echo $rows['S_FullName'];?></th>
      <th><?php echo $rows['S_Contact'];?></th>              
      <th><?php echo $rows['R_FullName'];?></th>
      <th><?php echo $rows['R_Contact'];?></th>
      <th><?php echo $rows['Tracking_Id'];?></th>
      <th><?php echo $rows['Status'];?></th>
      <th><?php echo $rows['Location'];?></th>
    </tr>
    
<?php
}  
else{  
    echo "<h1>Invalid Tracking Id !!! Please Enter Valid Tracking Id</h1>";  
    }  
  }   
?>
                
      </thead>
    </table>
</div>
</center>
<script>
  function myFunction() {
  alert("Showing the location of the item with your tracking id......."); 
}
</script>

<!------------------------------------Tracking---------------------------------->


 <!----------------------------------- Footer ---------------------------------->
<footer class="page-footer font-small unique-color-dark back">

  <div style="background-color: peru; height:41px;">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
      <div class="col-md-6 col-lg-7 text-center text-md-right">
        <a class="fb-ic">
          <i class="fab fa-facebook-f white-text mr-4"> </i>
        </a>
        <a class="tw-ic">
          <i class="fab fa-twitter white-text mr-4"> </i>
        </a>
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g white-text mr-4"> </i>
        </a>
        <a class="li-ic">
          <i class="fab fa-linkedin-in white-text mr-4"> </i>
        </a>
        <a class="ins-ic">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
</div>
  <div class="container text-center text-md-left mt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">ABOUT COURIER</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; text-align: justify">
        <p>The primary objective of courier companies is customer satisfaction. Reliability, Speed of service, Coverage area and value for money are some of the criteria on which the service provided by a courier company is evaluated. </p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Socail Media</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Instagram</a>
        </p>
        <p>
          <a href="#!">Linkedin</a>
        </p>
        <p>
          <a href="#!">Facebook</a>
        </p>
        <p>
          <a href="#!">Github</a>
        </p>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">MAP</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.1155440959096!2d86.14406371448165!3d25.064072643240433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2252d4b31b52f%3A0x3afa909c3fc82fbd!2sHigh%20School%20Nongarh!5e0!3m2!1sen!2sin!4v1627021071784!5m2!1sen!2sin" 
        width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" allowfullscreen></iframe>
      </div>
      <div class="con12 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i>INDIA</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> oncourier@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91 9142629868 </p>
        <p>
          <i class="fas fa-print mr-3"></i> +91 9416787159</p>
      </div>
    </div>
  </div>
<div class="footer-copyright text-center py-3 c"><u>Online Courier Management System @2021</u>
</div>
</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>