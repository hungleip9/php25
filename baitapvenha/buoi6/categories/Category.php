<?php 
	include_once "../helper/Model.php";

	class Category extends Model{
		var $table = "categories";
		function getAll(){
			return $this->select($this->table);
		}
		// function create(){
			
		// }
	}


 ?>