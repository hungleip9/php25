<?php 
	include_once "model/Model.php";

	class User extends Model{
		var $table = "user";
		function getAll(){
			return $this->select($this->table);
			
		}
		// function create(){
			
		// }
	}


 ?>