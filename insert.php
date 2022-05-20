
<?php
//data Base connection and login session

include("process_user.php");

session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert the item information </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<style>
body{ 
background:#EAE9E5;
 } 
 .login_form{
 	margin-top: 25%;
  background: #fff;
  padding: 30px; 
     box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
     border-radius: 5px;
 }
 .form_btn{ 
 	background: #fb641b;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
    border: none;
    color: #fff; 
    width: 100% 
  }
  .label_txt{ 
font-size: 12px; 
   }  
   .form-control{border-radius: 25px }
   .signup_form{ 
    background: #fff;
  padding-left: 25px; 
   padding-right: 25px; 
      padding-bottom:5px; 
     box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
     border-radius: 5px;
    }
    .logo{ 
      height: 50px; 
      width: auto; 
        display: block;
  margin-left: auto;
  margin-right: auto;
     }
     .errmsg{ 
  margin: 2px auto;
  border-radius: 5px;
  border: 1px solid red;
  background: pink;
  text-align: left;
  color: brown;
  padding: 1px;
}
.successmsg{
  margin: 5px auto;
  border-radius: 5px;
  border: 1px solid green;
  background: #33CC00;
  text-align: left;
  color: white;
  padding: 10px;
}
</style>>
<body>



<!-- Modal -->
<div class="modal fade" id="Stafadddeta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD NEW ITEM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="process_user.php" method="POST">
      <div class="modal-body">
        
		  <div class="mb-3">
		    <label for="FullName" class="form-label">Full Name</label>
		    <input type="Full Name" name="FullName" class="form-control" id="FullName">
		  </div>
		  <div class="mb-3">
		    <label for="Email" class="form-label">Email</label>
		    <input type="Email" name="Email" class="form-control" id="Email">
		  </div>
		  <div class="mb-3">
		    <label for="Address" class="form-label">Address</label>
		    <input type="Address" name="Address" class="form-control" id="Address">
		  </div>
		  <div class="mb-3">
		    <label for="Contact" class="form-label">Contact</label>
		    <input type="Contact" name="Contact" class="form-control" id="Contact">
		  </div>
		  <div class="mb-3">
		    <label for="Pin Code" class="form-label">Pin Code</label>
		    <input type="Pin Code" name="Pincode" class="form-control" id="Pincode">
		  </div>

		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="insertdata" class="btn btn-primary">Save Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

	<div class="container">
		<div class="jumbotron">
			<div class="card">
				<h2>Insert the data by user</h2>
			</div>
			<div class="card">
				<div class="card-body">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Stafadddeta">
					  ADD NEW
					</button>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="yyy">
		
				<?php
					$connection=mysqli_connect($host,$user, $password,$database);
					$db = mysqli_select_db($connection, 'cms_db');

					$query = "SELECT *FROM list";
					$query_run = mysqli_query($connection, $query);
				?>

					<table class="table">
					  <thead>
					    <tr>
					     
					      <th scope="col" >SNo</th>
					      <th scope="col" >Full Name</th>
					      <th scope="col" >Email</th>
					      <th scope="col" >Address</th>
					      <th scope="col" >Contact</th>
					      <th scope="col" >Pincode</th>
					      <th scope="col" >Editing</th>

					    </tr>
					  </thead>
					  
				<?php
					if($query_run)
					{
						foreach ($query_run as $row) 
						{
				?>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					     
					      <td> <?php echo $row['FullName']; ?> </td>
					      <td> <?php echo $row['Email']; ?> </td>
					      <td> <?php echo $row['Address']; ?> </td>
					      <td> <?php echo $row['Contact']; ?> </td>
					      <td> <?php echo $row['Pincode']; ?> </td>
					      
					      <td>
					     
					      </td>
					      </tr>
					    </tr>
					  </tbody>
				<?php
						}
					}
					else
					{
						echo "No Record Found";
					}
				?> 

					</table>
				</div>
			</div>
		</div>
	</div>

<script src = https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>


