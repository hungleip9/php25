<?php
session_start();
if (isset($_GET['ID'])) {
	$ID = $_GET['ID'];
}
if (isset($_SESSION['info'])) {
	$data_arr = $_SESSION['info'][$ID];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Bai 3.1</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script type="text/javascript" src="../jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap.min.js"></script>
    <script type="text/javascript" src="../wow.min.js"></script>
    <link rel="stylesheet" href="../animate.css">
    
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?fbclid=IwAR2rDoDUoo6LgSKq3VFOCWub2nnAlruZMkS9WhVgWYzngGNcPBKTOF3MaYM">

    <script>
        new WOW().init();
    </script>
</head>
<body>
	<div class="container">
		<h1 align="center" class="mr_top size_header">Thông tin chi tiết</h1>
	
		<ul>
			<li>Mã Sinh Viên : <?php echo $data_arr['ID'];?></li>
			<li>Họ Tên : <?php echo $data_arr['NAME'];?></li>
			<li>Số Điện Thoại : <?php echo $data_arr['PHONE'];?></li>
			<li>Email : <?php echo $data_arr['EMAIL'];?></li>
			<li>Giới Tính : <?php echo $data_arr['GENDER']?></li>
			<li>Địa chỉ : <?php echo $data_arr['ADR'];?></li>
		</ul>
		<a href="list.php" type="button" class="btn btn-success mr-right">Back</a>
	</div>
	
</body>
</html>