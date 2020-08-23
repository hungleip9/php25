<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 4.2</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="../jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="../bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap.min.js"></script>
	<script type="text/javascript" src="../wow.min.js"></script>
	<link rel="stylesheet" href="../animate.css">
	
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?fbclid=IwAR2rDoDUoo6LgSKq3VFOCWub2nnAlruZMkS9WhVgWYzngGNcPBKTOF3MaYM">
</head>
<body>
	<?php session_start(); ?>
	<div class="container">
		<h2 class="text-center">--DOCUMENTS--</h2>
		<div class="container">
			<a href="upload.php" class="btn btn-success">Up Load Document</a>
			<?php
				if (isset($_COOKIE['msg'])) {
			 ?>
			 <div class="alert alert-success" role="alert">
			 	<strong>SUCCESS!!</strong>
			 	<?php echo $_COOKIE['msg']; ?>
			 </div>
			<?php } ?>
			<table class="table">
				<thead>
					<tr>
						<th width="10%">No</th>
						<th width="30%">Name</th>
						<th width="30%">Download</th>
						<th width="30%">#</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($_SESSION['documents'] as $key => $document) { ?>
						<tr>
							<td><?php echo $key; ?></td>
							<td><?php echo $document['name']; ?></td>
							<td><a href="dowload.php?name=<?php echo $document['file_name'] ?>" class="btn btn-success">Dowload</a></td>
							<td><a href="delete.php?mtl=<?php echo $key ?>" class="btn btn-danger">Remove</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
</body>
</html>