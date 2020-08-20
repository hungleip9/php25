<!DOCTYPE html>
<html lang="en">
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
	<?php session_start(); ?>
	<div class="container">
		<h2 class="text-center">--PRODUCTS IN CART--</h2>
		<a href="index.php" class="btn btn-success">BACK TO HOME</a>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Sanpham</th>
					<th>DonGia</th>
					<th width="200px">So luong</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $sum = 0; ?>
				<?php foreach ($_SESSION['products'] as $key => $product) { 
				$sum += $product['DonGia'] * $product['SoLuong'];
				$amount 
				?>
				<tr>
					<td><?php echo $product['MaSp']; ?></td>
					<td><?php echo $product['TenSp']; ?></td>
					<td><?php echo number_format($product['DonGia']) ?>VND</td>
					<td>
						<?php echo $product['SoLuong']; ?>
					</td>
					<td><a href="delete.php?msp=<?php echo $product['MaSp'] ?>" class="btn btn-danger">Remove</a></td>
				</tr>

				<?php } ?>
			</tbody>
		</table>
		<h2>Tong Tien <?php echo number_format($sum); ?> VND</h2>
	</div>
</body>
</html>