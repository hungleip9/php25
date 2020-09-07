<?php 
	include_once "model/Model.php";

	class Category extends Model{
		var $table = "categories";
		function getAll(){
			return $this->select($this->table);
			return $this->edit($this->table);


			
		}
		// function create(){
			
		// }
	}


 ?>