<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.navbar {
  position: sticky;
  top: 0px;
}
.bg-light1 {
  background-color: cadetblue;
}
body {
  background-color: bisque;
}
.box {
  margin-left: 180px;
  width: 63rem;
  BACKGROUND-COLOR: brown;
  margin-top: 3px;
  font-family: ui-sans-serif;
  font-size: 22px;
}
hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: -16;
  border-top: 4px solid rgba(0,0,0,.1);
}
.border-primary {
  border-color: #007BF3!important;
}
.h2, h2 {
  font-size: 2rem;
  margin-left: 159px;
}
hr:not([size]) {
  height: 1px;
  width: 67rem;
  margin-left: 154px;
}
.bd {
  color: brown;
  font-variant: all-petite-caps;
}
.form-label {
  margin-bottom: -6.5px;
  margin-left: 34px;
  margin-top: 34px;
}
.g-3, .gy-3 {
  --bs-gutter-y: 1rem;
  background-color: blueviolet;
  margin-left: 346px;
  width: 648px;
  margin-top: 41px;
  border-radius: 12px;
  display: block;
  height: 41.5rem;
}
.form-control {
  margin-left: 154px;
  margin-top: -35px;
}
.but123 {
  padding: 4px 43px 11px 44px;
  border-radius: 17px;
  margin-left: 416px;
}
.but123:hover {
  padding: 4px 43px 11px 44px;
  border-radius: 17px;
  margin-left: 416px;
  background-color: cadetblue;
}
.bt {
  margin-left: 66px;
  margin-top: 35px;
}
.col-md-6 {
  flex: 0 0 auto;
  width: 50%;
  margin-top: 14px;
}
.back{
  background-color: black;
}
.mb-4 {
    color: white;
}
.c{
  color: white;
}
hr:not size{
height: 3px;
    align-items: start;
    margi-left: auto;
    padding: 14px 66px;
}
.line{
  margin-left: 20px;
}
.fa {
  color: white;
  font-size: 21px;
}
.fa:hover {
  background-color: blue;
  border-radius: 4px;
}
.text-center {
  margin-top: -14px;
}
.top{
  margin-top: -14px;
}
a {
  color: #0d6efd;
  text-decoration: none;
}
.but {
  margin-left: 502px;
  padding: 7px 57px 5px 63px;
  border-radius: 14px;
  background-color: darkgrey;
}
.g-3, .gy-3 {
  display: flex;
  width: 870px;
}
.form-control {
  margin-left: 112px;
  margin-top: -35px;
  width: 234px;
}
.col-md-6 {
  flex: 0 0 auto;
  width: 50%;
  margin-top: 14px;
  margin-right: -82px;
}
.form-control {
  margin-left: 130px;
  margin-top: -35px;
  width: 234px;
}
.g-3, .gy-3 {
  display: flex;
  width: 870px;
  margin-left: 252px;
}
.but123 {
  padding: 4px 43px 11px 44px;
  border-radius: 17px;
  margin-left: 535px;
}
.col-md-6 {
  margin-right: -82px;
}

</style>


<!------------------------Start Navbar----------------------------->
<body>
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
        <input class="form-control1 me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!------------------------End Navbar----------------------------->
<h2 class="bd">CURRENT WORKING STAFF IN THE BRANCH</h2>
<hr class="border-primary"></hr>

<!--------------------------------------Start Branch Staff------------------------------------------->

<form class="row g-3 bg" method="post" action="db_newstaff.php">


  
  <div class="col-md-6">
    <label class="form-label">Full Name</label>
    <input type="text" name="FullName" class="form-control" placeholder="Full name">
  </div>
    <div class="col-md-6">
    <label for="inputFullName" class="form-label">Job Id</label>
    <input type="text" name="JOBID" class="form-control" placeholder="Job Id">
  </div>
    <div class="col-md-6">
    <label for="inputFullName" class="form-label">Email</label>
    <input type="text" name="EMAIL" class="form-control" placeholder="Email">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Branch Name</label>
    <input type="text" name="BRANCH" class="form-control" placeholder="Branch Name">
  </div>
  <div class="col-md-6">
    <label for="Contact" class="form-label">Contact</label>
    <input type="text" name="CONTACT" class="form-control" placeholder="Contact">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Address</label>
    <input type="text" name="ADDRESS" class="form-control" placeholder="Address">
  </div>
    <div class="col-md-6">
    <label for="inputFullName" class="form-label">State</label>
    <input type="text" name="STATE" class="form-control" placeholder="State">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Post</label>
    <input type="text" name="POST" class="form-control" placeholder="Post">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Aadhar</label>
    <input type="text" name="AADHAR" class="form-control" placeholder="Aadhar">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Joining Year</label>
    <input type="text" name="JOININGYEAR" class="form-control" placeholder="Joining Year">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">End Year</label>
    <input type="text" name="ENDYEAR" class="form-control" placeholder="End Year">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Signature</label>
    <input type="text" name="SIGNATURE" class="form-control" placeholder="Signature">
  </div>
  <div class="col-12 bt">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
  <input type="submit" name="submit" id="submit" class="button but123" value="Register">
  </div>
</form>
</div>


<!-----------------------------------------------End Branch Staff------------------------------------------->



<!-- Footer -->
<footer class="page-footer font-small unique-color-dark back">

  <div style="background-color: peru; height:41px; margin-top: 20px;">
    <div class="container">

      <!-- Grid row-->
      <div class="row d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Your Welcome......!!!</h6>
        </div>

<!-------------------------------Start Social Icons---------------------------------->
        <div class="col-md-6 col-lg-7 text-center text-md-right top">
          <a class="fb-ic">
            <a href="https://www.facebook.com/"><i class="fa fa-fw fa-facebook-square"></i>
          </a>
          <a class="tw-ic">
            <a href="https://twitter.com/"><i class="fa fa-fw fa-twitter"></i>
          </a>
          <a class="gplus-ic">
            <a href="https://www.google.com/"><i class="fa fa-fw fa-google"></i>
          </a>
          <a class="li-ic">
            <a href="https://www.linkedin.com/"><i class="fa fa-fw fa-linkedin"> </i>
          </a>
          <a class="ins-ic">
            <a href="https://www.instagram.com/"><i class="fa fa-fw fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
<!-------------------------------End Social Icons---------------------------------->


<!------------------------------- Footer Links ---------------------------------->
  <div class="container text-center text-md-left mt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">ABOUT COURIER</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto line" style="width: 65px; text-align: justify">
        <p>The primary objective of courier companies is customer satisfaction. Reliability, Speed of service, Coverage area and value for money are some of the 
    criteria on which the service provided by a courier company is evaluated. </p>
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
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Home</a>
        </p>
        <p>
          <a href="#!">BRANCH</a>
        </p>
        <p>
          <a href="#!">SHIPPING</a>
        </p>
        <p>
          <a href="#!">PARCELS</a>
        </p>
      </div>
      <div class="con12 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-fw fa-"></i>INDIA</p>
        <p>
          <i class="fa fa-fw fa-envelope"></i><u>oncourier@gmail.com</u></p>
        <p>
          <i class="fa fa-fw fa-phone"></i> +91 9142629868 </p>
        <p>
          <i class="fa fa-fw fa-phone"></i> +91 9416787159</p>
      </div>
    </div>
  </div>
<div class="footer-copyright text-center py-3 c"><u>Online Courier Management System @2021</u>
</div>

</footer>

</body>
</html>










