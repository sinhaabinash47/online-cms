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
body {
  background-color: burlywood;
}
.table {
  margin-top: 57px;
  width: 85rem;
  margin-left: 41px;
}
hr:not([size]) {
  height: 5px;
  width: 937px;
  margin-left: 178px;
}
.bg2 {
  --bs-bg-opacity: 51;
  background-color: brown;
}
a {
  color: white;
  text-decoration: none;
  font-variant: all-small-caps;
  margin-left: 1px;
  font-weight: bold;
}
.my-lg-0 {
  margin-top: 0!important;
  margin-bottom: 0!important;
  display: inherit;
  margin-left: 45rem;
}
.h2, h2 {
  font-size: 25PX;
  margin-left: 193px;
  font-family: emoji;
  font-style: oblique;
  margin-top: 21px;
}



</style>

<body>
<!--------------------------START HEADER-------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg2">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <li class="nav">
        <a class="">Online Courier Management System</a>
      </li>
      
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<h2 class="bd1">DATA OF CURRENT STAFF WHO ARE CURRENTLY WORKING IN THE BRANCH.</h2>
<hr class="border"></hr>
<!--------------------------START HEADER-------------------------------------------->
	<div class="table">
	<table id="recordListing" class="table table-bordered">
			<thead>
				<tr style="background-color:black; color: white;">
					<th>S.NO</th>
					<th>FULL NAME</th>
					<th>JOB ID</th>
					<th>EMAIL</th>
          <th>BRANCH</th>										
					<th>CONTACT</th>
          <th>Address</th>
					<th>STATE</th>
					<th>POST</th>	
					<th>AADHAR</th>	
					<th>JOINING YEAR</th>
					<th>END YEAR</th>
					<th>SIGNATURE</th>				
				</tr>

        <?php
        include('db_connect.php');
        $sql = "SELECT * FROM staff";
        $result = mysqli_query($connection,"SELECT * FROM staff");
          
        while($rows=$result->fetch_assoc())
        {
        ?>
      <tr>
        <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
          <th><?php echo $rows['S.NO'];?></th>
          <th><?php echo $rows['FullName'];?></th>
          <th><?php echo $rows['JOBID'];?></th>              
          <th><?php echo $rows['EMAIL'];?></th>
          <th><?php echo $rows['BRANCH'];?></th>
          <th><?php echo $rows['CONTACT'];?></th>
          <th><?php echo $rows['ADDRESS'];?></th>
          <th><?php echo $rows['STATE'];?></th>
          <th><?php echo $rows['POST'];?></th>
          <th><?php echo $rows['AADHAR'];?></th>
          <th><?php echo $rows['JOININGYEAR'];?></th>
          <th><?php echo $rows['ENDYEAR'];?></th>
          <th><?php echo $rows['SIGNATURE'];?></th>
      </tr>
      <?php
      }
      ?>

			</thead>
		</table>
	</div>
	</body>
</html>