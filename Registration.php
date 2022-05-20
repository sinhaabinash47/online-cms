<!DOCTYPE html>
<html>
<head>
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
  .bg{
    background-color: burlywood;
}
.g-3, .gy-3 {
    --bs-gutter-y: 1rem;
    width: 60%;
    margin-left: 277px;
	margin-top: 34px;
	padding-bottom: 65px;
    border-radius: 13px;
	padding: 42px;
	margin-bottom: 30px;
  
}
.col-md-4 {
    flex: 0 0 auto;
    width: 49.8967%;
}
.col-12{
    
}
.form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1;
    margin-top: 87px;
    width: 72%;
    margin-left: 180px;
}
.bg-light1 {
    --bs-bg-opacity: 1;
    /* background-color: rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important; */
    background-color: cadetblue;
}
.bg-dark {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important;
    margin-top: 70px;
}
.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
    /* width: 159px; */
    padding: 14px 72px;
}
.nav-link {
    display: block;
    padding: 0.5rem -3rem;
    color: #0d6efd;
    text-decoration: none;
    margin-left: 582px;
    color: grey;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}
body {
    background-color: bisque;
}
.navbar {
    position: sticky;
    top: 0px;
}
.con12 {
    flex: 0 0 auto;
    width: 18.8967%;
}
p {
    text-align: justify;
    font-style: oblique;
    font-weight: 600;
}
.text-uppercase {
    margin-right: 55px;
}
element.style {
    background-color: peru;
}
.mb-0 {
    margin-top: 2px;
    font-variant: all-petite-caps;
    font-size: large;
    height: 41px;
}
.rounded {
    border-radius: .25rem!important;
    width: 238px;
    margin-left: 15px;
    margin-top: 38px;
    height: 260px;
	margin-right: 11px;
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
  margin-top: -19px;
}
.top{
  margin-top: -30px;
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
  
</style>
<body>

<!-------Header---------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light1">
  <div class="container-fluid">
    <a class="navbar-brand">Online Courier Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><i class="fa fa-home">Home</i></a>
		  
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<img src="images/a12.jpg" class="rounded float-start" alt="...">
<img src="images/a1.jpg" class="rounded float-end" alt="...">





<form class="row g-3 bg" method="post" action="db_reg.php">
<h3 style="color: brown; font-family: -webkit-body; font-size: 30px;"><strong>SENDER AND RECEIVER</strong></h3>

  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Enter Full Name</label>
    <input type="text" name="S_FullName" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col-md-6">
    <label for="inputFullName" class="form-label">Enter Full Name</label>
    <input type="text" name="R_FullName" class="form-control" placeholder="First name" aria-label="First name">
  </div>
   <div class="col-md-6">
    <label for="inputEmail" class="form-label">Enter Email</label>
    <input type="text" name="S_Email" class="form-control" placeholder="Enter Email" aria-label="Enter Email">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Enter Email</label>
     <input type="text" name="R_Email" class="form-control" placeholder="Enter Email" aria-label="Enter Email">
  </div>
   <div class="col-md-6">
    <label for="inputAddress" class="form-label">Enter Full Address</label>
    <input type="text" name="S_Address" class="form-control" placeholder="Enter Address" aria-label="Enter Address">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Enter Full Address</label>
    <input type="text" name="R_Address" class="form-control" placeholder="Enter Address" aria-label="Enter Address">
  </div>
 
 <div class="col-md-6">
    <label for="inputContact" class="form-label">Contact</label>
    <input type="text" name="S_Contact" class="form-control" placeholder="Enter Contact" aria-label="Enter Contact">
  </div>
   <div class="col-md-6">
    <label for="inputContact" class="form-label">Contact</label>
   <input type="text" name="R_Contact" class="form-control" placeholder="Enter Contact" aria-label="Enter Contact">
  </div>
    <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
<option name="S_State">State:</option>
                  <option>Andhra Pradesh</option>
                  <option>Arunachal Pradesh</option>
                  <option>Assam</option>
                  <option>Bihar</option>
                  <option>Chhattisgarh</option>
                  <option>Goa</option>
                  <option>Gujarat</option>
                  <option>Haryana</option>
                  <option>Himachal Pradesh</option>
                  <option>Jammu Kashmir</option>
                  <option>Jharkhand</option>
                  <option>Karnataka</option>
                  <option>Kerala</option>
                  <option>Madhya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Manipur</option>
                  <option>Meghalaya</option>
                  <option>Mizoram</option>
                  <option>Nagaland</option>
                  <option>Odisha</option>
                  <option>Punjab</option>
                  <option>Rajasthan</option>
                  <option>Sikkim</option>
                  <option>Tamil Nadu</option>
                  <option>Telangana</option>
                  <option>Tripura</option>
                  <option>Uttar Pradesh </option>
                  <option>Uttarakhand</option>
                  <option>West Bengal</option>
    </select>
  </div>
    <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option name="S_State">Select</option>
                  <option>Select State:</option>
                  <option>Andhra Pradesh</option>
                  <option>Arunachal Pradesh</option>
                  <option>Assam</option>
                  <option>Bihar</option>
                  <option>Chhattisgarh</option>
                  <option>Goa</option>
                  <option>Gujarat</option>
                  <option>Haryana</option>
                  <option>Himachal Pradesh</option>
                  <option>Jammu Kashmir</option>
                  <option>Jharkhand</option>
                  <option>Karnataka</option>
                  <option>Kerala</option>
                  <option>Madhya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Manipur</option>
                  <option>Meghalaya</option>
                  <option>Mizoram</option>
                  <option>Nagaland</option>
                  <option>Odisha</option>
                  <option>Punjab</option>
                  <option>Rajasthan</option>
                  <option>Sikkim</option>
                  <option>Tamil Nadu</option>
                  <option>Telangana</option>
                  <option>Tripura</option>
                  <option>Uttar Pradesh </option>
                  <option>Uttarakhand</option>
                  <option>West Bengal</option>
    </select>
  </div>
   <div class="col-md-6">
    <label for="inputPinCode" class="form-label">Pin Code</label>
    <input type="text" name="S_Pincode" class="form-control" placeholder="Enter Contact" aria-label="Enter Contact">
  </div> 
   <div class="col-md-6">
    <label for="inputPinCode" class="form-label">Pin Code</label>
    <input type="text" name="R_Pincode" class="form-control" placeholder="Enter Contact" aria-label="Enter Contact">
  </div>
   </div>
   <div class="col-md-6">
    <label for="inputWeight" class="form-label">Weight</label>
    <input type="text" name="S_Weight" class="form-control" placeholder="Enter Contact" aria-label="Enter Contact">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
<div class="col-12">
  <input type="submit" name="submit" id="submit" class="button but" value="Register" onclick="myFunction()">
</div>
</form>
</div>

<script>
function myFunction() {
  alert("Your Registraion is Successfully.....");
}
</script>


<!-- Footer -->
<footer class="page-footer font-small unique-color-dark back">

  <div style="background-color: peru; height:41px;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">
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





