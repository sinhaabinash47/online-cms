<?php
class Database

	private $host = 'localhost';
	private $user = 'root';
	private $password = 'root';
	private $database = 'records';
	
	public function getConnection(){
		$conn = mysqli_connect($host,$user, $password,$database);
		if($conn->connect error){
			die("Error faild to connect to MySQL: " . $conn->connect_error);
		}
		else{
			return $conn;
		}
	}
}	
?>