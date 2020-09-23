<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	$error=array();
	if(empty($_POST['user'])){
		$error['user'] = "user rong";
	}else{
		$user=$_POST['user'];
	}
	if(empty($_POST['password'])){
		$error['password'] = "password rong";
	}else{
		$pass=$_POST['password'];
	}

 ?>
<body>
	<form action="index.php?mod=admin&c=user&act=store" method="POST" role="form" enctype="multipart/form-data">
		<label>UserName</label>
		<input type="text" name="user" value="<?php if(isset($user)) echo $user?>"><br>
		<?php if(isset($error['user'])){ ?>
			<span style="color: red"><?php echo $error['user'] ?></span><br>
		<?php } ?>
		<label>PassWord</label>
		<input type="password" name="password"><br>
		<?php if(isset($error['password'])){ ?>
			<span style="color: red"><?php echo $error['password'] ?></span><br>
		<?php } ?>
		<input type="submit" name="submit" value="Dang Nhap">
	</form>
</body>
</html>