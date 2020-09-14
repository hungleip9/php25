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
				echo "Dang nhap thanh cong";
				header('Location: index.php?mod=admin&c=category&act=index');
			}else{
				$_SESSION['login'] = false;
				echo "Mat khau khong dung";
			}
		}else{
			$_SESSION['login'] = false;
			echo "tai khoan khong dung";
		}
	}
	public function logout(){
		$_SESSION['login'] = false;
		header('Location:index.php?c=auth&mod=admin&act=login');
	}
}
	


 ?>