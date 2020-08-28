<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 4.2</title>
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
	<style type="text/css">
		
	</style>
</head>
<body>
	<?php session_start(); ?>
	<div class="container">
		<h2 class="text-center">--PRODUCTS IN CART--</h2>
		<a href="muahang.php" class="btn btn-success">BACK TO HOME</a>
		<table class="table">
			<thead>
				<tr>
					<th>Code</th>
					<th>Name</th>
					<th>Price</th>
					<th width="200px;">Quality</th>
					<th>Amount</th>
					<th>Image</th>
				</tr>
			</thead>
			<tbody>
				<?php $sum = 0; ?>
				<?php foreach ($_SESSION['products'] as $key => $product) { 
						$sum += $product['GiaTien'] * $product['SoLuong'];
						$amount 
					?>
					<tr>
						<td><?php echo $product['MaSp']; ?></td>
						<td><?php echo $product['TenSp']; ?></td>
						<td><?php echo number_format($product['GiaTien']) ?>VND</td>
						<td>
							<a class="btn btn-success cong" href="add2cart.php?msp=<?php echo $product['MaSp'] ?>">+</a>
							<?php echo $product['SoLuong']; ?>
							<a class="btn btn-danger tru" href="delete.php?msp=<?php echo $product['MaSp'] ?>">-</a>
						</td>
						<td><?php echo number_format($product['GiaTien'] * $product['SoLuong']); ?></td>
						<td><img width="10%" height="5%" src="<?php echo $product['Anh'] ?>" alt=""></td>	
					</tr>

				<?php } ?>
			</tbody>
		</table>
		<h2>Tong Tien <?php echo number_format($sum); ?> VND</h2>
	</div>
</body>
</html>