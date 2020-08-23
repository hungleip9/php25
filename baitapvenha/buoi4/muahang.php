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
</head>
<body>
	<?php 	require_once "products.php"; ?>
	<div class="container">
		<h2 class="text-center">--PRODUCTS--</h2>
		<div class="container">
			<a href="cart.php" class="btn btn-success">View Cart >>></a>
			<table class="table">
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Price</th>
						<th>Quality</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $key => $product) {?>
						<tr>
							<td><?php echo $product['MaSp'] ?></td>
							<td><?php echo $product['TenSp']; ?></td>
							<td><?php echo number_format($product['GiaTien']); ?></td>
							<td><?php echo $product['SoLuong']; ?></td>
							<td><img src="<?php echo $product['Anh'] ?>" width="10%" height="5%" alt=""></td>
							<td><a href="add2cart.php?msp=<?php echo $product['MaSp'] ?>" class="btn btn-success">Add to cart</a></td>
						</tr>
					<?php 	} ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>