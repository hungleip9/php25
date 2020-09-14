<?php 
	include_once "model/Model.php";

	class Category extends Model{
		protected $table = "categories";
		function getAll(){
			return $this->select($this->table);		
		}
		function getId($id){
			return $this->detail($this->table,$id);	
		}
		function deleteCategory($id){
			
			return $this->delete($this->table,$id);
		}
		function editCategory($id){
			return $this->edit($this->table,$id);
		}
	}


 ?>