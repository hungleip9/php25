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
				echo "Mat khau khong dung";
				header('Location:index.php?c=home&mod=client&act=index');
			}
		}else{
			$_SESSION['login'] = false;
			echo "tai khoan khong dung";
			header('Location:index.php?c=home&mod=client&act=index');
		}
	}
	public function logout(){
		$_SESSION['login'] = false;
		header('Location:index.php?c=home&mod=client&act=index');
	}
}
	


 ?>