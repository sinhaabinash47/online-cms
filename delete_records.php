<?php include "list.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete_Records</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body class="Delete_Records">

<?php
$fetchQuery = mysqli_query("select *from system_settings") or 
die("could not fetch".mysql_error());
?>
	<table class="table table-condensed table-bordered">
		<tr>
			<th>Staff</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Action</th>
		</tr>

		<?php
		$sr = 1;
		while($row = mysql_fetch_array($fetchQuery)){
			?>
			<tr>
				<form action="" method="post" role = "form">
					<td>
						<?php echo $sr;
						?>
					</form>
				</tr>
				<?php $sr++;
				?>
		</table>
</body>
</html>