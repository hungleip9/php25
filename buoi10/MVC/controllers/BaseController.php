<?php 
class BaseController{
	public function view($path, $data=[]){
		extract($data);
		// require_once "view/header";
		require_once "view/" . $path;
		// require_once "view/footer";
	}
	public function redirect(){
		header("Location: ".$path);
	}
}


 ?>