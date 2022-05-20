<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>




<?php 
include('inc/header.php');
?>


<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />

<script src="js/ajax.js"></script>


<?php 
include('inc/container.php');
?>

<div class="container contact">	
	<h2 style="margin-bottom: 40px; margin-top: 10px; background-color: cadetblue; color: white;
    font-size: 30px; font-weight: bold">ONLINE COURIER MANAGEMENT SYSTEM</h2>	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addRecord" class="btn btn-success">Add New Record</button>
				</div>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Sender Name</th>
					<th>Sender Contact</th>
					<th>Reciever Name</th>										
					<th>Reciever Contact</th>
					<th>Tracking Id</th>	
					<th>Status</th>					
				</tr>
				
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

			</thead>
		</table>
	</div>

<!---------------------------Default code---------------------------------------->
	<div id="recordModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="recordForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Record</h4>
    				</div>
    				<div class="modal-body">
					<div class="form-group"
							<label for="name" class="control-label">#</label>
							<input type="text" class="form-control" id="#" name="name" placeholder="ID" required>			
						</div>
						<div class="form-group"
							<label for="name" class="control-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>			
						</div>
						<div class="form-group">
							<label for="age" class="control-label">Age</label>							
							<input type="number" class="form-control" id="age" name="age" placeholder="Age">							
						</div>	   	
						<div class="form-group">
							<label for="lastname" class="control-label">Skills</label>							
							<input type="text" class="form-control"  id="skills" name="skills" placeholder="Skills" required>							
						</div>	 
						<div class="form-group">
							<label for="address" class="control-label">Address</label>							
							<textarea class="form-control" rows="5" id="address" name="address"></textarea>							
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Designation</label>							
							<input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">			
						</div>						
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	
<!---------------------------Default code---------------------------------------->
<?php 
include('inc/footer.php');
?>
</body>
</html>