<!DOCTYPE html>
<html>
<head>
	<title>ex1</title>
	<style>
		.container{
			width: 80%;
			margin:0 auto;
		}

	</style>
</head>
<body>
	<div class="container">
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<h2>File gui len</h2>
			<input type="file" name="image" id="ANH_SP"><br><br>
			<input type="submit" value="submit" name="submit" class="btn-button">
		</form>
	</div>
</body>
</html>