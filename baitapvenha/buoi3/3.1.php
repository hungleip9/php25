<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	<title>Bai 3.1</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="wow.min.js"></script>
	<link rel="stylesheet" href="animate.css">
	
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?fbclid=IwAR2rDoDUoo6LgSKq3VFOCWub2nnAlruZMkS9WhVgWYzngGNcPBKTOF3MaYM">

	<script>
	    new WOW().init();
	</script>
	<style>
		*{
			font-size: 20px !important;
		}
	</style>
</head>
<body>
	<div class="container">
		<legend align="center"><h1><b>ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</b></h1></legend>
		<h1 align="center">Thông Tin Sinh Viên</h1>
		<hr>
		<?php
			$ID = $_POST['ID'];
			$NAME = $_POST['NAME'];
			$PHONE = $_POST['PHONE'];
			$EMAIL = $_POST['EMAIL'];
			$GENDER = $_POST['GENDER'];
			$ADR = $_POST['ADR'];
		?>
		<ul>
			<li><?php echo "Mã Sinh viên : " . $ID; ?></li>
			<li><?php echo "Họ Tên : " . $NAME; ?></li>
			<li><?php echo "Số Điện Thoại : " . $PHONE; ?></li>
			<li><?php echo "Email : " . $EMAIL; ?></li>
			<li><?php echo "Giới Tính : " . $GENDER; ?></li>
			<li><?php echo "Địa chỉ : " . $ADR; ?></li>
		</ul>
	</div>
	
</body>
</html>