<?php 
include_once "Connection.php";
	class Model{
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
		$conn = connect();
		$query= "DELETE FROM `$table` WHERE id = $id";

    	// echo $query;

    	// die();
		$status = $this->conn->query($query);
		
		return $status;
	}
	function insert($table,$data){
		// $conn = connect();
		$query="INSERT INTO `$table`";
		$string_1='';
		$string_2='';
		$i=0;
		foreach ($data as $key => $value) {
			$i++;
			$string_1 .= $key;
			if ($i != count($data)) {
				$string_1 .= ',';
			}
			$string_2 .= "'".$value."'";
			if ($i != count($data)) {
				$string_2 .= ',';
			}
		}
		$string = '('.$string_1.')'.' VALUE '.'('.$string_2.')';
		$query = $query.$string;
		
		$status = $this->conn->query($query);
		return $status;
		
	}

	function edit($table,$data,$id){
		// $conn = connect();
		$query = "UPDATE $table SET ";
		
		foreach ($data as $key => $value) {
			
			$query .= $key . " = '" . $value . "',";
			
		}
		$query = substr_replace($query, "",-1);
		
		$query .= " WHERE id = $id";
		
	
		$status = $this->conn->query($query);
		return $status;
		}
	}

 ?>