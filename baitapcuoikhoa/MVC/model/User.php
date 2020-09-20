<?php 
	include_once "Model.php";

	class User extends Model{
		
		protected $table = 'user';
		function getAll(){
			return $this->select($this->table);		
		}
		function deleteUser($id){
			return $this->delete($this->table,$id);	
		}		
		function detailUser($id){
			return $this->detail($this->table,$id);	
		}
		function editUser($id){
			return $this->edit($this->table,$id);	
		}
		function getUserByName($username){
			return $this->getByName($this->table,$username);
		}
		function getName($name){
			return $this->selectName($this->table,$name);
		}
	}

 ?>