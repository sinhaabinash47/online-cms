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
h2{
  background-color: lightcoral;
  color: white;
  margin-top: 30px;
  text-align: center;
}
.container2 {
  max-width: 920px;
  margin-left: 204px;
  margin-top: 40px;
  background-color: darkgray;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #595959;
   color: white;
   text-align: right;
   padding-right: 20px;
}

</style>


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

<h2>Branch Member Information</h2>
<!--------------------------------------Start Branch Staff------------------------------------------->
<div class="container2">
  <table id="recordListing" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Full Name</th>
        <th>Job Id</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Branch Name</th>
        <th>State</th>
        <th>Year</th>            
        </tr>


        <?php
        include('db_connect.php');
        $sql = "SELECT * FROM new_staff";
                $result = mysqli_query($connection,"SELECT * FROM new_staff");
                
                while($rows=$result->fetch_assoc())
                {

        ?>
      <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <th><?php echo $rows['S.No'];?></th>
                <th><?php echo $rows['Full_Name'];?></th>
                <th><?php echo $rows['Job_Id'];?></th>
                <th><?php echo $rows['Email'];?></th>              
                <th><?php echo $rows['Contact'];?></th>
                <th><?php echo $rows['Branch_Name'];?></th>
                <th><?php echo $rows['State'];?></th>
                <th><?php echo $rows['Year'];?></th>
            </tr>
            <?php
                }
             ?>

      
      </thead>
    </table>
</div>
</center>
<!-----------------------------------------------End Branch Staff------------------------------------------->

<!----------------------------------- Footer ---------------------------------->
<div class="footer">
  <p>Online Courier Management System</p>
</div>
</body>
</html>










