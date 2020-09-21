<?php 
include_once "Connection.php";
	class Model{
		protected $table;
		var $conn;

		function __construct(){
			$connection = new Connection();
			$this->conn = $connection->connect();
		}

		function select($table){
		
		$query = "SELECT * FROM $table";
		$result = $this->conn->query($query);
		//tao 1 mang de lay du lieu

		$data = array();
			while($row = $result -> fetch_assoc()){
				$data[] = $row;
		}
		return $data;
	}	

	function detail($table,$id){
		$query = "SELECT * FROM $table WHERE id =$id";
		// $conn = connect();
		//thuc thi cau lenh
		$result = $this->conn->query($query);
		$data = $result->fetch_assoc();
		// var_dump($data);
		// die();
		return $data;


	}

	function delete($table,$id){
		$query= "DELETE FROM `$table` WHERE id = $id";

		$status = $this->conn->query($query);
		return $status;
	}
	function Store($data,$link,$link2,$link3,$link4,$link5){
		$query = "INSERT INTO $this->table(";
			foreach ($data as $key => $value) {
				$query .= $key . ",";
			}
			$query = substr_replace($query, ",file,file2,file3,file4,file5)", -1);
			$query .= " VALUES (";
			foreach ($data as $value) {
				$query .= "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, ",'$link','$link2','$link3','$link4','$link5')", -1);
			
			$result = $this->conn->query($query);

			return $result;
		
	}

	function edit($table,$id){
		// $conn = connect();

		$query = "SELECT * FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
			$data = $result->fetch_assoc();
			return $data;
	}
	function Update($data, $id,$link,$link2,$link3,$link4,$link5){
			$query = "UPDATE $this->table SET ";
			foreach ($data as $key => $value) {
				$query .= $key . "=" . "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, "", -1);
			if($link!=null){
			$query .= ",file='$link'";
			}if($link2!=null){
			$query .= ",file2='$link2'";
			}
			if($link3!=null){
			$query .= ",file3='$link3'";
			}if($link4!=null){
			$query .= ",file4='$link4'";
			}if($link5!=null){
			$query .= ",file5='$link5'";
			}
			$query.= " WHERE id = " . $id;
			
			$result = $this->conn->query($query);
			return $result;
		}
		function getByName($table,$username){
			
		$query = "SELECT * FROM $this->table WHERE name="."'".$username."'";
			
		$result = $this->conn->query($query);
		

		$user = $result -> fetch_assoc();
		
		return $user;
		}
	function addADmodel($table,$id){

	}
}
 ?>