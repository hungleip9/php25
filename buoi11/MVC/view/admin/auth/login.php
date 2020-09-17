<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang dang nhap</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	*{
		margin:0 auto;
		padding: 0;
	}
	.container{

	}
	.login{
		margin-top: 50px;
		width: 700px;
		height: 150px;
		border:1px solid black;
		border-radius: 10px;
		background-color: #CCFFFF;
		text-align: center;
	}
	input{
		width: 500px;
		height: 30px;
		border-radius: 5px;
		margin-top: 20px;
	}
	button{
		margin-top: 5px;
	}
</style>
<body>
    <div class="container">
    	<div class="login">
       	 	<form method="POST" action="index.php?mod=admin&c=auth&act=checkLogin">
				<input type="text" name="username" size="30" placeholder="Username"><br>
				<input type="password" name="password" size="30" placeholder="Password"><br>
				<button class="btn btn-primary">Submit</button>
			</form>

		</div>
        
    </div>
</body>
</html>