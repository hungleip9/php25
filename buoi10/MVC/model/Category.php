<?php 
	include_once "model/Model.php";

	class Category extends Model{
		var $table = "categories";
		function getAll(){
			return $this->select($this->table);		
		}
		function getId($id){
			return $this->detail($this->table,$id);	
		}
		
		function add($data){
			return $this->add($this->table,$data);	
		}
		function deleteCategory($id){
			return $this->delete($this->id);	
		}
		// function create(){
			
		// }

	}


 ?>