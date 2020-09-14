
<!DOCTYPE html>
<html>
<head>
	<title>Trang dang nhap</title>
</head>
<body>
	<form method="POST" action="index.php?mod=admin&c=auth&act=checkLogin">
		<input type="text" name="username" size="30" placeholder="Username">
		<input type="password" name="password" size="30" placeholder="Password">
		<input type="submit" name="btn-submit" value="Dang nhap">
	</form>
</body>
</html>