<?php 
require_once 'controllers/BaseController.php';
require_once 'model/User.php';
class AuthAdminController extends BaseController{
	public function login(){
		$this->view('admin/auth/login.php');
	}
	public function checkLogin(){
		
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$userModel= new User();
		$user = $userModel->getUserByName($username);
		if ($user) {
			if($user['password']==$password){
				$_SESSION['login'] = true;
				header('Location: index.php?mod=admin&c=home&act=index');
				
			}else{
				$_SESSION['login'] = false;
				setcookie("error", "Mat Khau Khong Dung", time() + 3);
				header('Location:index.php?c=home&mod=client&act=index');
			}
		}else{
			$_SESSION['login'] = false;
			setcookie("error", "Tai Khoan Khong Dung", time() + 3);
			header('Location:index.php?c=home&mod=client&act=index');
		}
	}
	public function logout(){
		$_SESSION['login'] = false;
		header('Location:index.php?c=home&mod=client&act=index');
	}
}
	


 ?>