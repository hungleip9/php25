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
		function getIdEdit($id,$category){
			return $this->edit($this->table,$id,$category);	
		}
		function add(){
			return $this->insert($this->table);	
		}
		// function create(){
			
		// }
	}


 ?>