<?php 
	include_once "model/Model.php";

	class Post extends Model{
		var $table = "post";
		function getAll(){
			return $this->select($this->table);
			
		}
		// function create(){
			
		// }
	}


 ?>