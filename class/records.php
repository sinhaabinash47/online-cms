<?php
class Records{
	
	private $records = 'rec_ord'; /*table*/
	private $id;
	private $name;
	private $skills;
	private $address;
	private $designation;
	private $age;
	private $conn;
	
	public function_construct($db){
		$conn = $db;
	}
	public function listRecords(){
		
	$sqlQuery = "SELECT * FROM ".$this->rec_ord." ";
	if(!empty($_POST["search"]["value"])){
		$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
		$sqlQuery .= ' OR name LIKE "%'.$_POST["search"]["value"].'%" ';			
		$sqlQuery .= ' OR designation LIKE "%'.$_POST["search"]["value"].'%" ';
		$sqlQuery .= ' OR address LIKE "%'.$_POST["search"]["value"].'%" ';
		$sqlQuery .= ' OR skills LIKE "%'.$_POST["search"]["value"].'%") ';			
	}
	
	if(!empty($_POST["order"])){
		$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
	} else {
		$sqlQuery .= 'ORDER BY id DESC ';
	}
	
	if($_POST["length"] != -1){
		$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
	}
	
	$stmt = $this->conn->prepare($sqlQuery);
	$stmt->execute();
	$result = $stmt->get_result();	
	
	$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->rec_ord);
	$stmtTotal->execute();
	$allResult = $stmtTotal->get_result();
	$allRecords = $allResult->num_rows;
	
	$displayRecords = $result->num_rows;
	$records = array();		
	while ($record = $result->fetch_assoc()) { 				
		$rows = array();			
		$rows[] = $record['id'];
		$rows[] = ucfirst($record['name']);
		$rows[] = $record['age'];		
		$rows[] = $record['skills'];	
		$rows[] = $record['address'];
		$rows[] = $record['designation'];					
		$rows[] = '<button type="button" name="update" id="'.$record["id"].'"
			class="btn btn-warning btn-xs update">Update</button>';
		$rows[] = '<button type="button" name="delete" id="'.$record["id"].'"
			class="btn btn-danger btn-xs delete" >Delete</button>';
		$records[] = $rows;
	}
	
	$output = array(
		"draw"	=>	intval($_POST["draw"]),			
		"iTotalRecords"	=> 	$displayRecords,
		"iTotalDisplayRecords"	=>  $allRecords,
		"data"	=> 	$records
	);
	
	echo json_encode($output);
}
}
?>