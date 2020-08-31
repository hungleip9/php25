<?php 
include_once 'connect.php';
	function select($table){
		//thuc thi cau lenh

	$query = "SELECT * FROM $table";

    $conn = connect();

	$result = $conn->query($query);
//tao 1 mang de lay du lieu

	$data = array();
		while($row = $result -> fetch_assoc()){
			$data[] = $row;
		}
		return $data;
	}

	function insert($table, $data){
		$query= "INSERT INTO $table";
		$string_1='';
		$string_2='';
		$i=0;
		foreach ($data as $column => $value) {
			$i++;
			$string_1 .= $column;
			if ($i != count($data)) {
				$string_1 .= ',';
			}

			$string_2 .="'" . $value . "'";
			if ($i != count($data)) {
				$string_2 .= ',';
			}
		}
			$string = '('.$string_1.')'.' VALUES '.'('.$string_2.')';
			$query = $query.$string;
			// echo $query;
			// die();
		
		// $query="INSERT INTO `categories`(`name`,`description`) VALUES ('".$data['name']."',"'.$data['description']."','".$data['created_at']."')";

		$conn = connect();
		$status = $conn->query($query);
		return $status;
	}
	function detail($table,$id){
		$query = "SELECT * FROM $table WHERE id =".$id;
		$conn = connect();
		$result = $conn->query($query);
		 
		$user = $result->fetch_assoc();
		return $user;
	}

	

 ?>