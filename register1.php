<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<style>

body{
  background-color: darkkhaki;
}
.table {
  width: 81%;
  margin-left: 151px;
  margin-top: 60px;
  background-color: indigo;
  color: aliceblue;
}
.navbar-light .navbar-brand {
  font-variant: all-petite-caps;
  margin-left: 27px;
  color: aliceblue;
}
.bg{
  background-color: midnightblue;
}
.my-lg-0 {
  display: flex;
}
.form-control {
  margin-left: 42rem;
  margin-right: 11px;
}
.pt-4 {
  background-color: black;
  margin-top: 300px;
}
.text-center {
  text-align: center!important;
  color: aliceblue;
}
.btn {
  color: blue;
}
.tab{
  background-color: black;
}

</style>

<body>
<!---------------------------------------------HEADER---------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg">
 <a class="navbar-brand" href="#">Online Courier Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!---------------------------------------------HEADER---------------------------------------------->
  <table class="table table table-bordered border-primary" >
  <thead>
    <tr class="tab">
      <th scope="col">S. No</th>
      <th scope="col">Sender Name</th>
      <th scope="col">Sender Contact</th>
      <th scope="col">Reciever Name</th>
      <th scope="col">Reciever Contact</th>
      <th scope="col">Tracking Id</th>
      <th scope="col">Status</th>
    </tr>
    <div class="bdy">

  <?php
    include('db_connect.php');
    $sql = "SELECT * FROM parcels";
    $result = mysqli_query($connection,"SELECT * FROM parcels");
                
    while($rows=$result->fetch_assoc())
    {
  ?>
    <tr>
    <!--FETCHING DATA FROM EACH 
    ROW OF EVERY COLUMN-->
    <th><?php echo $rows['S.No.'];?></th>
    <th><?php echo $rows['S_FullName'];?></th>
    <th><?php echo $rows['S_Contact'];?></th>              
    <th><?php echo $rows['R_FullName'];?></th>
    <th><?php echo $rows['R_Contact'];?></th>
    <th><?php echo $rows['Tracking_Id'];?></th>
    <th><?php echo $rows['Status'];?></th>
    </tr>
  <?php
    }
  ?>
</div>

  </thead>
</table>
<!-----------------------------------------------FOOTER------------------------------------------>
<footer class="page-footer font-small unique-color-dark pt-4">
  <div class="container">
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
      </li>
    </ul>
  </div>
  <div class="footer-copyright text-center py-3">Online Courier Management System @2021
  </div>
</footer>
<!-----------------------------------------------FOOTER------------------------------------------>
</body>
</html>